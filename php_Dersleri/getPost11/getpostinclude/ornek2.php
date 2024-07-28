<?php
if($_POST){
	echo $_POST['degisken'];
}
?>
<form action='#' method="POST">
<input type="text" name="degisken">
<input type="submit" name="buton" value="Gönder">
</form>