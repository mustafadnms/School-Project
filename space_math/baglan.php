<?php

try{

	$db = new PDO("mysql:host=localhost; dbname=aubyazil_infodb3; charset=utf8", 'aubyazil_infodb','Xe6pcBcz');
	
	//echo "Veritabanı bağlantısı başarılı.";

}

catch (PDOExpception $e) {

	echo $e -> getMessage();
}


?>