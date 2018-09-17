<?php
  $prodlist = array
    (
      'prod1' => array
      (
        'name' => 'Lebron 11 XI',
        'price' => '€69.99',
        'picture' => '<img name="Lebron 11 XI" method="post" action="prod.php" class="size-img" src="img/ankle-men-s-air-cushion-authentic.jpg_640x640.jpg" alt="">',
        'dispo' => 'Il ne reste pu que deux exemplaires !',
        'size' => '43EU','41EU',
        'color' => 'Black',
        'desc' => 'Synthétique',
      ),
        'prod2' => array
      (
        'name' => 'LeBron 15',
        'price' => '€150',
        'picture' => '<img name="LeBron 15" class="size-img" src="img/nike-zoom-kobe-10.jpg" alt="">',
        'dispo' => 'Dernier exemplaire disponible',
        'size' => '40EU',
        'color' => 'Multicolor/black',
        'desc' => 'Synthétique',
      ),
        'prod3' => array
      (
        'name' => 'High Top-G0621_2',
        'price' => '€67.30',
        'picture' => '<img name="High Top-G0621_2" class="size-img" src="img/product-image-563631783.jpg" alt="">',
        'dispo' => 'None',
        'size' => 'None',
        'color' => 'Red',
        'desc' => 'Breathable',
      ),
        'prod4' => array
      (
        'name' => 'Air Jordan 1',
        'price' => '€109.99',
        'picture' => '<img name="Air Jordan 1" class="size-img" src="img/Sneakers-High-Top.jpg" alt="">',
        'dispo' => 'Il reste deux exemplaires !',
        'size' => '44.5', '45',
        'color' => 'Red',
        'desc' => 'Leather',
      )

    );


   ?>

    <?php
      include 'header.html';
    ?>
    <section>
      <div class="container">
        <div class="row margin">

            <?php foreach ($prodlist as $key => $value) {?>
              <div class='mx-auto col-md-5 col-lg-2 d-flex flex-column text-center description-index m-1 border-FF4200'>
              <a href='prod.php?index=<?php echo $key; ?>'>
              <?php echo $value['picture'];?> <br />
              <?php echo $value['name'];?> <br />
              <?php echo $value['price'];?>
              </a></div>
            <?php  };?>

        </div>
      </div>
    </section>
    <?php
      include 'footer.html';
    ?>
  </div>
