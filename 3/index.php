<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("./main.php");

// Ads object
$ads1 = new Ads("Ads1 title", "Ads1 text");
// Article object
$article1 = new Article("Article title", "Article description", true);
// Vacancy object
$vacancy1 = new Vacancy("Full stack developer", "Full stack developer in an international company");

// Array of all objects
$data = [$ads1, $article1, $vacancy1];

// Loop through all created objects
foreach($data as $element){
    echo $element->getTitle();
    echo $element->getText();
}













?>