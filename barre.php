<meta charset="utf-8"/>
<?php
    $host="localhost";
    $user="php";
    $password="pass";
    $database="Projet_php";
	$mysqli	= mysqli_connect($host,	$user, $password, $database);
	if($mysqli -> connect_errno){
		die ("Echec	lors de	la connexion".$mysqli->connect_error);
	}
    $mysqli -> set_charset("utf8");	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
<form action="search.php" method="POST">
<input type="text" name="search" placeholder="Recherche..."/>
<button type="submit" name="submit-search"  value="Valider"></button>
<h1>Front Page</h1>
<h2>ALL articles</h2>
</div> 
</form>
</body>
</html>