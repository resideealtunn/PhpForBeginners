<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Veri Tabanına Bağlanma</title>
</head>
<body>
<?php
$sunucu="localhost";
$kullanici="root";
$sifre="";
$veriTabaniAdi="phpdersleri";
$baglanti=false;
try{
	$baglanti=new PDO("mysql:host=".$sunucu.";dbname=".$veriTabaniAdi.";charset=utf8",$kullanici,$sifre);
	echo "veritabanına başarıyla bağlandınız!";
}
catch(PDOException $e){
	echo $e->getMessage();
	exit();
}
$baglanti=null;
?>
</body>
</html>
<!-- PDO php içerisindeki bir sınıftır. 3 pm alır. -->
<!-- 1-sunucu ve veri tabanı ismi belirtilir -->
<!-- 2-kullanıcı adı belirtilir, root -->
<!-- 3-boş -->