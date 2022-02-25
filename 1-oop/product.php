<?php

Class Product
{
    public string $name;
    public int $pieces;
    public float $price;

    public function __construct($nameP, $piecesP, $priceP)
    {
        $this->name = $nameP;
        $this->pieces = $piecesP;
        $this->price = $priceP;
        
    }
    
    public function calcTotalPrice()
    {
        $totalExcTax = $this->pieces * $this->price;

        if($this->name == "Banana" || $this->name == "Apple"){
            echo "<h3>Fruit's tax is 6 %</h3><br/>";
            $tax = $totalExcTax * 0.06;
            echo "<h3>You get 50% discount on fruits</h3>"; 
            $discount = $totalExcTax * 0.5; 
            $totalIncTax = $totalExcTax + $tax - $discount;
            
        }elseif($this->name == "Wine"){
             echo "<h3>Alcohol tax is 21 %</h3><br/>";
             echo "<h3>No discount</h3>";
             $tax = $totalExcTax * 0.21;
             $discount = 0;
             $totalIncTax = $totalExcTax + $tax - $discount;
        }
        return "<h3>Tax: <b>{$tax} € </h3> , discount: {$discount} € , total amount inclusive tax {$totalIncTax} € </b><hr/>";
    }


    


   
   








}











?>