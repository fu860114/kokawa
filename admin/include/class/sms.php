<?

	class SMS{

		var $SMSmobile;
		var $SMSsubject;
		var $SMScontent;
		var $SMSemail;

		function SMS($_SMSmobile,$_SMSsubject,$_SMScontent,$_SMSemail = ""){

			$this->SMSmobile  = $_SMSmobile;
			$this->SMSsubject = $_SMSsubject;
			$this->SMScontent = $_SMScontent;
			$this->SMSemail   = $_SMSemail;

		}

		function setMobile($_SMSmobile){

			$this->SMSmobile   = $_SMSmobile;

		}

		function setSubject($_SMSsubject){

			$this->SMSsubject  = $_SMSsubject;

		}

		function setContent($_SMScontent){

			$this->SMScontent  = $_SMScontent;

		}

		function setMail($_SMSemail){

			$this->SMSemail    = $_SMSemail;

		}

		function send(){

	    $login_wsdl = "http://tw.every8d.com/API20/Security.asmx?wsdl";
	    $sms_wsdl   = "http://tw.every8d.com/API20/Message.asmx?wsdl";

	    $custID   = "av8d20";    //請勿更改
	    $userID   = "27486049";  //您的EVERY8D帳號 
	    $password = "22258741";  //您的EVERY8D密碼

	    try
		{
			$client = @new SoapClient($login_wsdl);
		}
		catch(SoapFault $str_exception)
		{
			return false;
		}

	    // login
	    $params = array("custID" => $custID, "userID" => $userID, "password" => $password, "APIType" => "", "version" => "");

		try
		{
			$objResult = @$client->Login($params);
		}
		catch(SoapFault $str_exception)
		{
			return false;
		}

		$xmlstr = $objResult->LoginResult;

			if($xmlstr){

		    $xml = new SimpleXMLElement($xmlstr);

		    if ( ($xml->ERROR_CODE == "0000") ){    	

		    }else{
		       return false;                   // 	Login Failure";
		    	 exit;
		    }

		    // send sms
		    $UserNo     = $xml->USER_NO;       //從登入結果取得UserNo
		    $CompanyNo  = $xml->COMPANY_NO;    //從登入結果取得Company_No
		    $Credit     = $xml->CREDIT;        //從登入結果取得目前剩餘額度

		    $sendTime   = "";                  //發送時間

		    $sms_xml  =	'<REPS>';
		    $sms_xml .=		'<IP></IP>';
		    $sms_xml .=		'<CARD_NO/>';
		    $sms_xml .=		'<USER NAME="" MOBILE="'.$this->SMSmobile.'" EMAIL="'.$this->SMSemail.'" SENDTIME="'.$sendTime.'" PARAM=""/>';
		    $sms_xml .=	'</REPS>';

		    $params_sms = array(
		    			"custID"      => $custID,
		    			"CompanyNo"   => $CompanyNo,
		    			"userNo"      => $UserNo,
		    			"sendtype"    => "110",
		    			"msgCategory" => "10",
		    			"subject"     => $this->SMSsubject,
		    			"content"     => $this->SMScontent,
		    			"image"       => "",
		    			"Audio"       => "",
		    			"xml"         => $sms_xml,
		    			"batchID"     => "",
		    			"certified"   => ""
		    );

		    $sms_Service = new SoapClient($sms_wsdl);	
		    
			try
			{
				$sendResult = @$sms_Service->QueueIn($params_sms);
			}
			catch(SoapFault $str_exception)
			{
				return false;
			}

		    $sendResultStr = $sendResult->QueueInResult;

		    if ( substr($sendResultStr,0,1) =="-" ){
		    	return false;       //Send SMS Failure
		    }else{
		    	return true;  // Send SMS Successfully
		    }

		  }

		}

		function searchCredit(){

	    $login_wsdl = "http://tw.every8d.com/API20/Security.asmx?wsdl";
	    $sms_wsdl   = "http://tw.every8d.com/API20/Message.asmx?wsdl";

	    $custID   = "av8d20";    //請勿更改
	    $userID   = "27486049";  //您的EVERY8D帳號 
	    $password = "22258741";  //您的EVERY8D密碼

	    try
		{
			$client = @new SoapClient($login_wsdl);
		}
		catch(SoapFault $str_exception)
		{
			return false;
		}

	    // login
		  $params = array("custID" => $custID, "userID" => $userID, "password" => $password, "APIType" => "", "version" => ""); 

			//if($client->Login($params)){

		    try
			{
				$objResult = @$client->Login($params);
			}
			catch(SoapFault $str_exception)
			{
				return false;
			}

		    $xmlstr = $objResult->LoginResult;
	
				$Credit = "????";


		    $xml = new SimpleXMLElement($xmlstr);

		    if ( ($xml->ERROR_CODE == "0000") ){    	

		    }else{
		       return false;                   // 	Login Failure";
		    	 exit;
		    }

		    // send sms
		    $UserNo     = $xml->USER_NO;       //從登入結果取得UserNo
		    $CompanyNo  = $xml->COMPANY_NO;    //從登入結果取得Company_No
		    $Credit     = $xml->CREDIT;        //從登入結果取得目前剩餘額度

	 		//}

	    return $Credit;

		}

  }

	function SendVerify($_SMSmobile){

		$CodeArray  = array("1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

		$Verify     = "";
		for($i = 0; $i < Member_MobileVerifyLength; $i++)
			$Verify .= $CodeArray[( rand( 0, sizeof($CodeArray)-1 ) )];

		$SMSmobile  = $_SMSmobile;
		$SMSsubject = "元氣健康GO註冊驗證碼";
		$SMScontent = "您的元氣健康GO註冊驗證碼為 : ".$Verify."，請在註冊程序輸入您的驗證碼";
		$SMSemail   = Member_MobileVerifyMail;

		$sms = new SMS($SMSmobile,$SMSsubject,$SMScontent,$SMSemail);
		$sms->send();

		return $Verify;

	}

?>