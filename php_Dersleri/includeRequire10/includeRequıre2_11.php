<!-- başka sayfada yazılan her şeyi bu sayfada kullanabilmek için include kullanılır -->
<!-- include_once ve require_once komutları aynı görevi görür ancak include hata alınca bi sonraki satırdan devam eder, require programı sonlandırır -->
<!-- include komutları ile getirilen sayfa sanki kopyalanıp bu asyfaya yapıştırılmış gibidir, bu sayfada zaten html komutları oldugundan tekrar include etmeye gerek yoktur. dolayısıyla getirilen include dosyası direkt phpde yazılabilir -->
<!-- include_once ve require_once yapıları çağırılan sayfaları 1 kere include ederken include ve require çağrıldığı sürece include eder -->
<!-- çağırılan sayfanın içindeki bir değişkenin değeri bu sayfada değiştirilebilir, orijinal hali değişmez.  -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INCLUDE REQUIRE</title>
</head>
<body>
<?php
include_once'includeRequire10.php';
require_once("includeRequire10.php");
echo $metin."<br>";
echo $sayi;

include("includeRequire10.php");
include("includeRequire10.php");
include("includeRequire10.php");

require("includeRequire10.php");
require("includeRequire10.php");
require("includeRequire10.php");

?>
</body>
</html>