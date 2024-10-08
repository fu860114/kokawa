<?php

	if (!defined('Usable'))
	{
	    die('Hacking attempt');
	}

	class Mysql {

		var $DBhost;
		var $DBname;
		var $DBuser;
		var $DBpassword;
		var $persistent;

		var $connectionID = null;
		var $queryID = null;
		var $resultSet = array();

		var $errorCode = 0;
		var $errorMsg = "";
		var $errorSql = "";

		// Mysql 類別 建構子
		function Mysql($DBhost, $DBname, $DBuser, $DBpassword, $persistent = false)
		{
			$this->DBhost = $DBhost;
			$this->DBname = $DBname;
			$this->DBuser = $DBuser;
			$this->DBpassword = $DBpassword;
			$this->persistent = $persistent;
		}

		// 進行資料庫連線
		function connectDB()
		{
			if ($this->persistent) {
				$this->connectionID = @mysql_pconnect($this->DBhost, $this->DBuser, $this->DBpassword);
			} else {
				$this->connectionID = @mysql_connect($this->DBhost, $this->DBuser, $this->DBpassword);
			}

			if (!$this->connectionID) {
				$this->halt("connectionID == false, connect failed");
			}

			if (!@mysql_select_db($this->DBname, $this->connectionID)) {
				$this->errorCode = mysql_errno($this->connectionID);
				$this->errorMsg = mysql_error($this->connectionID);
				$this->halt("cannot select database <i>" .$this->dbname. "</i>");
			}

			// 變更語系設定值
			$this->executeSql( "SET NAMES utf8" );
			$this->executeSql( "SET CHARACTER_SET_CLIENT=utf8" );
			$this->executeSql( "SET CHARACTER_SET_RESULTS=utf8" );
		}

		// 結束資料庫連線
		function disconnectDB()
		{
			if ($this->connectionID != 0) {
				@mysql_close($this->connectionID);
				$this->connectionID = null;
			}
		}

		// 進行查詢並傳回 query id
		function query($queryString)
		{
			$this->queryID = @mysql_query($queryString, $this->connectionID);
			$this->errorCode = mysql_errno( $this->connectionID );
			$this->errorMsg  = mysql_error( $this->connectionID );
			$this->errorSql  = $queryString;

			if (!$this->queryID) {
				$this->halt("Invalid SQL: " .$queryString);
			}

			return $this->queryID;
		}

		// 提供給臨時查詢功能用的
		function _query($queryString)
		{
			$_queryID = @mysql_query($queryString, $this->connectionID);
			$this->errorCode = mysql_errno( $this->connectionID );
			$this->errorMsg  = mysql_error( $this->connectionID );
			$this->errorSql  = $queryString;

			if( ! $_queryID ) {
				$this->halt("Invalid SQL: " .$queryString);
			}

			return $_queryID;
		}

		// 執行一個 SQL
		function executeSql( $queryString )
		{
			$execute_result  = @mysql_query($queryString, $this->connectionID);
			$this->errorCode = mysql_errno( $this->connectionID );
			$this->errorMsg  = mysql_error( $this->connectionID );
			$this->errorSql  = $queryString;

			return $execute_result;
		}

		// 檢查 ID 是否存在 ( 傳回 true or false )
		function chkId( $table, $id_field, $id_value, $ext_condition = '' )
		{
			$id = $this->getOne(
                " select {$id_field} ".
                " from {$table} ".
                " where {$id_field} = '{$id_value}' " .
                // 附加額外過濾條件
                ( ( ! empty( $ext_condition ) )
                    ? "   and {$ext_condition} "
                    : "" ) );

			return ( $id != null );
		}

		// 取出一筆記錄, 若未提供 queryID 自動抓類別內預設查詢
		function fetchRecord($queryID = -1)
		{
			if( $queryID == -1 )
			{
				$queryID = $this->queryID;
			}
      
      $this->resultSet = @mysql_fetch_assoc( $queryID );
      $this->errorCode = mysql_errno( $this->connectionID );
      $this->errorMsg  = mysql_error( $this->connectionID );
      
			return $this->resultSet;
		}

		// 進行一個查詢, 並取出全部資料, 以 array 型態傳回, 並釋放 query id
		function &getAll($queryString)
		{
			$queryID = $this->_query($queryString);
			
			$resultArray = array();
			while ($resultSet = $this->fetchRecord($queryID)) {
				$resultArray[] = $resultSet;
			}
			
			$this->freeResult( $queryID );
			return $resultArray;
		}

		// 進行一個查詢, 只取一筆資料, 並釋放 query id
		function &getRow($queryString)
		{
			$queryID = $this->_query($queryString);
			$results = $this->fetchRecord($queryID);
			if (!is_array($results)) {
				$results = null;
			}
			$this->freeResult($queryID);

			return $results;
		}

		// 進行一個查詢, 只取出第一個欄位, 並釋放 query id
		function &getOne($queryString)
		{
			$queryID = $this->_query($queryString);
			$result = @mysql_fetch_row($queryID);
			$this->errorCode = mysql_errno( $this->connectionID );
			$this->errorMsg = mysql_error( $this->connectionID );

			if (!is_array($result)) {
				$result = null;
			} else {
                foreach( $result as $value )
                {
                    $result = $value;
                    break; // 取出第一個值就停止
                }

			}
			$this->freeResult($queryID);

			return $result;
		}

		// 傳回上一個動作的動作筆數
		function affectedRows($connID = null)
		{
			if ($connID === null) {
				return @mysql_affected_rows($this->connectionID);
			} else {
				return @mysql_affected_rows($connID);
			}
		}

		// 傳回上一個查詢資料筆數
		function numRows( $queryID = -1 )
		{
			if ($queryID == -1)
			{
				$queryID = $this->queryID;
			}
			return @mysql_num_rows( $queryID );
		}

		function dataSeek( $row_number, $queryID = -1 )
		{
			if ($queryID == -1)
			{
				$queryID = $this->queryID;
			}
			return @mysql_data_seek( $queryID, $row_number );
		}

		// 傳回 AUTO_INCREMENT ID
		function getLastID()
		{
			return @mysql_insert_id($this->connectionID);
		}

		// 釋放 query id
		function freeResult($queryID = -1)
		{
			if ($queryID == -1)
			{
				$queryID = $this->queryID;
			}
			return @mysql_free_result( $queryID );
		}

		// 新增
		function create($table, $data, $debugmode)
		{

			if ( $table != "" && is_Array($data) )
			{

				$queryString = "INSERT INTO `".$table."` ( ";
				
				foreach( $data as $key => $value ){

					$queryString .= "`".$key."`,";

				}

				$queryString = substr($queryString,0,-1);

				$queryString .= " ) VALUE ( ";

				foreach( $data as $key => $value ){

					$queryString .= "'".$value."',";

				}

				$queryString = substr($queryString,0,-1);

				$queryString .= ")";

        if ( $debugmode == "DEBUG" ) {  echo "SQLSTR = ".$queryString; }
		    else { return $this->getLastID( $this->_query( $queryString ) ); }

			}else{

				   echo "Input Data Error\n";
				   die ("Session halted.");
			}

		}

		// 更新
		function update($table, $data, $mkey, $id)
		{

			if ( $table != "" && is_Array($data) )
			{

				$queryString = "UPDATE `".$table."` SET ";
				
				foreach( $data as $key => $value ){

					$queryString .= "`".$key."` = '".$value."',";

				}

				$queryString = substr($queryString,0,-1);

				$queryString .= " WHERE `".$mkey."` = '".$id."'";

				$this->_query( $queryString );

			}else{

				echo "Input Data Error\n";
				die ("Session halted.");

			}

		}

		// 刪除
		function delete($table, $key, $id)
		{

			if ( $table != "" )
			{

				$queryString = "UPDATE `".$table."` SET `DelFlag` = 'Y' WHERE `".$key."` = '".$id."'";

				$this->_query( $queryString );

			}else{

				echo "Input Data Error\n";
				die ("Session halted.");

			}

		}

		// 刪除
		function recover($table, $key, $id)
		{

			if ( $table != "" )
			{

				$queryString = "UPDATE `".$table."` SET `DelFlag` = '' WHERE `".$key."` = '".$id."'";

				$this->_query( $queryString );

			}else{

				echo "Input Data Error\n";
				die ("Session halted.");

			}

		}

		// 傳回錯誤訊息
		function errorMessage( $msg = "" )
		{
			return
                ( ( $msg != "" )
                    ? "<b>Database error:</b> $msg<br>\n"
                    : "" ).
			    "<b>Mysql error</b>: $this->errorCode ($this->errorMsg)<br>\nSQL: {$this->errorSql} <br>\n";

		}

		// 印出錯誤並中止執行
		function halt( $msg = "" )
		{
/*
			if( $fp=@fopen('/website/autobuy/error_logs/error_' . date('ymd') . '.log', 'a') )
			{
				if(empty($_SERVER['HTTP_X_FORWARDED_FOR']))
					$str_user_ip = $_SERVER['REMOTE_ADDR'];
				else
				{
					$str_user_ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
					$str_user_ip = $str_user_ip[0];
				}
				
				$str_error_log = date('H:i:s') . ' ' . $_SERVER['PHP_SELF'] . ' [' . $str_user_ip . '] mysql_errno=' . $this->errorCode . ' ' . $this->errorMsg . ' tsql=' . $this->errorSql . " \r\n";
				fwrite($fp, $str_error_log);
				
				fclose($fp);
			}
*/
			//if( preg_match('/^61\.63\.83\./', $str_user_ip) )
			if( $_SERVER['REMOTE_ADDR'] == "218.161.95.70" )
			{
				echo "<b>Database error:</b> $msg<br>\n";
				echo "<b>Mysql error</b>: {$this->errorCode} ({$this->errorMsg})<br>\n";
				echo "<b>SQL</b>: {$this->errorSql}<br>\n";
				die ("Session halted.");
			}
			else
			{
				header('Location: index.php');
				exit();
			}
		}

	}

?>
