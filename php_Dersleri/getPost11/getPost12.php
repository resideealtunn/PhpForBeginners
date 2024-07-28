<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET POST</title>
</head>
<body>
	<a href="getPost2_13.php">13.sayfaya git</a><br>
	<a href="getPost2_13.php?degisken=reshidegOld">getpost</a><br>	//normal bi değişken tanımlar gibi
	<!--bu bir get komutu biçimidir, diğer sayfada al-->

	<!-- aynı sayfaya gönderirken -->
	<?php
	if($_GET){				//eğer get ile bir değişken gelirse demektir.
	echo $_GET['degisken'];
	}
	?>

	<!-- form yapılarında post kullanımı daha güvenlidir -->
	<?php
	if($_POST){
		echo $_POST['adsoyad'];
	}
	?>
	<form action="#" method="POST">		//aynı sayfa gönderileceği için #
	<input type="text" name="adsoyad">
	<input type="submit" name="buton" value="Gönder">
	<!-- burada name içinde atanan değerler değişken ismidir -->
	</form>
</body>
</html>

<!-- her iki yapıda bir sayfaya kullanıcıdan alınan verileri göndermek için kullanılır -->
<!-- gette veriler açık bir şekilde görünür gönderilebilrken post'ta kapalı, gizli gönderilebilir. -->
<!-- bu metotlar ile aynı sayfaya da veri gönderilebilir -->


