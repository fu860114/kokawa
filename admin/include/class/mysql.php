<?php
    // echo "<script> alert('in mysql_david.php' )</script>";
	
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
            $dsn = "mysql:host={$this->DBhost};dbname={$this->DBname};charset=utf8";
            $this->pdo = new PDO( $dsn, $this->DBuser, $this->DBpassword);

			// 變更語系設定值
			$this->pdo->query( "SET NAMES utf8" );
			$this->pdo->query( "SET CHARACTER_SET_CLIENT=utf8" );
			$this->pdo->query( "SET CHARACTER_SET_RESULTS=utf8" );
		}		

		// 進行查詢並傳回 query id
		function query($queryString , $valary = null)
		{
			if ( $valary == null ) {
				$stmt = $this->pdo->query($queryString);
			}
			else {
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute( $valary );  
			}
			
			$errormsg = $this->pdo->errorInfo();
			if ( $errormsg[0] != "00000" ) { $this->halt("Invalid SQL: " .$errormsg[2] ); }
			
			return $stmt;

		}

		// 提供給臨時查詢功能用的
		function _query($queryString, $valary = null)
		{
			if ( $valary == null ) {
				$stmt = $this->pdo->query($queryString);
			}
			else {
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute( $valary );  
			} 
			
			$errormsg = $this->pdo->errorInfo();
			if ( $errormsg[0] != "00000" ) { $this->halt("Invalid SQL: " .$errormsg[2] ); }
			
			// d $_SESSION['sql_mg00'] =  $errormsg[0] ;
			// d $_SESSION['sql_mg01'] =  $errormsg[1] ;
		    // return $stmt;
			// var_dump(  $stmt );
			// d echo " errormsg-> "."<BR>" ;
			// d  var_dump(  $errormsg );
			// d echo "------------- "."<BR>" ;
			//  return $errormsg ;  // 2
			 return $stmt;
		}
		
		// 執行一個 SQL
		function executeSql( $queryString )
		{
			$execute_result  = @mysql_query($queryString, $this->connectionID);
			$this->errorCode = mysql_errno( $this->connectionID );
			$this->errorMsg  = mysql_error( $this->connectionID );
			$this->errorSql  = $queryString;

			return $errormsg[0];
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
		
		// 進行一個查詢, 並取出全部資料, 以 array 型態傳回, 並釋放 query id
		function &getAll($queryString, $valary = null)
		{
			$getdata = array();
			
			if ( $valary == null ) {
				//$query = $this->pdo->query($queryString);
				//$getdata = $query->fetchAll();
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute();  
			   $getdata = $stmt->fetchAll();				
			}
			else {
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute( $valary );  
			   $getdata = $stmt->fetchAll();
			}
		    
							
			return $getdata;
		}

		// 進行一個查詢, 只取一筆資料, 並釋放 query id
		function &getRow($queryString, $valary = null)
		{
			$results = array();

			if ( $valary == null ) {
				//$query = $this->pdo->query($queryString);
				//$getdata = $query->fetchAll();
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute();  
			   $getdata = $stmt->fetchAll();					
			}
			else {
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute( $valary );  
			   $getdata = $stmt->fetchAll();
			}
			
			if (!is_array($getdata)) { $results = null;	}
            else { $results = $getdata[0]; }			

			return $results;
		}

		// 進行一個查詢, 只取出第一個欄位, 並釋放 query id
		function &getOne($queryString, $valary = null)
		{
			if ( $valary == null ) {
				$query = $this->pdo->query($queryString);
			    $getdatas = $query->fetchAll();	
                $getdata = $getdatas[0];
			}
			else {
			   $stmt = $this->pdo->prepare( $queryString ); 
               $stmt->execute( $valary );  
			   $getdatas = $stmt->fetchAll();
			   $getdata = $getdatas[0];
			}
			
			if (!is_array($getdata)) { $result = null; }
			else {
                foreach( $getdata as $value )
                {
                    $result = $value;
                    break; // 取出第一個值就停止
                }

			}

			return $result;
		}

		// 傳回上一個查詢資料筆數
		function numRows( $query , $valary = null)
		{
		
			$getdata = $query->fetchAll();
            $rowCount = count( $getdata );
			
			return $rowCount;
		}

		function &getName( $dbname , $sernoid, $keyfield = "serno", $getfield = "name")
		{
			$queryString = "select {$getfield} from {$dbname} where {$keyfield}='{$sernoid}'  ";
			$query = $this->pdo->query($queryString);
			$getdatas = $query->fetchAll();	
            $getdata = $getdatas[0];
			
			if (!is_array($getdata)) { $result = null; }
			else {
                foreach( $getdata as $value )
                {
                    $result = $value;
                    break; // 取出第一個值就停止
                }

			}

			return $result;			
			
        }		
		
		function dataSeek( $row_number, $query )
		{
            $getdata = $query->fetchAll();
			return $getdata[$row_number];
		}

		// 傳回 AUTO_INCREMENT ID
		function getLastID( $query )
		{
			return $this->pdo->lastInsertId();
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

			}
			else {
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
			if( $_SERVER['REMOTE_ADDR'] == "60.248.43.100" )
			{
				echo "<b>Database error:</b> $msg<br>\n";
				echo "<b>Mysql error</b>: {$this->errorCode} ({$this->errorMsg})<br>\n";
				echo "<b>SQL</b>: {$this->errorSql}<br>\n";
				die ("Session halted.");
			}
			else
			{
				// david header('Location: index.php');
				exit();
			}
		}

	}

?>
