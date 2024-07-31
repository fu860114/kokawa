<?

	if (!defined('Usable'))
	{
	    die('');
	}

	//VARs
	//主機代號(產生會員編號使用)  A=台灣智邦  B=阿里雲
	define('CoLocation',   'A');
	
	$MEMBLAVELNAME = array();
	$MEMBLAVELNAME["NORMAL"] = "一般會員";
	$MEMBLAVELNAME["CONSULT"] = "諮詢會員";
	$MEMBLAVELNAME["VIP"] = "VIP會員";
	$MEMBLAVELNAME["DEALER"] = "經銷商";
	$MEMBLAVELNAME["WHOLESALE"] = "營銷商";	
	$MEMBLAVELNAME["CEO"] = "CEO";
	$MEMBLAVELNAME["COO"] = "COO";
	$MEMBLAVELNAME["ASIAUIB"] = "ASIAUIB";
	
	// type< 10 都是贈品券
	$TICKETTYPE[1] = "新註冊會員贈送抵用券";
	$TICKETTYPE[2] = "新註冊會員贈送抵用券";
	$TICKETTYPE[3] = "特別加算";

	$TICKETTYPE[11] = "購買諮詢會員抵用券";	
	$TICKETTYPE[12] = "購買VIP會員抵用券";	
    $TICKETTYPE[14] = "購買經銷商抵用券";
	
	$BONUSNAME["SB"] = "介紹獎金";
	$BONUSNAME["MB"] = "諮詢獎金";	
	$BONUSNAME["IB"] = "邀請獎金";	
	$BONUSNAME["EB"] = "經營獎勵";
	$BONUSNAME["CB"] = "企業獎勵";
	
?>