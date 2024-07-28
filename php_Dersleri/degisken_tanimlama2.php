<!-- değişken tanımlarken dikkat edilecek hususlar -->
<!-- $ işareti ile tanımlanmaya başlar -->
<!-- sayısal değerlerle baslanmaz -->
<!-- büyük küçük harf duyarlılığı vardır -->
<!-- türkçe karakter kullanılmamalıdır -->
<!-- bir değişkene başka bir değişken atanabilir -->

<?php
$sayi=11;
$metin="reshidegOld";
$str1="fatma";
$str2="mahmut";

echo $sayi;
echo $metin;
echo $str1;
echo $str2;

$str1=$str2;
echo $str1;
?>