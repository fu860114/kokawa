<?php

	//發送簡訊
	if ( ! function_exists('order_send_mobile_message'))
	{	
		function order_send_mobile_message($order_no,$paytype = NULL,$pincode = '')
		{
			global $g_db;

			//取得商品資訊
			$or_query = "SELECT * FROM `" . order . "` WHERE `order_no` = '" . $order_no . "' ";
			$mail_order = $g_db->getRow($or_query);
			//取得會員資訊
			$or_query = 'SELECT `mobile`, `email`, `fullname` FROM `' . Member . '` WHERE `serno` = \'' . $mail_order['member_id'] . '\' ';
			$mail_member = $g_db->getRow($or_query);
			
			$str_sms_mobile = $mail_member['mobile'];
			$str_sms_subject = '元氣健康GO - 訂購完成通知';

			if( false !== strpos($mail_order['payment_type'], 'iBON') )
			{
				$str_sms_content = '您於元氣健康GO的訂單已經成立，訂單號碼為：' . $order_no . '。請於三日內至7-11完成繳款，繳款編號：' . $pincode . '。元氣健康GO感謝您的惠顧';

				$bool_ibon = true;
			}
			else
			{
				$str_sms_content = '您於元氣健康GO的訂購作業已經完成，訂單號碼為：' . $order_no . '。您可以隨時於會員中心查詢您的訂單狀態。元氣健康GO感謝您的惠顧';

				$bool_ibon = false;
			}

			$str_sms_email = Member_MobileVerifyMail;

			$ObjSMS = @new SMS($str_sms_mobile, $str_sms_subject, $str_sms_content, $str_sms_email);
			@$ObjSMS->send();
		}
	}
	

	//發送Email
	if ( ! function_exists('order_send_mail'))
	{
		function order_send_mail($order_no,$paytype = NULL,$pincode = '')
		{
			global $g_db;
			global $PaymentType ;

			//取得商品資訊
			$or_query = "SELECT * FROM `" . order . "` WHERE `order_no` = '" . $order_no . "' ";
			$mail_order = $g_db->getRow($or_query);

			//取得會員資訊
			$or_query = 'SELECT `mobile`, `email`, `fullname` FROM `' . Member . '` WHERE `serno` = \'' . $mail_order['member_id'] . '\' ';
			$mail_member = $g_db->getRow($or_query);
			
			$or_query = 'SELECT * FROM `' . orderlist . '` WHERE `order_no` = \'' . $order_no . '\' ';
			$mail_order_list = $g_db->getRow($or_query);
			
			//信件內容
			$str_mail_content = '';
			$str_mail_content .= "<hr />\n";
			$str_mail_content .= '親愛的元氣健康GO會員  ' . mb_substr($mail_member['fullname'], 0, 1, 'UTF-8') . "** 先生/小姐您好，<br />\n";
			$str_mail_content .= "<br />\n";
			$str_mail_content .= "感謝您於元氣健康GO訂購商品<br />\n";

			if( $bool_ibon )
				$str_mail_content .= "元氣健康GO在此通知您，您於元氣健康GO的訂購作業已經完成。請於三日內進行付款，待付款確認之後我們即會將您訂購的商品寄出。若在期限內無法完成繳款程序，則訂單將會自動取消。<br />\n";
			else
				$str_mail_content .= "元氣健康GO在此通知您，您的訂單已付款確認，交易已成立，即將進入出貨流程。您所訂購的商品預計將於本付款確認通知後的三～十個工作天內（不含例假日）送達。宅配公司可能會於近日內與您聯絡，請您留意近日內貨品寄送是否如期到達。<br />\n";

			$str_mail_content .= "<br />\n";
			$str_mail_content .= "訂單摘要：<br />\n";
			$str_mail_content .= "<span style=\"color:#ff0000;\">\n";
			$str_mail_content .= '1、訂單編號：' . $order_no . "<br />\n";
			$str_mail_content .= '2、商品內容：' . $mail_order_list['prodname'] . "***等<br />\n";
			$str_mail_content .= '3、訂單總價：' . ($mail_order['price'] - $mail_order['activity_discount']) . "元<br />\n";
			$str_mail_content .= '4、付款方式：' . $PaymentType[($mail_order['payment_type'])] . "<br />\n";

			if( false !== strpos($mail_order['payment_type'], 'iBON') )
				$str_mail_content .= '5、iBON繳款編號：' . $pincode . '，請於三日內至7-11超商繳款<br />' . "\n";

			$str_mail_content .= "</span>\n";
			$str_mail_content .= "<br />\n";
			$str_mail_content .= "建議您可至網站上方的「會員中心」，登入後查詢您的訂購內容及最新進度等相關資料。<br />\n";
			$str_mail_content .= "<br />\n";
			$str_mail_content .= "若您仍有問題，歡迎隨時透過網站提供的聯繫方式與我們客服中心聯絡，感謝您的惠顧，希望在不久的將來能有機會繼續為您提供服務！<br />\n";
			$str_mail_content .= "<br />\n";
			$str_mail_content .= "元氣健康GO 敬上<br />\n";
			$str_mail_content .= "<br />\n";
			$str_mail_content .= "【防詐騙提醒】提醒您！元氣健康GO 絕不會「主動」以電話或簡訊通知顧客變更付款方式！若您接獲電話要您依照指示操作ATM提供剩額、變更付款方式，或是謊稱信用卡分期設定錯誤等，請不要依電話指示至ATM操作或提供任何資料，建議您可撥打165防詐騙專線確認！<br />\n";
			$str_mail_content .= "<hr />\n";
			$str_mail_content .= "<a href=\"http://www.genki-go.com.tw/\" target=\"_blank\">元氣健康GO - 健康美麗快樂購</a>\n";

			//標題
			$str_mail_subject = '元氣健康GO - 訂購完成通知';

			//收件人
			$str_mail_to = $mail_member['email'];
			$str_mail_to_name = $mail_member['fullname'];

			//Header內容
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8\r\n";
			$headers .= "From: Genki-GO<service@www.genki-go.com.tw>\r\n";

			/////寄出信////////////////////////////////////////
			$ch = curl_init();

			$urlstr = "http://project.y5works.com/mailto.phtml";
			$curlPost = "message=".$str_mail_content."&subject=".$str_mail_subject."&headers=".$headers."&to=".$str_mail_to;

			curl_setopt($ch, CURLOPT_URL, $urlstr);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost); 
			$returncode = curl_exec($ch);
			curl_close($ch);
			///////////////////////////////////////////////////
		}
	}
	


?>