<?php
  $prodlist = array
    (
      'prod1' => array
      (
        'name' => 'Lebron 11 XI',
        'price' => '€69.99',
        'picture' => '<img src="img/ankle-men-s-air-cushion-authentic.jpg_640x640.jpg" alt=""',
        'dispo' => 'Il ne reste pu que deux exemplaires !',
        'size' => '43EU','41EU',
        'color' => 'Black',
        'desc' => 'Synthétique',
      ),
        'prod2' => array
      (
        'name' => 'LeBron 15',
        'price' => '€150',
        'picture' => '<img src="img/ankle-men-s-air-cushion-authentic.jpg_640x640.jpg" alt=""',
        'dispo' => 'Dernier exemplaire disponible',
        'size' => '40EU',
        'color' => 'Multicolor/black',
        'desc' => 'Synthétique',
      ),
        'prod3' => array
      (
        'name' => 'High Top-G0621_2',
        'price' => '€67.30',
        'picture' => '<img src="img/ankle-men-s-air-cushion-authentic.jpg_640x640.jpg" alt=""',
        'dispo' => 'None',
        'size' => 'None',
        'color' => 'Red',
        'desc' => 'Breathable',
      ),
        'prod4' => array
      (
        'name' => 'Air Jordan 1',
        'price' => '€109.99',
        'picture' => '<img src="img/ankle-men-s-air-cushion-authentic.jpg_640x640.jpg" alt=""',
        'dispo' => 'Il reste deux exemplaires !',
        'size' => '44.5', '45',
        'color' => 'Red',
        'desc' => 'Leather',
      )
    );
   ?>
  <div class="page">
    <?php
      include 'header.html';
    ?>
    <section>
      <div class="container">
        <div class="row margin">
          <?php
            foreach ($prodlist as $prod) {
              echo "<div class='col-md-3 d-flex flex-column text-center description-index'>";
              echo $prod['picture'] . '<br />';
              echo $prod['name'] . '<br />';
              echo $prod['price'];
              echo "</div>";
            };
          ?>
        </div>
      </div>
    </section>
    <?php
      include 'footer.html';
    ?>
  </div>
