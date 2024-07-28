<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nesne Yönelimli Programlama</title>
</head>
<body>
<?php
class islemler{
function topla($a,$b){return($a+$b);}
function cikart($a,$b){return($a-$b);}
}

$islemler=new $islemler();		//sınıfı tanımladık. sınıfın atandıgı değişkenin sınıf adıyla aynı olması tavsiye edilir
// eğer tanımlanan class değişkeninin değeri kod devamında değiştirilirse hata alınır.
echo $islemler->topla(100,50);		//class içinden fonksiyon çağırımı
?>

</body>
</html>