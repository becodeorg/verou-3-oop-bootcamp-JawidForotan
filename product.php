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
            
        }elseif($this->name == "Wine"){
             echo "<h3>Alcohol tax is 21 %</h3><br/>";
             $tax = $totalExcTax * 0.21;
        }
        $totalIncTax = $totalExcTax + $tax;
        return "Tax: <b>{$tax} € , Total amount inclusive tax {$totalIncTax} </b>";
    }

   
   








}











?>