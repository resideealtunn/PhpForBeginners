<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>String Functions</title>
</head>
<body>
<!-- tr karakterler hata vermesin diye html içine yazdık--> 
<?php

$metin="phPDe NeLEr yapIlaBiLıR?";
echo $metin."<br>";			//alt satıra geç

$lower=strtolower($metin);			//tüm harfleri küçük harflerle yaz
echo $lower."<br>";

$kucukmutasyon=mb_strtolower($metin, "UTF-8");		//tr karakterlerle sorun yaşamamak için mb ekledik
echo $kucukmutasyon."<br>";

$upper=strtoupper($metin);		//tüm harfleri büyük harflerle yaz
echo $upper."<br>";

$basharflerup=ucwords($metin);		//bas harfleri büyük yaz
echo $basharflerup."<br>";

$ilkharfup=ucfirst($metin);			//paragrafın ilk harfini büyük yaz
echo $ilkharfup."<br>";		

$manyfunction=ucwords(mb_strtolower($metin, "UTF-8"));		//birden çok func aynı anda çalıştırılabilir
echo $manyfunction;
?>
</body>
</html>
