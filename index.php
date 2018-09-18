<?php
session_start();
//connenction bdd//
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=e-shoes;charset=utf8', 'root', 'yeswewebPaul');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//Select all from table product//
$req = $bdd->query('SELECT id, name, price, picture FROM products ORDER BY id LIMIT 0,4');
$rep = $req->fetchAll();
//include header page//
    include 'header.html';
?>

    <section>
      <div class="container">
        <div class="row margin">


          <?php
          //display information for each article//
            foreach ($rep as $key => $value) {
              echo "<div class='mx-auto col-md-6 col-lg-2 d-flex flex-column text-center description-index border-FF4200 mx-2'>";
              echo "<a href='prod.php?index=$key'>";
              echo "<img class='Imgsheet size-img' src='img/" . $value['picture'] . "' alt='photo sneakers'><br />";
              echo $value['name'] . '<br />';
              echo $value['price'];
              echo "</a></div>";
            };
            

            $req->closeCursor();
          //select all from users table//
            $req = $bdd->query('SELECT * FROM users');

            $rep = $req->fetch();

            $_SESSION['identifiant'] = $rep['name'];
            $_SESSION['password'] = $rep['password'];
          ?>
        </div>
      </div>
    </section>
    <?php
    //including footer page//
      include 'footer.html';
    ?>
  </div>
