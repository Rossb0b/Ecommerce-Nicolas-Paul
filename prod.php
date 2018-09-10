

<?php

$prodlist = array 
(
  'prod1' => array 
  (
    'name' => 'Lebron 11 XI',
    'price' => '€69.99',
    'dispo' => 'Il ne reste pu que deux exemplaires !',
    'size' => '43EU','41EU',
    'color' => 'Black',
    'desc' => 'Synthétique',
  ),
    'prod2' => array 
  (
    'name' => 'LeBron 15',
    'price' => '€150',
    'dispo' => 'Dernier exemplaire disponible',
    'size' => '40EU',
    'color' => 'Multicolor/black',
    'desc' => 'Synthétique',
  ),
    'prod3' => array 
  (
    'name' => 'High Top-G0621_2',
    'price' => '€67.30',
    'dispo' => 'None',
    'size' => 'None',
    'color' => 'Red',
    'desc' => 'Breathable',
  ),
    'prod4' => array 
  (
    'name' => 'Air Jordan 1',
    'price' => '€109.99',
    'dispo' => 'Il reste deux exemplaires !',
    'size' => '44.5', '45',
    'color' => 'Red',
    'desc' => 'Leather',
  )
);


    include 'header.html';
  ?>

  <div class="container-fluid">
    <div class="col-10 offset-1" style="border:1px solid red; height:88vh;">




<!-- <?php 
foreach ($prodlist as $prod) {
  foreach ($prod as $element) {
  echo $element . "<br />";
  };
}; ?> -->

    </div>
  </div>

  <?php
    include 'footer.html';
  ?>

