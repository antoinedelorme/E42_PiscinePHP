<?php
session_start();
if (isset($_POST['submit']))
{
	$_SESSION['userid'] = $_POST['login'];
}
?>

<html><body>
<form action="" method="get">
Identifiant: <input type="text" name="login" value="" />
<br />
Mot de passe: <input  type="text" name="passwd" value="" />
<input type="submit" mame="submit"/>

</form>
</body></html>


