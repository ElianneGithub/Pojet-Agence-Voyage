<!DOCTYPE>
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
<html>
<head>
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
<h1>Search page</h1>
<div class="article-container">
<?php
    $mysqli -> set_charset("utf8");
    if(isset($_POST['submit-search'])){
		$search=mysqli_real_escape_string($mysqli, $_POST['search']);
		$sql="SELECT * FROM Articles WHERE Titre LIKE '%$search%'";
		$resultat=mysqli_query($mysqli, $sql);
		$queryresultat= mysqli_num_rows($resultat);
		echo "Il y a ".$queryresultat." resultats ! ";
		if($queryresultat > 0){
		while($row= mysqli_fetch_assoc($resultat)){
			echo "<div>
			      <h3>".$row['Titre']."</h3>
				  <h3>".$row['Contenu']."</h3>
				 </div><br>";
	    }
	    }
		else{
			echo "Aucun résultat pour ". $search ; 
		}
}
?>
</div>
</div> 
</form>
</body>
</html>