<?php

	class AdminCheck{

		var $SessionLogin;   //�n�JSESSION�W��

		function AdminCheck(){

			$this->SessionLogin = "AdminSerno";

		}

		function LoginCheck(){

			if($_SESSION[ $this->SessionLogin ] != "")
				return true;
			else
				return false;

		}

		//�v��
		function ManageCheck($AdminCheck,$ManageType){

			return $AdminCheck[$_SESSION['AdminType']][$ManageType];

		}

		//Header���
		function GetHeader(){

			$Header = "Header.tpl";

			return $Header;

		}

		//Header���
		function GetHeaderReview(){

			$Header = "Header_Review.tpl";

			return $Header;

		}

	}

?>