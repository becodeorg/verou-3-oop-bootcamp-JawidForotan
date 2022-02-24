<?php
require("./product.php");


$apple = new Product( "Apple", 3, 1.5);
echo "<h3> Apple: </h3>";
echo "<h3> Pieces: $apple->pieces</h3>";
echo "<h3> Price: $apple->price </h3><br/>";
echo $apple->calcTotalPrice();

$banana = new Product("Banana", 6 , 1);
echo "<h3> Banana: </h3>";
echo "<h3> Pieces: $banana->pieces</h3>";
echo "<h3> Price: $banana->price </h3><br/> ";
echo $banana->calcTotalPrice();

$wine = new Product("Wine", 2 , 10);
echo "<h3> Wine: </h3>";
echo "<h3> Pieces: $wine->pieces</h3>";
echo "<h3> Price: $wine->price </h3><br/> ";
echo $wine->calcTotalPrice();










?>