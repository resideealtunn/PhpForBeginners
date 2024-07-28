<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fonsiyon Tanımlama</title>
</head>
<body>
<?php
function mat($a=3,$b=5, $islem="+"){
	$sayi1=$a;
	$sayi2=$b;
	if($islem=="+"){
	$sonuc=$a+$b;
	}
	elseif($islem=="-"){
	$sonuc=$a-$b;
	}
	elseif($islem=="/"){$sonuc=$a/$b;}
	elseif($islem=="*"){$sonuc=$a*$b;}
	echo $sonuc;
}

mat(31,15,"*");
echo "<br>";
mat(24,12,"/");
echo "<br>";

echo date("d/m/y")."<br>";		//phpde date fonksiyonu böyle kullanılır. farklı varsyasyonları da kullanılabilir. "y/m/d" , d-m-y gibi
$gun=date("d");
echo $gun."<br>";

function tarihFormati($gun,$ay,$yil){
$dizi=array("01" => "ocak","02" => "şubat","03" => "mart","04" => "nisan","05" => "mayıs","06" => "haziran","07" => "temmuz","08" => "ağustos","09" => "eylül","10" => "ekim","11" => "kasım","12" => "aralık" );
	echo $gun." ".$dizi[$ay]." ".$yil."<br>";
}
tarihFormati("12","10","2004");		//return ile alınıyorsa echo ile yada değişkene atanarak yazdırılır
?>
</body>
</html>