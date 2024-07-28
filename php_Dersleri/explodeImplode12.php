<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Explode & Implode</title>
</head>
<body>
<?php
$metin="merhabalar php dünyasına hoşgeldiniz";
$cevir=explode(" ",$metin);		//split fonksiyonuyla aynı işlevde
print_r($cevir);
echo $cevir[0];


$dizi=array("merhaba" ,"benim","adım","reshide");
$donustur=implode(" ", $dizi);			//dizinin arasına eklenmek istenen karakter
print($donustur);
?>
</body>
</html>
<!-- explode ve implode yapıları diziyi metine; metini diziye çevirmeye yarar -->
<!-- explode->split fonksiyonuyla aynı işlevde -->
<!-- implode -> dizi elemanları metine çevrilirken araya eklenmesi istenen karakterle birleştirir -->