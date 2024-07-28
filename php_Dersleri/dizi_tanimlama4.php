<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dizi Tanımlama ve Kullanma</title>
</head>
<body>

<?php
$deneme="merhaba php";
$deneme2="merhaba html";
$deneme3="merhaba css";
echo $deneme." ".$deneme2." ".$deneme3."<br><br><br>";

$dizi=array();			/* 1. dizi tanımlama yöntemi*/
$dizi2[]="";			/* 2. dizi tanımlama yöntemi*/

// diziye key verilmediğinde 0. indisten başlar ama key verildiğinde verilmeyen ifade varsa 0'dan itibaren atayıp gider.

$dizi3=array("merhaba php","merhaba html","merhaba css");
echo $dizi3[1]."<br>";

//key ataması bu şekilde yapılır
$dizi4=array("php"=>"merhaba php" , 13=>"merhaba onüç");
echo $dizi4["php"]."<br>";
echo $dizi4[13]."<br>";

//dizi ataması indis değeri verilmediğinde bu şekilde yapılabilir
$dizi5[]="benim";
$dizi5[]="adim";
$dizi5[]="reshide";
$dizi5[]="gOld";
echo $dizi5[0]." ".$dizi5[1]." ".$dizi5[2]." ".$dizi5[3]."<br><br><br>";
echo ucfirst($dizi5[2])." ". strtoupper($dizi5[3]);

?>

</body>
</html>