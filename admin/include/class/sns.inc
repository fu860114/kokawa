<?php

	class sns {

		private $conn;
		private $retMsg;
		private $userid;
		private $passwd;
		private $serv_host;
		private $serv_port;
		private $fp;

		public	$ret_code;
		public	$ret_msg;
		public 	$ret_msisdn;

		// function sns(...) // PHP 5.X
		function __construct($uid, $pwd, $shost, $sport){

			$this->userid = $uid;
			$this->passwd = $pwd;
			$this->serv_host = $shost;
			$this->serv_port = $sport;

		}

		function create_connection(){

			$null_str = "";
			
			// Socket 連線
			$this->fp = fsockopen($this->serv_host, $this->serv_port, $errno, $errstr, 20);
			if (!$this->fp) {
				$this->ret_code = -1;
				$this->ret_msg = "連線失敗";

				return false;
			} 

			$s_type = "\x00";		// SERV_CHECK
			$s_coding = "\x00";		// 無使用設為 0
			$s_length = "\x00";		// 無使用設為 0
			$s_tran_type = "\x00";	// 無使用設為 0

			//帳號 8 碼，少的補 0
			$len = strlen($this->userid);
			if ($len > 8) {
				$s_pchID = substr($this->userid, 0, 8) . "\x00";
			} else {
				$s_pchID  = str_pad($this->userid, 9, "\x00", STR_PAD_RIGHT);
			}

			//密碼 8 碼，少的補 0
			$len = strlen($this->passwd);
			if ($len > 8) {
				$s_pchPasswd = substr($this->passwd, 0, 8) . "\x00";
			} else {
				$s_pchPasswd = str_pad($this->passwd, 9, "\x00", STR_PAD_RIGHT);
			}

			$s_pchMsisdn = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT);	//無使用設為 0
			$s_pchMessageID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);	//無使用設為 0
			$s_pchMessage = str_pad($null_str, 160, "\x00", STR_PAD_RIGHT);	//無使用設為 0
			$s_pchSendTime = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT); //無使用設為 0

			$sMsg = $s_type. $s_coding. $s_length. $s_tran_type;
			$sMsg .= $s_pchID. $s_pchPasswd. $s_pchMsisdn;
			$sMsg .= $s_pchMessageID. $s_pchMessage. $s_pchSendTime;

			$ret = fwrite($this->fp, $sMsg, 217);
			if ($ret == -1) {
				$this->ret_msg = "fwrite failed!";
				$this->ret_code = -1;
				return false; 
			}

			$retMsg = fread($this->fp, 189);
			if (strlen($retMsg) < 189) {
				$this->ret_msg = "fread failed!";
				$this->ret_code = -2;
				return false;
			}
		
			$this->ret_code = unpack("C", substr($retMsg, 0, 1))[1];
			$this->ret_msg = rtrim(substr($retMsg, 29, 160));

			return true;	
		}


		function close_connection()
		{
			fclose($this->fp);
		}

		function send_message($phone, $message)
		{		
			$null_str = "";

			$s_type = "\x02";											// SERV_SEND
			$s_coding = "\x01";											// BIG5 (預設)
			$s_length = "\xa0";											// 160 (預設)
			$s_tran_type = "\x64";										// SEND_NOW
			$s_pchID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);	// 無使用設為 0
			$s_pchPasswd = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);// 無使用設為 0

			$len = strlen($phone);
			//受話號碼 12 碼，少的補 0
			if ($len > 12) {
				$s_pchMsisdn = substr($phone, 0, 12) . "\x00";
			} else {
				$s_pchMsisdn  = str_pad($phone, 13, "\x00", STR_PAD_RIGHT);
			}

			$s_pchMessageID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT); //無使用設為 0


			//傳送內容 160 個英數字，UTF-8 編碼
			$check_msg = str_replace("\r\n", "", $message);
			$isPrint = ctype_print($check_msg);
			if ($isPrint) {
				$len = strlen($message);
				if ($len > 160) {
					$s_pchMessage = substr($message, 0, 160);
				} else {
					$s_pchMessage = str_pad($message, 160, "\x00", STR_PAD_RIGHT);
					$s_length = pack ("C", $len); //改為實際大小
				}
			} else {  // 含中文字，只能 70 個字
				$ucs2msg = mb_convert_encoding($message, "UCS-2BE","UTF-8");
				if ($ucs2msg === false){
					$this->ret_msg = "$message 有無法轉換的字元";
					$this->ret_code = -5;
					return false;
				}
				
				$s_coding = "\x08";	// UCS-2
				$len = strlen($ucs2msg);
				if ($len > 140) {
					$s_pchMessage = substr($ucs2msg, 0, 140);
					$s_pchMessage = str_pad($s_pchMessage, 160, "\x00", STR_PAD_RIGHT);
					$s_length = "\x8C";	 // 最大 140 個字元 (70個字)
					
				} else {
					$s_pchMessage = str_pad($ucs2msg, 160, "\x00", STR_PAD_RIGHT);
					$s_length = pack ("C", $len); //改為實際大小
				}
			}

			$s_pchSendTime = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT); // 無使用設為 0

			
			$sMsg = $s_type. $s_coding. $s_length. $s_tran_type;
			$sMsg .= $s_pchID. $s_pchPasswd. $s_pchMsisdn;
			$sMsg .= $s_pchMessageID. $s_pchMessage. $s_pchSendTime;

			$ret = fwrite($this->fp, $sMsg, 217);
			if ($ret == -1) {
				$this->ret_msg = "fwrite failed!";
				$this->ret_code = -3;
				return false;
			}

			$retMsg = fread($this->fp, 189);
			if (strlen($retMsg) < 189) {
				$this->ret_msg = "fread failed!";
				$this->ret_code = -4;
				return false;
			}
			
			list($kk, $this->ret_code) = @each (unpack("C", substr($retMsg, 0, 1)));
			$this->ret_msg = rtrim(substr($retMsg, 29, 160));

			return true;	
		}

		function send_long_message($phone, $messages)
		{
			$snsid=rand(0, 255); // 注意使用的長簡訊訊息標頭
			$msglen = count($messages);
			if($msglen>0)
			{
				$msgcount = 0;
				foreach($messages as $message)
				{	
					$msgcount++;
					$this->send_each_message_in_long_message($phone, $message, pack("C", $snsid), pack("C", $msglen), pack("C", $msgcount));	
				}	
			}
		}

		function send_each_message_in_long_message($phone, $message, $snsid, $totalmsg, $msgcount)
		{				
			$null_str = "";
			$s_type = "\x02";											// SERV_SEND
			$s_coding = "\x03";											// BIG5 (預設)
			$s_length = "\xa0";											// 160 (預設)
			$s_tran_type = "\x64";										// SEND_NOW
			$s_pchID = "\x00\x00\x01\x00\x00\x00\x00\x00\x00";	        // 長簡訊設為 1 (PchID)
																		// 詳細請見 socket 介接文件中 Set UDHI 說明
			$s_pchPasswd = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);// 無使用設為 0		
			$len = strlen($phone);
			
			//受話號碼 12 碼，少的補 0
			if ($len > 12) {
				$s_pchMsisdn = substr($phone, 0, 12) . "\x00";
			} else {
				$s_pchMsisdn  = str_pad($phone, 13, "\x00", STR_PAD_RIGHT);
			}

			$s_pchMessageID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT); // 無使用設為 0
			
			$s_pchheader = "\x05\x00\x03".$snsid.$totalmsg.$msgcount;	    // 長簡訊訊息標頭 = 三碼數字 + 簡訊序號 + 總則數 + 目前則數
																			// 此標頭對應的爲一個 byte 的簡訊序號 (0-255)，如需要更多序號者可改採其他標頭
																			// 如決定好對應，後續計算長度時記得加入標頭長度
																			// 詳細請見 http 介面文件中長簡訊說明
			
			$s_pchSendTime = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT); // 無使用設為 0
			
			//傳送內容 153 個英數字，UTF-8 編碼
			$check_msg = str_replace("\r\n", "", $message);
			$isPrint = ctype_print($check_msg);
			if ($isPrint) {					
				$len = strlen($message);
				if ($len > 153) {
					$s_pchMessage = substr($message, 0, 153);
				} else {
					$s_pchMessage = str_pad($message, 153, "\x00", STR_PAD_RIGHT);
					$s_length = pack ("C", $len+6); //改為實際大小 + 6 個字元 (標頭)，以下皆同
				}
			} else {  // 含中文字，只能 67 個字
				$ucs2msg = mb_convert_encoding($message, "UCS-2BE","UTF-8");
				if ($ucs2msg === false){
					$this->ret_msg = "$message 有無法轉換的字元";
					$this->ret_code = -5;
					return false;
				}
				
				$s_coding = "\x08";	// UCS-2
				$len = strlen($ucs2msg);
				if ($len > 134) {
					$s_pchMessage = substr($ucs2msg, 0, 134);
					$s_pchMessage = str_pad($s_pchMessage, 160, "\x00", STR_PAD_RIGHT);
					$s_length = "\x8C";	 // 最大 134 個字元 (67個字) 					
				} else {
					$s_pchMessage = str_pad($ucs2msg, 160, "\x00", STR_PAD_RIGHT);
					$s_length = pack ("C", $len+6); //改為實際大小
				}
			}
			
			$s_pchMessage = $s_pchheader.$s_pchMessage;
		
			$sMsg = $s_type. $s_coding. $s_length. $s_tran_type;
			$sMsg .= $s_pchID. $s_pchPasswd. $s_pchMsisdn;
			$sMsg .= $s_pchMessageID. $s_pchMessage. $s_pchSendTime;
				
			$ret = fwrite($this->fp, $sMsg, 217);
			if ($ret == -1) {
				$this->ret_msg = "fwrite failed!";
				$this->ret_code = -3;
				return false;
			}

			$retMsg = fread($this->fp, 189);
			if (strlen($retMsg) < 189) {
				$this->ret_msg = "fread failed!";
				$this->ret_code = -4;
				return false;
			}
			
			list($kk, $this->ret_code) = @each (unpack("C", substr($retMsg, 0, 1)));
			$this->ret_msg = rtrim(substr($retMsg, 29, 160));

			return true;	
		}


		function query_message($tphone, $msgid)
		{
			$null_str = "";

			//SERV_QUERY
			$s_type = "\x03";											// SERV_QUERY
			$s_coding = "\x00";											// 無使用設為 0
			$s_tran_type = "\x00";										// 無使用設為 0
			$s_pchID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);	// 無使用設為 0
			$s_pchPasswd = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);// 無使用設為 0

			$len = strlen($tphone);
			// 受話號碼 12 碼，少的補 0
			if ($len > 12) {
				$s_pchMsisdn = substr($tphone, 0, 12) . "\x00";
				$s_length = "\x0c"; 			//
			} else {
				$s_pchMsisdn  = str_pad($tphone, 13, "\x00", STR_PAD_RIGHT);
				$s_length = pack ("C", $len);	//改為實際大小
			}

			$len = strlen($msgid);
			// Message ID
			if ($len > 8) {
				$s_pchMessageID = substr($msgid, 0, 8) . "\x00";
			} else {
				$s_pchMessageID  = str_pad($msgid, 9, "\x00", STR_PAD_RIGHT);
			}

			$s_pchMessage = str_pad($null_str, 160, "\x00", STR_PAD_RIGHT);	//無使用設為 0
			$s_pchSendTime = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT); // 無使用設為 0

			
			$sMsg = $s_type. $s_coding. $s_length. $s_tran_type;
			$sMsg .= $s_pchID. $s_pchPasswd. $s_pchMsisdn;
			$sMsg .= $s_pchMessageID. $s_pchMessage. $s_pchSendTime;

			$ret = fwrite($this->fp, $sMsg, 217);
			if ($ret == -1) {
				$this->ret_msg = "fwrite failed!";
				$this->ret_code = -6;
				return false;
			}

			$retMsg = fread($this->fp, 189);
			if (strlen($retMsg) < 189) {
				$this->ret_msg = "fread failed!";
				$this->ret_code = -7;
				return false;
			}
			
			$this->ret_code = unpack("C", substr($retMsg, 0, 1))[1];
			$this->ret_msg = rtrim(substr($retMsg, 29, 160));

			return true;	
		}

		function get_resp(){

			$null_str = "";
		
			$s_type = "\x04";												// SERV_GET
			$s_coding = "\x00";												// 無使用設為 0
			$s_length = "\x00";												// 無使用設為 0
			$s_tran_type = "\x00";											// 無使用設為 0
			$s_pchID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);		// 無使用設為 0
			$s_pchPasswd = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);	// 無使用設為 0
			$s_pchMsisdn = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT);	// 無使用設為 0
			$s_pchMessageID = str_pad($null_str, 9, "\x00", STR_PAD_RIGHT);	// 無使用設為 0
			$s_pchMessage = str_pad($null_str, 160, "\x00", STR_PAD_RIGHT);	// 無使用設為 0
			$s_pchSendTime = str_pad($null_str, 13, "\x00", STR_PAD_RIGHT); // 無使用設為 0

			$sMsg = $s_type. $s_coding. $s_length. $s_tran_type;
			$sMsg .= $s_pchID. $s_pchPasswd. $s_pchMsisdn;
			$sMsg .= $s_pchMessageID. $s_pchMessage. $s_pchSendTime;

			$ret = fwrite($this->fp, $sMsg, 217);
			if ($ret == -1) {
				$this->ret_msg = "fwrite failed!";
				$this->ret_code = -8;
				return false; 
			}

			$retMsg = fread($this->fp, 189);
			if (strlen($retMsg) < 189) {
				$this->ret_msg = "fread failed!";
				$this->ret_code = -9;
				return false;
			}
		
			$this->ret_code = unpack("C", substr($retMsg, 0, 1))[1];

			$enc = unpack("C", substr($retMsg, 1, 1))[1];
			$len = unpack("C", substr($retMsg, 2, 1))[1];

			if ($this->ret_code == 0) {
				$this->ret_msisdn = rtrim (substr($retMsg, 3, 12));

				if ($enc == 0) 
					$this->ret_msg = substr($retMsg, 29, $len);			

				if ($enc == 8) 
					$this->ret_msg = iconv("UCS-2BE", "UTF-8", substr($retMsg, 29, $len));
			} else {

				$this->ret_msg = rtrim(substr($retMsg, 29, 160));			
			}

			

			return true;	
		}


	}


		
	
	
	
?>
