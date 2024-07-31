<?

	function PageList($allcount, $shownum, $shownum_page, $nowpage, $url){

    $pagestr = "<ul>";

		if( strpos($url, "?") !== false )
			$pageurl = $url."&pageno=";
		else
			$pageurl = $url."?pageno=";

		$pagesum = ceil($allcount/$shownum);
		
		if( $nowpage <= 0 ){

			// $pagestr = "<span class=\"disabled\"> < </span> ";
			$pagestr .= "<li class='prev disabled'><a href='#'>&larr; 上一頁</a></li> ";

		}else{

			// $pagestr = "<a href=\"".$pageurl.($nowpage-1)."\"> < </a> ";
      $pagestr .= "<li class='prev'><a href=\"".$pageurl.($nowpage-1)."\">&larr; 上一頁</a></li> ";

		}

		if( $pagesum < $shownum_page ){

			for($i = 0; $i < $pagesum; $i++){

				if( $i == $nowpage ){
					//$pagestr .= "<span class=\"current\">".($i+1)."</span> ";					
					$pagestr .= "<li class='active'><a href='#'>".($i+1)."</a></li>";
					
				}else{
					// $pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
					$pagestr .= "<li class=''><a href=\"".$pageurl.$i."\">".($i+1)."</a></li>";
				}

			}
	
		}elseif( $nowpage <= ceil($shownum_page / 2) ){
	
			for($i = 0; $i < $shownum_page - 1; $i++){
	
				if( $i == $nowpage ){
					// $pagestr .= "<span class=\"current\">".($i+1)."</span> ";
					$pagestr .= "<li class='active'><a href='#'>".($i+1)."</a></li>";
				}else{
					// $pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
					$pagestr .= "<li class=''><a href=\"".$pageurl.$i."\">".($i+1)."</a></li>";
				}
	
			}
	
			$pagestr .= " ... ";
	
			// $pagestr .= "<a href=\"$pageurl".($pagesum-1)."\">".$pagesum."</a> ";
			$pagestr .= "<li class=''><a href=\"$pageurl".($pagesum-1)."\">".$pagesum."</a></li>";
	
		}elseif( $nowpage >= ($pagesum - ceil($shownum_page / 2)) ){
	
			// $pagestr .= "<a href=\"".$pageurl."0\">1</a> ";
			$pagestr .= "<li class=''><a href=\"".$pageurl."0\">1</a></li>";
	
			$pagestr .= " ... ";
	
			for($i = ($pagesum - $shownum_page + 1); $i < $pagesum; $i++){
	
				if( $i == $nowpage ){
					// $pagestr .= "<span class=\"current\">".($i+1)."</span> ";
					$pagestr .= "<li class='active'><a href='#'>".($i+1)."</a></li>";
					
				}else{
					// $pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
					$pagestr .= "<li class=''><a href=\"".$pageurl.$i."\">".($i+1)."</a></li>";
					
				}
	
			}
	
		}else{
	
			// $pagestr .= "<a href=\"".$pageurl."0\">1</a> ";
			$pagestr .= "<li class=''><a href=\"".$pageurl."0\">1</a></li>";

	
			$pagestr .= " ... ";
			
			for($i = ($nowpage - ceil($shownum_page / 2) + 1); $i < ($nowpage - ceil($shownum_page / 2) + $shownum_page - 1); $i++){
	
				if( $i == $nowpage ){
					// $pagestr .= "<span class=\"current\">".($i+1)."</span> ";
					$pagestr .= "<li class='active'><a href='#'>".($i+1)."</a></li>";
					
				}else{
					// $pagestr .= "<a href=\"".$pageurl.$i."\">".($i+1)."</a> ";
					$pagestr .= "<li class=''><a href=\"".$pageurl.$i."\">".($i+1)."</a></li>";
				}
	
			}
	
			$pagestr .= " ... ";
	
			// $pagestr .= "<a href=\"".$pageurl.($pagesum-1)."\">".$pagesum."</a> ";
			$pagestr .= "<li class=''><a href=\"".$pageurl.($pagesum-1)."\">".$pagesum."</a></li>";
	
		}

		if( $nowpage >= ($pagesum - 1) ){

			// $pagestr .= "<span class=\"disabled\"> > </span> ";
			$pagestr .= "<li class='next disabled'><a href='#'>下一頁 &rarr;</a></li>";

		}else{

			// $pagestr .= "<a href=\"".$pageurl.($nowpage+1)."\"> > </a> ";
			$pagestr .= "<li class='next'><a href=\"".$pageurl.($nowpage+1)."\">下一頁 &rarr;</a></li>";

		}

		return $pagestr;
	
	}

?>