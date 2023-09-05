<?php
require_once __DIR__ . '/classes.php';

$dogs = new Categories('Dogs');
$cats = new Categories('Cats');





$products = [
    $crocchette = new Food($dogs->category, 'Crocchette', number_format(13.90, 2, ',', '.'), 'https://i.ebayimg.com/images/g/hsoAAOSw~IBiTBdR/s-l1600.jpg', 'Food'),
    $scatolette = new Food($dogs->category, 'Scatolette', number_format(9.90, 2, ',', '.'), 'https://www.farmacosmo.it/165195-medium_default/fresh-pollo-cibo-umido-cani-32-scatolette-100-g-111469.jpg', 'Food'),
    $gel = new Food($dogs->category, 'Gel', number_format(23.90, 2, ',', '.'), 'https://d21mug5vzt7ic2.cloudfront.net/tigros/70298/resize/70298_main.jpg', 'Food'),


    $cuccia = new Essentials($dogs->category, 'Cuccia', number_format(33.90, 2, ',', '.'), 'https://m.media-amazon.com/images/I/61N5P4xGzlL._AC_UF894,1000_QL80_.jpg', 'Essentials'),
    $tiraGraffi = new Essentials($cats->category, 'Tiragraffi', number_format(99.90, 2, ',', '.'), 'https://m.media-amazon.com/images/I/61AmecJCuqL._AC_UF894,1000_QL80_.jpg', 'Essentials'),
    $lettiera = new Essentials($cats->category, 'Lettiera', number_format(19.90, 2, ',', '.'), 'https://m.media-amazon.com/images/I/61dZzmT3PzL._AC_UF894,1000_QL80_.jpg', 'Essentials'),



    $palla = new Games($dogs->category, 'Palla', number_format(3.90, 2, ',', '.'), 'https://m.media-amazon.com/images/I/61MfnoRDFmL.jpg', 'Games'),
    $piuma = new Games($cats->category, 'Piuma', number_format(2.90, 2, ',', '.'), 'https://m.media-amazon.com/images/I/61Zk4T9JpUL.jpg', 'Games'),
    $elastici = new Games($cats->category, 'Elastici', number_format(1.90, 2, ',', '.'), 'https://m.media-amazon.com/images/I/41KLm+c0ITL._AC_UF894,1000_QL80_.jpg', 'Games'),
];
