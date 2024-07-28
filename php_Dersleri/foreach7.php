<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ForeAch Döngüsü</title>
</head>
<body>
<?php
$dizi=array("sinem","isim"=>"ayse","sude","nikah_sahidi"=>"berva");
print_r($dizi);		//dizi elemanlarını indisleriyle yazdırır

/*for ($i=0; $i < count(dizi); $i++) { 
	echo $dizi[$i];
}
for bunu kabul etmez ve hata verir ancak foreach kabul eder*/

foreach ($dizi as $key => $value) {
	echo $key." - ".$value. "<br />";
}
?>
<!-- veri işlemlerinde veri tabanlarında dizilerde foreach çok kullanılır-->
</body>
</html>