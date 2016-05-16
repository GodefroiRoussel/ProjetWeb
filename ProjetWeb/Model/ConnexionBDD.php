<?php
try
	{
		$pdo = new PDO('mysql:host=mysql-emploitech.alwaysdata.net;dbname=emploitech_projetweb;charset=utf8','122980_0','toto');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	       
	}