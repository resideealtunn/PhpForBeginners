<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For Döngüsü</title>
</head>
<body>
<?php
$dizi=array("a","b","c","d","e","f","g");

for($i=0;$i<count($dizi);$i++){		/* dizideki eleman sayısı kadar dön*/
	echo $dizi[$i]."<br>";
}
?>
<br>
<select>
<?php
	for($x=1960;$x<=2024;$x++){
		echo '<option>'.$x.'</option>';
	}
?>	
</select>
</body>
</html>