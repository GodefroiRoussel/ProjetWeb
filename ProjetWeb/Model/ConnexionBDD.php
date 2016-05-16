<?php
try
	{
		$host = '';
		$dbname='';
		$pseudo='';
		$password='';
		$pdo = new PDO('mysql:host='$host';dbname='$dbname';charset=utf8',$pseudo,$password);
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	       
	}