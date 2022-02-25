<?php

$products = [
    ["name" => "Apple", "pieces" => 3, "price" => 1.5],
    ["name" => "Apple", "pieces" => 10, "price" => 2.5],
    ["name" => "Wine", "pieces" => 2, "price" => 10],
];



$total = 0;
$totalInclTax = 0;
$tax = 0;
$discount = 0;
$totalAmount = 0;
 foreach($products as $product){
     $name = $product["name"];
     $pieces = $product["pieces"];
     $price =  $product["price"];
     $total = $pieces * $price;
     if($name == "Apple" || $name == "Banana"){
        $tax = $total * 0.06;
        $totalInclTax = ($total + $tax) * 0.5;
        $discount = $totalInclTax;    
     }elseif($name == "Wine"){
        $tax = $total * 0.21;
        $totalInclTax = ($total + $tax);  
        $discount = 0;
     }
     echo "<h3> {$name}, Pieces: {$pieces}, Price: {$price} </h3>";
     echo "<h3>Tax: {$tax}, Discount {$discount}</h3>";
     echo "<h1> Total: ".round($totalInclTax,2) ."</h1>";
     echo  $totalAmount += $totalInclTax;
 }






  

 













?>