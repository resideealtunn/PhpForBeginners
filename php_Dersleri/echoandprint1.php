<!-- phpde yazılanlar html uzantılı'da çalıştırılamazken html'de yazılanlar php uzantılıda çalıştırılabilmektedir -->
<!-- yorum satırı CTRL + Ö ile yapılıyor -->
<!-- satır sonuna ; eklenir -->
<h1>Merhaba HTML</h1>
<?php
echo "<h1>Merhaba PHP echo ile</h1>";
print("<h1>Merhaba PHP2 print ile </h1> ");
?>
<?="<h1>Merhaba PHP3 short tags ile </h1>"?>