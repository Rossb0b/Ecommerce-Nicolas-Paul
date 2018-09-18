<?php

session_start();

// conection bdd//
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=e-shoes;charset=utf8', 'root', 'yeswewebPaul');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
//select all enter from products table//
$req = $bdd->query('SELECT * FROM products ORDER BY id LIMIT 0,4');

$rep = $req->fetchAll();
//including header page//
    include 'header.html';
?>


<section>
    <div class="container">
      <div class="row">
        <div class="col-12  col-md-4 mx-auto prod produit">
          <?php
          //display information for each article//
            echo "<img class='Imgsheet size-img' src='img/" . $rep[$_GET['index']]['picture'] . "' alt='photo sneakers'><br />";
            echo $rep[$_GET['index']]['name'] . "<br />";
            echo $rep[$_GET['index']]['price'] . "<br />";
            echo $rep[$_GET['index']]['disponibility'] . "<br />";
            echo $rep[$_GET['index']]['size'] . "<br />";
            echo $rep[$_GET['index']]['color'] . "<br />";
            echo $rep[$_GET['index']]['description'];
          ?>
          <!-- button add  -->
          <button type="button" class="mx-auto mt-5 col-6 btn btn-success">Ajouter au panier</button>
       </div>
     </div>
    </div>
</section>

    <?php
    //including footer page//
      include 'footer.html';
    ?>
