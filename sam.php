 <?php
session_start();
$_SESSION['nb'];
?>

 
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Qui sera Sam ?</title>
	</head>
<body>
	<header></header>
		<h1>Qui sera le prochain ?</h1>
		<form method="post" action="noms.php">
			<p>Combien etes vous a sortir ?</p>
			<input type="number" name="howmuch">
			<input type="submit" value="Valider" />
		</form>
	<footer></footer>
</body>
</html> 