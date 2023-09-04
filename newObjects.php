<?php
require_once __DIR__ . '/classes.php';

$dogs = new Categories('Dogs');
$cats = new Categories('Cats');


$crocchette = new Food('Dogs', 'Crocchette', 13.90, 'https://i.ebayimg.com/images/g/hsoAAOSw~IBiTBdR/s-l1600.jpg', 'Food');
$scatolette = new Food('Cats', 'Crocchette', 9.90, 'https://www.farmacosmo.it/165195-medium_default/fresh-pollo-cibo-umido-cani-32-scatolette-100-g-111469.jpg', 'Food');
$gel = new Food('Dogs', 'Crocchette', 23.90, 'https://d21mug5vzt7ic2.cloudfront.net/tigros/70298/resize/70298_main.jpg', 'Food');


$cuccia = new Essentials('Dogs', 'Cuccia', 33.90, 'https://m.media-amazon.com/images/I/61N5P4xGzlL._AC_UF894,1000_QL80_.jpg', 'Essentials');
$tiraGraffi = new Essentials('Dogs', 'Tiragraffi', 99.90, 'https://m.media-amazon.com/images/I/61AmecJCuqL._AC_UF894,1000_QL80_.jpg', 'Essentials');
$lettiera = new Essentials('Dogs', 'Lettiera', 19.90, 'https://m.media-amazon.com/images/I/61dZzmT3PzL._AC_UF894,1000_QL80_.jpg', 'Essentials');



$palla = new Games('Dogs', 'Palla pelosa', 3.90, 'https://m.media-amazon.com/images/I/61MfnoRDFmL.jpg', 'Games');
$piuma = new Games('Cats', 'Piuma', 2.90, 'https://m.media-amazon.com/images/I/61Zk4T9JpUL.jpg', 'Games');
$elastici = new Games('Dogs', 'Elastici', 1.90, 'https://m.media-amazon.com/images/I/41KLm+c0ITL._AC_UF894,1000_QL80_.jpg', 'Games');
