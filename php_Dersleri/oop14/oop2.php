<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NYP 2</title>
</head>
<body>
<?php
class bilgiler{
function isimler(){
	return "mehmet ".$this->meyveler();
}
function meyveler(){
	//echo $this->isimler()."<br>";		//aynı class içinden başka sınıf çağırılırken
	return "armut";
}
}
$bilgiler=new bilgiler();
echo $bilgiler->isimler()."<br>";

?>
</body>
</html>