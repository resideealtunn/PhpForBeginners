<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Açık Kapalı Fonksiyonlar</title>
</head>
<body>
<?php
class sayilar{
	function __construct(){		
		echo " ilk fonksiyon ";
	}
	private function sayi(){
		return 15;
	}
	public function hesapla($sayi1,$sayi2){
		return $sayi1+$sayi2+$this->sayi();
	}
	function __destruct(){
		echo " son fonksiyon "
	}
}
$sayilar=new sayilar();

?>
</body>
</html>

<!-- __construct fonksiyonu class tanımlandığında otomatik olarak çalışan fonksiyondur. ilk çalışan fonksiyondur -->
<!-- __destruct fonksiyonu da class tanımlandığında otomatik olarak çalışan fonksiyondur. son çalışan fonksiyondur -->
<!-- private bir fonksiyona class içinde başka bir fonksiyondan erişilemez ve class dışında da erişilemez, korunmak istenen işlemler hesaplamalar bu fonksiyon içinde yapılır  -->
<!-- public bir fonksiyonun public yazılmadan tanımlanan bir fonksiyonla farkı yoktur, dışarıdan erişilebilen genel bir fonksiyondur -->
