<!-- GET ile sayfa include etme örneği -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>get ile include</title>
</head>
<body>
	<a href="ornek1.php?ac=ornek2.php">örnek 2 include et</a><br>
	<?php
if($_GET){
	include_once($_GET["ac"]);
}
?>
</body>
</html>
