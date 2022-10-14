<?php
namespace App;

require_once __DIR__ . '/vendor/autoload.php';
use App\Show\Show;
use App\Car\Honda;

$test = new Show();
echo $test->path()."<br>";
echo "<br>".$test->test(" Norm");

$test2 = new Honda("Honda","Cupe",1999);
$test2->info();
$test2->EngineOn();