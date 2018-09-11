<?php
$prodlist = array
  (
    'prod1' => array
    (
      'picture' => '<img class="Imgsheet" name ="Lebron 11 XI" method="post" action="prod.php" class="size-img" src="img/ankle-men-s-air-cushion-authentic.jpg_640x640.jpg" alt=""',
      'name' => 'Lebron 11 XI <br />',
      'price' => '€69.99 <br />',
      'dispo' => 'Il ne reste pu que deux exemplaires ! <br />',
      'size' => '43EU / 41EU <br />',
      'color' => 'Black <br />',
      'desc' => 'Synthétique <br />',
    ),
      'prod2' => array
    (
      'picture' => '<img class="Imgsheet" name="LeBron 15" class="size-img" src="img/nike-zoom-kobe-10.jpg" alt="" <br />',
      'name' => 'LeBron 15 <br />',
      'price' => '€150 <br />',
      'dispo' => 'Dernier exemplaire disponible <br />',
      'size' => '40EU <br />',
      'color' => 'Multicolor/black <br />',
      'desc' => 'Synthétique <br />',
    ),
      'prod3' => array
    (
      'picture' => '<img class="Imgsheet" name ="High Top-G0621_2" class="size-img" src="img/product-image-563631783.jpg" alt="" <br />',
      'name' => 'High Top-G0621_2 <br />',
      'price' => '€67.30 <br />',
      'dispo' => 'None <br />',
      'size' => 'None <br />',
      'color' => 'Red <br />',
      'desc' => 'Breathable <br />',
    ),
      'prod4' => array
    (
      'picture' => '<img class="Imgsheet" name ="Air Jordan 1" class="size-img" src="img/Sneakers-High-Top.jpg" alt="" <br />',
      'name' => 'Air Jordan 1 <br />',
      'price' => '€109.99 <br />',
      'dispo' => 'Il reste deux exemplaires ! <br />',
      'size' => '44.5', '45 <br />',
      'color' => 'Red <br />',
      'desc' => 'Leather <br />',
    )
  );
 ?>

<?php include 'header.html';
?>

<section>
    <div class="container">
      <div class="row">
        <div class="col-5 mx-auto prod produit">
          <?php
            echo $prodlist[$_GET['index']]['picture'];
            echo $prodlist[$_GET['index']]['name'];
            echo $prodlist[$_GET['index']]['price'];
            echo $prodlist[$_GET['index']]['dispo'];
            echo $prodlist[$_GET['index']]['size'];
            echo $prodlist[$_GET['index']]['color'];
            echo $prodlist[$_GET['index']]['desc'];
          ?>
       </div>
     </div>
    </div>
</section>
?>

<?php include 'footer.html';
?>
