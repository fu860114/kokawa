<?php

	class AdminCheck{

		var $SessionLogin;   //登入SESSION名稱

		function AdminCheck(){

			$this->SessionLogin = "AdminSerno";

		}

		function LoginCheck(){

			if($_SESSION[ $this->SessionLogin ] != "")
				return true;
			else
				return false;

		}

		//權限
		function ManageCheck($AdminCheck,$ManageType){

			return $AdminCheck[$_SESSION['AdminType']][$ManageType];

		}

		//Header選單
		function GetHeader(){

			$Header = "Header.tpl";

			return $Header;

		}

		//Header選單
		function GetHeaderReview(){

			$Header = "Header_Review.tpl";

			return $Header;

		}

	}

?>