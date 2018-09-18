<?php 

session_start();
if ($_SESSION['isConnect'] = true)
{
	$_SESSION['isConnect'] = false;
}

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=e-shoes;charset=utf8', 'root', '58375837Zz');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT * FROM users');
$rep = $req->fetch();

include 'header.html';

if(isset($_SESSION['isConnect']) OR $_SESSION['isConnect'] = false): ?>
<form class="text-center margin" method="post" action="Adding.php">
	<input type="text" name="identifiant"/>
	<input type="password" name="password"/>
	<button type="submit">se connecter</button>
</form>

<?php 
endif;
if (isset($_POST['identifiant']) AND isset($_POST['password'])) {
		if ($_POST['identifiant'] == $rep['name'] AND $_POST['password'] == $rep['password']) 
		{ 
			$_SESSION['isConnect'] = true; ?>
			<form class="col-6 offset-3 text-center" method="post" action="answer.php" style="margin-bottom:105px; margin-top:60px;">
			<label for="name">Indiquer le nom du produit.</label>
			<input type="text" name="name"/>
			<br />

			<label for="price">Indiquer le prix du produit.</label>
			<input type="text" name="price"/>
			<br />

			<label for="picture">Indiquer le nom de l'image.</label>
			<input type="text" name="picture"/>
			<br />


			<label for="size">Indiquer les pointures disponibles</label>
			<input type="text" name="size"/>
			<br />

			<label for="color">Indiquer les couleurs disponibles</label>
			<input type="text" name="color"/>
			<br />

			<label for="description">Décrire le produit</label>
			<br />
			<input type="text" name="description"></textarea>
			<br />

			<label for="disponibility">Indiquez la disponibilité ou non du produit.</label>
			<br />
			<select name="disponibility" size="1">
				<option>Oui
				<option>Non
			</select>
			<br />
			<button type="submit">Envoyer le formulaire</button>
		</form>	
		<?php }
		else 
		{
			echo "Veuillez entrer un identifiant valide";
		}
	}
	else if ($_SESSION['isConnect'] = true) 
	{ ?>

		<form class="col-6 offset-3 text-center" method="post" action="answer.php" style="margin-bottom:105px; margin-top:60px;">
			<label for="name">Indiquer le nom du produit.</label>
			<input type="text" name="name"/>
			<br />

			<label for="price">Indiquer le prix du produit.</label>
			<input type="text" name="price"/>
			<br />

			<label for="picture">Indiquer le nom de l'image.</label>
			<input type="text" name="picture"/>
			<br />


			<label for="size">Indiquer les pointures disponibles</label>
			<input type="text" name="size"/>
			<br />

			<label for="color">Indiquer les couleurs disponibles</label>
			<input type="text" name="color"/>
			<br />

			<label for="description">Décrire le produit</label>
			<br />
			<input type="text" name="description"></textarea>
			<br />

			<label for="disponibility">Indiquez la disponibilité ou non du produit.</label>
			<br />
			<select name="disponibility" size="1">
				<option>Oui
				<option>Non
			</select>
			<br />
			<button type="submit">Envoyer le formulaire</button>
		</form>	
	<?php		
	}
	else {
		echo "vous devez vous connecter afin de pouvoir ajouter des articles.";
	}

	include 'footer.html';
	?>
