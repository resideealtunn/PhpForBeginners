<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Çoklu Dizi Kullanımı</title>
</head>
<body>
<?php
$bilgiler=array("Meyveler"=>array("elma","armut","kayısı"), 
				"Sebzeler"=>array("nane","limon","tarçın"),
				"İsimler"=>array("düriye", "hüsniye", "kamil"));
?>

<ul>
	<li><?php echo $bilgiler["Meyveler"][0]; ?></li>
	<li><?php print($bilgiler["Sebzeler"][2]); ?></li>
	<li><?=$bilgiler["İsimler"][1];?></li>
</ul>

<ul>
	<li>Meyveler
		<ul>
			<li><?php echo $bilgiler["Meyveler"][0]; ?></li>
			<li><?php echo $bilgiler["Meyveler"][1]; ?></li>
			<li><?php echo $bilgiler["Meyveler"][2]; ?></li>
		</ul>
	</li>
		<li>Sebzeler
		<ul>
			<li><?php echo $bilgiler["Sebzeler"][0]; ?></li>
			<li><?php echo $bilgiler["Sebzeler"][1]; ?></li>
			<li><?php echo $bilgiler["Sebzeler"][2]; ?></li>
		</ul>
	</li>
		<li>İsimler
		<ul>
			<li><?php echo $bilgiler["İsimler"][0]; ?></li>
			<li><?php echo $bilgiler["İsimler"][1]; ?></li>
			<li><?php echo $bilgiler["İsimler"][2]; ?></li>
		</ul>
	</li>
</ul>
</body>
</html>