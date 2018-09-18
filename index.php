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

$req = $bdd->query('SELECT id, name, price, picture FROM products ORDER BY id LIMIT 0,4');

$rep = $req->fetchAll();

    include 'header.html';
?>

    <section>
      <div class="container">
        <div class="row margin">



          <?php
            foreach ($rep as $key => $value) {
              echo "<div class='col-md-6 col-lg-3 d-flex flex-column text-center description-index'>";
              echo "<a href='prod.php?index=$key'>";
              echo "<img class='Imgsheet size-img' src='img/" . $value['picture'] . "' alt='photo sneakers'><br />";
              echo $value['name'] . '<br />';
              echo $value['price'];
              echo "</a></div>";
            };

            $req->closeCursor();

          ?>
        </div>
      </div>
    </section>
    <?php
      include 'footer.html';
    ?>
  </div>
