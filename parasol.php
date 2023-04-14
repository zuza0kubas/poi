<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form action="parasol.php" method="GET">
		<input type="text" name="login">
		<input type="text" name="haslo">
		<input type="submit" value="wyślij dane">
		<input type="reset" value="wyczyść dane">
	</form>
<?php
echo "login:".$_GET['login']."<hr>";
echo "login:".$_GET['haslo'];
?>