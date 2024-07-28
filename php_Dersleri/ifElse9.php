<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IF ELSE</title>
</head>
<body>
<?php
$degisken="ok"
if($degisken=="ok" || $degisken=="tm"){
	echo "çalıştı";
}
elseif ($degisken=="no") {
	echo "no father no";
}
else{
	echo "çalışmadı";
}

//2.YOL
echo ($degisken=="ok") ? "çalıştı" : "çalışmadı";
	  //if şartı       ? if içi    :   else içi

?>
</body>
</html>