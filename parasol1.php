<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form action="parasol1.php" method="POST">
		<input type="text" name="login">
		<input type="text" name="haslo">
		<input type="submit" value="wyślij dane">
		<input type="reset" value="wyczyść dane">
	</form>
<?php
echo "login:".$_POST['login']."<hr>";
echo "login:".$_POST['haslo'];
?>