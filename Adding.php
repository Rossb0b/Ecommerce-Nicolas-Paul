<?php 

session_start();


?>

<form method="post" action="Adding.php">
	<input type="text" name="identifiant"/>
	<input type="password" name="password"/>
	<button type="submit">se connecter</button>
</form>

<?php 

if (isset($_POST['identifiant']) AND isset($_POST['password'])) {
		if ($_POST['identifiant'] == $_SESSION['identifiant'] AND $_POST['password'] == $_SESSION['password']) 
		{
			echo $_POST['identifiant'];
		}
		else 
		{
			echo "Veuillez entrer un identifiant valide";
		}
	}

?>
