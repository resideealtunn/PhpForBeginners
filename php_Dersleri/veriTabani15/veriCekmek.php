<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>veri Tabanından Veri Çekmek</title>
</head>
<body>
<?php
try{
	$baglanti=new PDO("mysql:host=localhost;dbname=phpdersleri;charset=utf8","root","");
	$oku=$baglanti->query("SELECT * FROM bilgiler" , PDO::FETCH_ASSOC);  //pdo içindeki bir yapıdır
	print_r($oku);
	echo "<br>";
	if($oku!=false && !empty($oku)){
		foreach ($oku as $veriler) {		//veriler dizisi oluştu
			//print_r($veriler);
			//echo "<br>";
			$id=$veriler["id"];
			echo $id;
			echo "<br>";
			$metin=$veriler["metin"];
			echo $metin;
			echo "<br>";
			$durum=$veriler["durum"];
			echo $durum;
			echo "<br>";
		}
	}

}catch(PDOException $e){
	echo $e->getMessage();
	exit();
}


?>
</body>
</html>