<?php

session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=e-shoes;charset=utf8', 'root', '58375837Zz');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT * FROM products ORDER BY id LIMIT 0,4');

$rep = $req->fetchAll();

    include 'header.html';
?>


<section>
    <div class="container">
      <div class="row">
        <div class="col-12  col-md-4 mx-auto prod produit">
          <?php
            echo "<img class='Imgsheet size-img' src='img/" . $rep[$_GET['index']]['picture'] . "' alt='photo sneakers'><br />";
            echo $rep[$_GET['index']]['name'];
            echo $rep[$_GET['index']]['price'];
            echo $rep[$_GET['index']]['disponibility'];
            echo $rep[$_GET['index']]['size'];
            echo $rep[$_GET['index']]['color'];
            echo $rep[$_GET['index']]['description'];
          ?>
       </div>
     </div>
    </div>
</section>


<?php include 'footer.html';?>