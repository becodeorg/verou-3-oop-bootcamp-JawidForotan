<?php

$products = [
    ["name" => "Apple", "pieces" => 3, "price" => 1.5],
    ["name" => "Banana", "pieces" => 6, "price" => 1],
    ["name" => "Wine", "pieces" => 2, "price" => 10],
];

function getTotal($products)
{
    $total = 0;
    foreach($products as $product){
       $name = $product["name"];
       $price = $product["price"];
       $totalPrice = $product["price"] * $product["pieces"];
       echo $name.", price: ".$price ."€, total price: ". $totalPrice."€"."<br/>";
       $total += (float)$totalPrice;  
    }
    return "Total amount to pay: ".$total . "€";
}

echo getTotal($products);
 
 


  

 













?>