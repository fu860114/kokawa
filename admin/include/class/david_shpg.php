<?php
    // 
	

class david_shpg {

    function gfc_smi($ga_mito, $gc_subject,$gc_body,$ga_atfi ) {   // 發送 email ---------------------------------------------------------------
	                    
             //  $ga_mito   -> 收件人的陣列, 二維陣列 .下面程式有範例
			 // $gc_subject -> 信件主旨
			 // $gc_body    -> 信件內容
			 // $ga_atfi    -> 附件陣列

       $mail= new PHPMailer(); //建立新物件 
       $mail->IsSMTP(); //設定使用SMTP方式寄信 
	   //$mail->Mailer = "SMTP"; 
       $mail->SMTPAuth = true; //設定SMTP需要驗證 
       $mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線 
	   //
       $mail->Host = "yfmotor.com.tw"; //Gamil的SMTP主機 ->smtp.gmail.com
       // $mail->Host = "172.30.200.2"; //Gamil的SMTP主機 ->smtp.gmail.com
       $mail->Port = 465; //Gamil的SMTP主機的SMTP埠位為465埠。   有 ssl 認證時要用 465埠, 沒有ssl認證,用 25埠
	   //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false,'verify_peer_name' => false,'allow_self_signed' => true));	
	   $mail->Encoding   = 'base64';
       $mail->CharSet = "UTF-8"; //設定郵件編碼 

       $mail->Username = "tlwebcsc"; //設定驗證帳號 
       $mail->Password = "tL70515065"; //設定驗證密碼 

       $mail->From = "tlwebcsc@yfmotor.com.tw"; //設定寄件者信箱 
       $mail->FromName = "唐岦租賃_系統服務員"; //設定寄件者姓名 

       $mail->Subject = $gc_subject; //設定郵件標題 
       $mail->Body = $gc_body ; //設定郵件內容 
       $mail->IsHTML(true); //設定郵件內容為HTML 
	   
       // $mail->AddAddress("nsspao@gmail.com", "nsspao"); //設定收件者郵件及名稱 
	   // $mail->AddAddress( $lc_to , $lc_tona); //設定收件者郵件及名稱 
	   // $mail->AddAddress( $lc_to2 , $lc_tona2); // 第2個收件者  設定收件者郵件及名稱 
	   
  
	    // $ga_mito = array( "王永健" => "david@yfmotor.com.tw" ,
	    //                   "大維王" => "david.nasa58@gmail.com" ) ;
		//				 
		$ln_smmicc = 0 ;  // 收件人數  				 
	    foreach($ga_mito as $gc_mina => $gc_miad ){
               // echo "收件資料=> ".$gc_mina." => ".$gc_miad."</br>";
			   if (strlen($gc_miad) > 0 ){
                  $mail->AddAddress( $gc_miad , $gc_mina ); // 收件者位置 , 收件人名稱 
				  $ln_smmicc = $ln_smmicc + 1;
			   }
              }
	    // 加入附件 
	    // $mail->AddAttachment("img/TL_LOGO.png"); // 加入附件
	    // $mail->AddAttachment("loca-20200331123742.jpg"); // 加入附件
		//
	    // $ga_atfi = array("img/TL_LOGO.png","loca-20200331123742.jpg") ;
        // $ga_atfi = array()  ;  // 沒有附件直接給空值
		foreach($ga_atfi as $gc_atfi  ){
                 echo "附件檔=> ".$gc_atfi."</br>";
      	        $mail->AddAttachment($gc_atfi); // 加入附件
              }
	   
       // $mail->SMTPDebug  = 0; // 0.不顯示 1.顥示使用者端訊息 2.顯示 主機端訊訊息
       // if (!$mail->send()) {
         // $mail->ErrorInfo;
       // } else {
         // echo "DONE";
       // }
       if ($ln_smmicc >= 1) { 
          $lc_rnss = $mail->Send();
          $lc_mier =   $mail->ErrorInfo;
	   } else {
          $lc_rnss = 0;
          $lc_mier = "沒有收件人地址" ;
	   }
       //echo "<BR>"; 
       //echo date("Y-m-d")."  ".date("H:m:s")." mail"." &nbsp; lc_rnss = ".$lc_rnss."<br>";
	   // echo  "lc_mier=".$lc_mier ;
       //  phpmailer 寄信結束
	   //  die();  // 中斷程式
	
	    $ga_rtss = array(  $lc_rnss ,$lc_mier ) ; 
		return $ga_rtss ;
        } 


    function gfc_sms($gc_mbnu, $ga_mstx,$gc_ty)   // 發送短 簡訊  ---------------------------------------------------------------
       { 
        // 簡訊內容規範 ,短簡訊 內有中文,一則70個字,超的會截掉, 內無中文純英文一則可153字, 長簡訊,是將短簡訊放在陣列內一次發出  ，陣列內每段可放67個中文字 ,超的會截掉
        $lc_mbnu = $gc_mbnu  ; // 行動電話
        $la_mstx = $ga_mstx  ; // 簡訊內容 陣列
        $lc_ty   = $gc_ty    ; // 簡訊別  S.發送簡訊 D.發送簡訊並產生除錯訊息  Q.查詢簡訊狀態 目前暫無用
        //
        if ($lc_ty=="D"  ) { // 除錯
            echo "david_shpg.gfc_sms().執行方式 S.發簡訊 D.除錯 lc_ty=".$lc_ty."<BR>" ;
            echo "簡訊陣列長度=". sizeof($la_mstx,1) ." count=".count($la_mstx). "<BR>";
            if (sizeof($la_mstx,1)  > 1) {
     		    echo "簡訊內容> " ;
				foreach($la_mstx as $lc_tx) {
         		   echo  $lc_tx . "<BR>" ; 
                } // end  foreach 

			} else {
    		   echo "簡訊內容> ".$la_mstx[0] . "<BR>" ; 
			}


        }
        // 20211020 在測試時,執行到 建立連線 程式就沒反應 , 結果發現 沒有把sns.inc copy 到本程式的同目錄下, 經copy 上傳完成即可順利執行 
        include_once("sns.inc"); // 把中華電話的 簡訊模組加入
        //
        //伺服器位置
        $server_ip = "203.66.172.133"; // 第一入口

        $server_port = 8001;

        //簡訊特碼帳密
        // $user_acc  = "11187"; 2022/06/17 停用
        // $user_pwd  = "11187";
		$user_acc  = "17993";  // 2022/06/17 啟用,單價為0.7/封
        $user_pwd  = "yf16557@";
        //

        if ($lc_ty=="D"  ) { // 除錯
           echo "david_shpg.gfc_sms().下一步建立連線"."<br>" ;
        }
        
        //建立連線
        $mysms = new sns($user_acc, $user_pwd, $server_ip, $server_port);
        $mysms->create_connection();
        //每個動作一定要取得 ret_code 與 ret_msg 以了解作業結果
        $ret_code = $mysms->ret_code;
        $ret_msg = $mysms->ret_msg;
        // return "sms _ david " ;
        if ($lc_ty=="D"  ) { // 除錯
           echo "david_shpg.gfc_sms().連線狀況 0.成功 ret_code=".$ret_code ."<br>";
           echo "ret_code=".$ret_code."<br>\n";
           echo "ret_msg=".$ret_msg."<br>\n";
           echo "david_shpg.gfc_sms().下一步發送簡訊"."<br>" ;
      
        }
        if($ret_code==0) { 
            // echo "連線成功"."<br>\n";
            if (sizeof($la_mstx,1)  > 1) {
                // 簡訊內容陣列長度 >1 發長簡訊
                $mysms->send_long_message($lc_mbnu, $la_mstx);
                $ret_code = $mysms->ret_code;
                $ret_msg = $mysms->ret_msg;
            }  else {
                // 發短簡訊
                $lc_stms  = $la_mstx[0] ;  // 取出第一個陣列值
                $mysms->send_message($lc_mbnu, $lc_stms);
                $ret_code = $mysms->ret_code;
                $ret_msg = $mysms->ret_msg;
            } 
            // $ret_code=0 ; // test
            if ($lc_ty=="D") { // 除錯
                   echo "david_shpg.gfc_sms().簡訊發送狀況 0.成功 ret_code=".$ret_code."<br>" ;
                   echo "ret_code=".$ret_code."<br>\n";
                   echo "ret_msg=".$ret_msg."<br>\n";
            }
            if($ret_code==0){
                // echo "簡訊傳送成功"."<br>";
                $msgid = $mysms->ret_msg; // 取出 這個簡的示別碼  長度8的英數字串
                // sleep(10); //
                $mysms->query_message($lc_mbnu, $msgid);  // 取出發送狀態
                $ret_code = $mysms->ret_code;  // 1  發送成功 
                $ret_msg = $mysms->ret_msg;    // Message is processing

                // echo "簡訊傳送狀態 1st"."<br>\n";
                // echo "ret_code=".$ret_code."<br>\n";
                // echo "ret_msg=".$ret_msg."<br>\n";
                 $mysms->close_connection();  // 中斷連線
                if ($lc_ty=="D") { // 除錯
                    echo "david_shpg.gfc_sms().發送完成,return 示別碼 msgid=".$msgid."<br>" ;
                    echo "執行結果將回傳 ".$msgid ."<br>\n";
                    echo " die() 中斷程式"."<br>\n";
                    die();  // 中斷程式
                }
                 return $msgid ; // 這個簡的示別碼
            } else {
				if ($lc_ty=="D") { // 除錯
                    echo "簡訊傳送失敗"."<br>\n";
                    echo "ret_code=".$ret_code."<br>\n";
                    echo "ret_msg=".$ret_msg."<br>\n";
                    echo "執行結果將回傳 -2 "."<br>\n";
                    echo " die() 中斷程式"."<br>\n";
                    die();  // 中斷程式

				}
                return "-2" ;
            }


        } else {
            // echo "連線失敗"."<br>\n";
            return "-1" ;  
        } 

      
    
    }


	function gfc_psps($gc_ps, $gc_ad,$gc_ty)   // 密碼 證加密作業  ---------------------------------------------------------------
       {  

            $lc_ps = $gc_ps ;  // 傳入的密碼
            $lc_ad = trim($gc_ad) ;  // 傳入的加密參數
            $lc_ty = $gc_ty ;  // 傳入的加密方式

            if (strlen($lc_ad) <= 0 ) {
               // 沒有加密參數 , 直接回傳 原始密碼
               return $lc_ps ;
            } 
            $lc_ky =  substr($lc_ad,0,1)  ;  // 取出第1碼 , substr 從0開始 0是1
            // $lc_ky =  "1"   ;  // test 用 取出第1碼 , substr 從0開始 0是1
            
            //
            if ($lc_ty =="A" or $lc_ty == "a") {
            //     // 加密作業     
                 $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                 $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                 $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                 $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                 $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                 $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                 $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                 $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                 $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                 $l0 =  substr($lc_ps,4) ;  // 取出第5碼 

       
                 switch($lc_ky)  {     
                    case "1": 
                        $lc_rtid = $l1 .$l8 .$l7 .$l9 .$l4 .$l3 .$l2 .$l5 .$l6 .$l0 ;  // 1
                        break ;     
                    case "2": 
                        $lc_rtid = $l6 .$l3 .$l8 .$l2 .$l9 .$l4 .$l1 .$l5 .$l7 .$l0 ;  // 2
                        break ;     
                    case "3": 
                        $lc_rtid = $l4 .$l7 .$l5 .$l8 .$l3 .$l6 .$l2 .$l9 .$l1 .$l0 ;  // 3
                        break ;     
                    case "4": 
                        $lc_rtid = $l2 .$l9 .$l5 .$l3 .$l6 .$l7 .$l1 .$l4 .$l8 .$l0 ;  // 4
                        break ;     
                    case "5": 
                        $lc_rtid = $l7 .$l4 .$l9 .$l2 .$l8 .$l1 .$l3 .$l5 .$l6 .$l0 ;  // 5
                        break ;     
                    case "6": 
                        $lc_rtid = $l9 .$l6 .$l3 .$l7 .$l2 .$l5 .$l8 .$l4 .$l1 .$l0 ;  // 6
                        break ;     
                    case "7": 
                        $lc_rtid = $l1 .$l3 .$l6 .$l9 .$l5 .$l2 .$l4 .$l7 .$l8 .$l0 ;  // 7
                        break ;     
                    case "8": 
                        $lc_rtid = $l3 .$l5 .$l4 .$l6 .$l2 .$l9 .$l8 .$l1 .$l7 .$l0 ;  // 8
                        break ;     
                    case "9": 
                        $lc_rtid = $l6 .$l9 .$l8 .$l2 .$l3 .$l4 .$l1 .$l5 .$l7 .$l0 ;  // 9
                        break ;     
            
                    default:   // "0"
                        $lc_rtid = $l5 .$l2 .$l1 .$l6 .$l9 .$l3 .$l7 .$l4 .$l8 .$l0 ;  // 0
                        break ;     
                } // end swith 
        } else {

            // 解密作業 
                 switch($lc_ky)  {     
                   case "1": //      0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l1 .$l8 .$l7 .$l9 .$l4 .$l3 .$l2 .$l5 .$l6 .$l0 ;  // 1

                        $lc_ad0 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ps2 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ps1 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ps3 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ad3 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad2 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad1 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad4 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps0 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;    // 取出第5碼 
       
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;


                        break ;     
                    case "2": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l6 .$l3 .$l8 .$l2 .$l9 .$l4 .$l1 .$l5 .$l7 .$l0 ;

                        $lc_ps0 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ad2 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ps2 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ad1 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ps3 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad3 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad0 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad4 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps1 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "3": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                    //  $lc_rtid = $l4 .$l7 .$l5 .$l8 .$l3 .$l6 .$l2 .$l9 .$l1 .$l0 ;  // 3

                        $lc_ad3 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ps1 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ad4 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ps2 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ad2 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ps0 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad1 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ps3 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ad0 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "4": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l2 .$l9 .$l5 .$l3 .$l6 .$l7 .$l1 .$l4 .$l8 .$l0 ;  // 4

                        $lc_ad1 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ps3 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ad4 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ad2 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ps0 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ps1 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad0 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad3 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps2 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "5": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l7 .$l4 .$l9 .$l2 .$l8 .$l1 .$l3 .$l5 .$l6 .$l0 ;  // 5

                        $lc_ps1 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ad3 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ps3 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ad1 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ps2 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad0 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad2 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad4 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps0 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "6": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l9 .$l6 .$l3 .$l7 .$l2 .$l5 .$l8 .$l4 .$l1 .$l0 ;  // 6

                        $lc_ps3 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ps0 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ad2 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ps1 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ad1 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad4 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ps2 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad3 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ad0 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "7": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l1 .$l3 .$l6 .$l9 .$l5 .$l2 .$l4 .$l7 .$l8 .$l0 ;  // 7
                        //
						//        ad1 .ad3  .ps1.ps4.ad5.ad2.
                        $lc_ad0 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ad2 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ps0 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ps3 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ad4 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad1 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad3 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ps1 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps2 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "8": //       0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                      //  $lc_rtid = $l3 .$l5 .$l4 .$l6 .$l2 .$l9 .$l8 .$l1 .$l7 .$l0 ;  // 8

                        $lc_ad2 =  substr($lc_ps,0,1) ; //l3  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ad4 =  substr($lc_ps,1,1) ; //l5 // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ad3 =  substr($lc_ps,2,1) ; //l4 // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼  // lc_ps0
                        $lc_ps0 =  substr($lc_ps,3,1) ; //l6 // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼  // lc_ps0
                        $lc_ad1 =  substr($lc_ps,4,1) ; //l2 // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ps3 =  substr($lc_ps,5,1) ; //l9 // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ps2 =  substr($lc_ps,6,1) ; //l8 // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad0 =  substr($lc_ps,7,1) ; //l1 // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps1 =  substr($lc_ps,8,1) ; //l7 // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;   //l0 // $l0 =  substr($lc_ps,4) ;   // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                    case "9": //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l6 .$l9 .$l8 .$l2 .$l3 .$l4 .$l1 .$l5 .$l7 .$l0 ;  // 9

                        $lc_ps0 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ps3 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ps2 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ad1 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ad2 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad3 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ad0 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad4 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps1 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                     default: //     0 .  1 .  2 .  3 .  4 .  5 .  6 .  7 .  8 .  9 
                     // $lc_rtid = $l5 .$l2 .$l1 .$l6 .$l9 .$l3 .$l7 .$l4 .$l8 .$l0 ;  // 0

                        $lc_ad4 =  substr($lc_ps,0,1) ;  // $l1 =  substr($lc_ad,0,1) ;  // 取出加密第1碼 
                        $lc_ad1 =  substr($lc_ps,1,1) ;  // $l2 =  substr($lc_ad,1,1) ;  // 取出加密第2碼 
                        $lc_ad0 =  substr($lc_ps,2,1) ;  // $l3 =  substr($lc_ad,2,1) ;  // 取出加密第3碼 
                        $lc_ps0 =  substr($lc_ps,3,1) ;  // $l4 =  substr($lc_ad,3,1) ;  // 取出加密第4碼 
                        $lc_ps3 =  substr($lc_ps,4,1) ;  // $l5 =  substr($lc_ad,4,1) ;  // 取出加密第5碼 
                        $lc_ad2 =  substr($lc_ps,5,1) ;  // $l6 =  substr($lc_ps,0,1) ;  // 取出第1碼 
                        $lc_ps1 =  substr($lc_ps,6,1) ;  // $l7 =  substr($lc_ps,1,1) ;  // 取出第2碼 
                        $lc_ad3 =  substr($lc_ps,7,1) ;  // $l8 =  substr($lc_ps,2,1) ;  // 取出第3碼 
                        $lc_ps2 =  substr($lc_ps,8,1) ;  // $l9 =  substr($lc_ps,3,1) ;  // 取出第4碼 
                        $lc_ps4 =  substr($lc_ps,9) ;    // $l0 =  substr($lc_ps,4) ;  // 取出第5碼 
                        $lc_rtid = $lc_ps0 .$lc_ps1 .$lc_ps2 .$lc_ps3 .$lc_ps4 ;

                        break ;     
                } // end swith 
            

        }
          return $lc_rtid ;
        }  // end function gfc_psps() ------------------------------------------------------------------------




	function gfc_idps($gc_id, $gc_ty)   // 身份證號 及手機號_加密作業  -----------------------------------------------------------------------
       {  
            $lc_id = trim($gc_id) ;           
		    if(strlen($lc_id) == 0 ){  // 長度為0 ,不進行加解密
			  return $lc_id ;
			}
                     //      123456789A123456789b12345
            $lc_id = $gc_id."                         " ;  // 傳入的身份證號
           //  $lc_id = $gc_id."/////////////////////////" ;  // 傳入的身份證號
            // echo "lc_id =".$lc_id." 長度=".strlen($lc_id) ."<br>";
            $lc_id = substr($lc_id,0,10) ; // 取出前10碼
            $lc_ty = $gc_ty ;  // 傳入的加密方式
            $lc_ky =  substr($lc_id,3,1)  ;  // 取出第4碼 , substr 從0開始 3是4
            //
            $l_1 =  substr($lc_id,0,1) ;  // 取出第1碼 
            $l_2 =  substr($lc_id,1,1) ;  // 取出第2碼 
            $l_3 =  substr($lc_id,2,1) ;  // 取出第3碼 
            $l_4 =  substr($lc_id,3,1) ;  // 取出第4碼 
            $l_5 =  substr($lc_id,4,1) ;  // 取出第7碼 
            $l_6 =  substr($lc_id,5,1) ;  // 取出第9碼 
            $l_7 =  substr($lc_id,6,1) ;  // 取出第3碼 
            $l_8 =  substr($lc_id,7,1) ;  // 取出第7碼 
            $l_9 =  substr($lc_id,8,1) ;  // 取出第9碼 
            $l_a =  substr($lc_id,9,1) ;  // 取出第9碼 
            //echo "l_9=".$l_9." 長度=".strlen($l_9) ."<br>";
            $lc_rtid = "ok" ;

             if ($lc_ty =="A" or $lc_ty == "a") {
                 //                          //   
                 $lc_id2 = substr($gc_id,10) ; // 取出10碼 以後的字元, 不加密部份

            //     // 加密作業               
                 switch($lc_ky)  {     //   1 2 3 4 5 6 7 8 9 0   1 2 3 4 5 6 7 8 9 0
                                       // 第一種編碼 L 1 2 2 0 3 8 2 7 7 = L 1 0 2 2 7 7 2 3 8
                    case "1": //          1     2     3     4     5     6     7     8     9     a 
                            $lc_rtid = $l_1. $l_2 .$l_5 .$l_4 .$l_8 .$l_a .$l_9 .$l_3 .$l_6 .$l_7."A" ;
                       //   $lc_rtid = $l_1. $l_2 .$l_8 .$l_4 .$l_3 .$l_9 .$l_a .$l_5 .$l_7 .$l_6;  // no 1
                            break ;     
                    case "2":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_a .$l_4 .$l_3 .$l_8 .$l_7 .$l_6 .$l_9 .$l_5."A" ;
                       //   $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_a .$l_8 .$l_7 .$l_6 .$l_9 .$l_3 ;  // no 2
                            break ;     
                    case "3":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_7 .$l_4 .$l_9 .$l_5 .$l_8 .$l_3 .$l_6 .$l_a."A" ;
                      //    $lc_rtid = $l_1 .$l_2 .$l_8 .$l_4 .$l_6 .$l_9 .$l_3 .$l_7 .$l_5 .$l_a."A" ;  // no 3
                            break ;     
                    case "4":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_3 .$l_4 .$l_7 .$l_9 .$l_a .$l_6 .$l_8 .$l_5."A" ;
                      //    $lc_rtid = $l_1 .$l_2 .$l_3 .$l_4 .$l_a .$l_8 .$l_5 .$l_9 .$l_6 .$l_7    ;  // no 4
                            break ;     
                    case "5":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_3 .$l_8 .$l_6 .$l_7 .$l_a .$l_9."A" ;
                       //   $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_3 .$l_7 .$l_8 .$l_6 .$l_a .$l_9    ;  // no 5
                            break ;     
                    case "6":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_8 .$l_4 .$l_5 .$l_7 .$l_9 .$l_a .$l_6 .$l_3."A" ;
                    //      $lc_rtid = $l_1 .$l_2 .$l_a .$l_4 .$l_5 .$l_9 .$l_6 .$l_3 .$l_7 .$l_8    ;  // no 6
                            break ;     
                    case "7":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_9 .$l_4 .$l_6 .$l_a .$l_3 .$l_8 .$l_7 .$l_5."A" ;
                    //      $lc_rtid = $l_1 .$l_2 .$l_7 .$l_4 .$l_a .$l_5 .$l_9 .$l_8 .$l_3 .$l_6    ;  // no 7
                            break ;     
                    case "8":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_9 .$l_4 .$l_8 .$l_5 .$l_7 .$l_6 .$l_a .$l_3."A" ;
                    //      $lc_rtid = $l_1 .$l_2 .$l_a .$l_4 .$l_6 .$l_8 .$l_7 .$l_5 .$l_3 .$l_9    ; // no 8
                            break ;     
                    case "9":  //         1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_6 .$l_4 .$l_a .$l_8 .$l_5 .$l_9 .$l_3 .$l_7."A" ;
                    //      $lc_rtid = $l_1 .$l_2 .$l_9 .$l_4 .$l_7 .$l_8 .$l_a .$l_6 .$l_3 .$l_5   ;  // no 9
                            break ;     
                    default:  //          1     2     3     4     5     6     7     8     9     a
                            $lc_rtid = $l_1 .$l_2 .$l_9 .$l_4 .$l_3 .$l_a .$l_7 .$l_6 .$l_5 .$l_8."A" ;
                    //      $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_9 .$l_8 .$l_7 .$l_a .$l_3 .$l_6    ;  // no 0
                            break ;     
                } // end swith 
                $lc_rtid=  $lc_rtid .$lc_id2 ; // 前半段加密 + 後半段不加密
             } else {
            //     // 解密作業
            $lc_id2 = substr($gc_id,11) ; // 取出11碼 以後的字元, 不加密部份
            switch($lc_ky)  {
                    case "1":  // 第一種編碼
                             $lc_rtid = $l_1. $l_2 .$l_8 .$l_4 .$l_3 .$l_9 .$l_a .$l_5 .$l_7 .$l_6;  // no 1
                             break ;     
                    case "2":  
                            $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_a .$l_8 .$l_7 .$l_6 .$l_9 .$l_3 ; // no 2
                            break ;     
                    case "3":  
                            $lc_rtid = $l_1 .$l_2 .$l_8 .$l_4 .$l_6 .$l_9 .$l_3 .$l_7 .$l_5 .$l_a ;  // no 3
                            break ;     
                    case "4":  
                            $lc_rtid = $l_1 .$l_2 .$l_3 .$l_4 .$l_a .$l_8 .$l_5 .$l_9 .$l_6 .$l_7   ;  // no 4
                            break ;     
                    case "5":  
                            $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_3 .$l_7 .$l_8 .$l_6 .$l_a .$l_9  ;  // no 5
                            break ;     
                    case "6":  
                            $lc_rtid = $l_1 .$l_2 .$l_a .$l_4 .$l_5 .$l_9 .$l_6 .$l_3 .$l_7 .$l_8 ; // no 6
                            break ;     
                    case "7":  
                            $lc_rtid = $l_1 .$l_2 .$l_7 .$l_4 .$l_a .$l_5 .$l_9 .$l_8 .$l_3 .$l_6 ;  // no 7
                            break ;     
                    case "8":  
                            $lc_rtid = $l_1 .$l_2 .$l_a .$l_4 .$l_6 .$l_8 .$l_7 .$l_5 .$l_3 .$l_9  ;  // no 8
                            break ;     
                    case "9":  
                            $lc_rtid = $l_1 .$l_2 .$l_9 .$l_4 .$l_7 .$l_3 .$l_a .$l_6 .$l_8 .$l_5   ;  // no 9
                            break ;     
                    default:  
                            $lc_rtid = $l_1 .$l_2 .$l_5 .$l_4 .$l_9 .$l_8 .$l_7 .$l_a .$l_3 .$l_6    ;  // no 0
                            break ;     
  
                        } // end swith  
                        $lc_rtid=  $lc_rtid .$lc_id2 ; // 前半段加密 + 後半段不加密

             }

          
          return $lc_rtid ;
        }  // end function gfc_idps() ------------------------------------------------------------------------



        // 
        function gfc_bdps($gc_bd, $gc_ty)   // 出生日期 加密作業   ------------------------------------------------------------------------
		{  
                               //           0123456789
                               //           1969-10-03
            $lc_bd = $gc_bd ;  //傳入生日
            $lc_ty = $gc_ty ;  // 傳入的加密方式
            // 
            $lc_yy =  substr($lc_bd,0,4) ;  // 取出年份 
            $lc_mm =  substr($lc_bd,5,2) ;  // 取出 月份  
            $lc_dd =  substr($lc_bd,8,2) ;  // 取出 日  
            // echo "lc_yy = ".$lc_yy ."<BR>";
            // echo "lc_mm = ".$lc_mm ."<BR>";
            // echo "lc_dd = ".$lc_dd ."<BR>";
            //
            if ($lc_ty =="A" or $lc_ty == "a") {
                //     // 加密作業               
               $lc_yy = strval(intval($lc_yy) - 10) ;  // 年份減 10  
               $ln_mm = intval($lc_mm) - 3 ;   // 月份 -3 
               if ($ln_mm <=0) {
                  $ln_mm = 12 + $ln_mm ; // 1月->10月,2月->11月,3月->12月
               }    
               $lc_mm =  substr( "00".strval($ln_mm) , -2)  ; // 月份
               // 
               $ln_dd = intval($lc_dd) - 5 ;   // 日 -5 
               if ($ln_dd <=0) {
                  $ln_dd = 31 + $ln_dd ; // 1->27,2->28,...,5->31
               }    
               $lc_dd =  substr( "00".strval($ln_dd) , -2)  ; // 日
               $lc_rtdt =  $lc_yy."-".$lc_mm."-".$lc_dd ."A" ;   // 加密後

            } else {
                    // 解密作業
                    $lc_yy = strval(intval($lc_yy) + 10) ;  // 年份 加 10  
                    $ln_mm = intval($lc_mm) + 3 ;   // 月份 + 3 
                    if ($ln_mm >= 13) {
                       $ln_mm = $ln_mm- 12 ; // 13月->1月,14月->2月,15月->3月
                    }    
                    $lc_mm =  substr( "00".strval($ln_mm) , -2)  ; // 月份
                    // 
                    $ln_dd = intval($lc_dd) + 5 ;   // 日 +5 
                    if ($ln_dd >= 32) {
                       $ln_dd =  $ln_dd - 31 ; // 32->1,33->2,...,36->5
                    }    
                    $lc_dd =  substr( "00".strval($ln_dd) , -2)  ; // 日
                    $lc_rtdt =  $lc_yy."-".$lc_mm."-".$lc_dd  ;   // 解密後
     
            }

           return $lc_rtdt ; 
        }  // end function gfc_bdps()----------------------------------------------------------


        function gfc_trsqst($tc_sqlstr,$ta_sqlary,$tc_rnty )   // 除錯用 , 產生 sql string  ---------------------------------------------------------------
        { 
                 // $tc_sqlstr 原 sql 字串
                 // $ta_sqlary 放入的參數陣列
                 // $tc_rnty   執行方式  "END".中斷程式 , "RUN".傳回轉換後 sql str

                 foreach($ta_sqlary as $lc_kyna  => $lc_vu) {  
                    //  echo "Key: ".$lc_kyna. "  型態=". gettype($lc_kyna) . "   Value: ".$lc_vu  .  "  值的型態=". gettype($lc_vu) . "<br/>";
                    $lc_vuty = gettype($lc_vu) ;
                    if ( $lc_vuty  =="string") {  // 文字
                       $tc_sqlstr  = str_replace($lc_kyna ,"'".$lc_vu."'",$tc_sqlstr) ;  
                   } 
                   if ( $lc_vuty  =="integer" || $lc_vuty == "double" ) {  // 數字
                       $tc_sqlstr  = str_replace($lc_kyna , $lc_vu  ,$tc_sqlstr) ;  
                   } 
                         // echo "tc_sqlstr=".$tc_sqlstr . "<br/>";
                 } // end  foreach 
                 if ($tc_rnty != "RUN" ) {
                     echo '<BR>'. '<BR>'. "轉換後sqlstr=". '<BR>'.$tc_sqlstr . "<br/>" .'<BR>'. '<BR>';   ;
                     die();  // 中斷程式
                 } else {
                    return $tc_sqlstr ;
                 }
        }
    

	}  // endclass



//--------------以下為測試 function 功能 的小程式 ---------------------------------------------------------------------------------------------------------------------        

//--------------測試 簡訊發送 小程式 ---------------------------------------------------------------------------------------------------------------------        
if(1==21) {

    $tc_mbnu = "0930480388" ;
    // $ta_mstx = array("這是簡訊測試" ,"這是第二行簡訊測試");
    $ta_mstx = array();
    $ta_mstx[0] = "１２３４５６７８９ａ１２３４５６７８９ｂ１２３４５６７８９ｃ１２３４５６７８９ｄ１２３４５６７８９ｅ１２３４５６７８９ｆ１２３４５６７８９ｇ１２３４５６７８９ｈ這是簡訊測試" ;  
    $ta_mstx[1] = "一二三四五六七八九Ａ一二三四五六七八九ｂ一二三四五六七八九ｃ一二三四五六七八九ｄ一二三四五六七八九ｅ一二三四五六七八九ｆ一二三四五六七八九ｇ一二三四五六七八九ｈ這是第二行簡訊測試" ;  
    $ta_mstx[3] = "123456789a123456789b123456789c123456789d123456789e123456789f123456789g123456789h123456789i123456789j123456789k123456789l123456789m123456789n123456789o123456789p123456789q";
    //
    $ofn_david =  new david_shpg;  // 加入david 的公用程式
    echo $tc_mbnu. " 開始測試 " . "<BR>";

    echo "陣列長度=". sizeof($ta_mstx,1) ." count=".count($ta_mstx). "<BR>";
    $lc_rtss = "0" ;
    $lc_rtss = $ofn_david->gfc_sms($tc_mbnu,$ta_mstx,"D") ;  // 發送簡訊
    
    // var_dump(  $lc_rtss );  // 取出變數值
    if($lc_rtss !="-1"  && $lc_rtss !="-2"  ) {  
       echo $tc_mbnu. " 發送成功 " .$lc_rtss ;
    } else {
        echo $tc_mbnu. " 發送失敗 " .$lc_rtss  ;

    }
}


//--------------測試 身份証加密的小程式 ---------------------------------------------------------------------------------------------------------------------        

if(1==12) {
    $lc_mbid = "L122038277" ;
 //   $lc_mbid = "N121763764" ;
      $lc_mbid = "0939234391" ;
    echo "傳入 lc_mbid0=".$lc_mbid ."<BR>";

     $ofn_david =  new david_shpg;  // 加入david 的公用程式

     $lc_mbid2 = $ofn_david->gfc_idps($lc_mbid,"A") ;  // A.加密


     
    $lc_mbid3 = $ofn_david->gfc_idps($lc_mbid2,"R") ;  // R.解密
    echo "解密 lc_mbid3=".$lc_mbid3."<BR>";


    
     if ($lc_mbid == $lc_mbid3) {
         echo "正確" ."<BR>";
     } else {
        echo "錯誤" ."<BR>";  
     }

     echo "加密 lc_mbid2=".$lc_mbid2."<BR>";
    } // endif
    //----------------------------------------------------------------------------------

    // 測試 生日加密
    if ( 1== 12) {
    $lc_bddt = "1969-05-27" ;
    echo "傳入 lc_bddt0=".$lc_bddt ."<BR>";
    $ofn_david =  new david_shpg;  // 加入david 的公用程式

    $lc_bddt2 = $ofn_david->gfc_bdps($lc_bddt,"A") ;  // 生日 A.加密
    echo "解密 lc_bddt2=".$lc_bddt2."<BR>";

    $lc_bddt3 = $ofn_david->gfc_bdps($lc_bddt2,"R") ;  // 生日 R.解密
    echo "解密 lc_bddt3=".$lc_bddt3."<BR>";

    if ($lc_bddt == $lc_bddt3) {
        echo "正確" ."<BR>";
    } else {
       echo "錯誤" ."<BR>";  
    }
    }

    //----------------------------------------------------------------------------------

    // 測試 密碼 加密
    if ( 1== 12) {
        $lc_ps = "4321abdavid" ;
        echo "傳入 密碼 =".$lc_ps ."<BR>";
        $ofn_david =  new david_shpg;  // 加入david 的公用程式
    
        $lc_ad = "14563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }
        //
        $lc_ad = "24563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "34563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "44563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "54563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "64563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "74563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "84563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "94563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "04563" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
        $lc_ad = "" ;
        $lc_psad = $ofn_david->gfc_psps($lc_ps,$lc_ad,"A") ;  
        echo "  加密參數=".$lc_ad ."->" . $lc_psad ;
        $lc_ps2 = $ofn_david->gfc_psps($lc_psad,$lc_ad,"R") ;  
        echo "  解密後 =" . $lc_ps2 ;
        if ($lc_ps == $lc_ps2) {
            echo "正確" ."<BR>";
        } else {
           echo "錯誤" ."<BR>";  
        }        //
    
   
    }
    
    // 測試 解出 sql 字串 
    if ( 1== 12) {
        $ofn_david =  new david_shpg;  // 加入david 的公用程式

        $sqlstr = " SELECT  *  FROM cp_cscr WHERE c_cdcrmd like :qc_cdcrmd " ;
        $sqlary = array();  
        $sqlary[":qc_cdcrmd"] = "C12" ;  // 車型

        $lc_sqdbss = $ofn_david->gfc_trsqst($sqlstr,$sqlary) ;     // 除錯用 , 產生 sql string 
        echo "轉換後sqlstr=". '<BR>'.$lc_sqdbss . '<br/>'. '<BR>'. '<BR>';  // 除錯用 , 產生 sql string 
    }



?>
