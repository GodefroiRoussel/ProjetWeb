<?php

if(isset($_COOKIE["user"])){
		include_once('../Model/estAdmin.php');
		$estAdmin= isAdmin($_COOKIE["user"]);
	}
	
	include_once('../index.php');