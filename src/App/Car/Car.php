<?php
namespace App\Car;
abstract class Car
{
    protected $tile;
    protected $type;

     protected function __construct($tile,$type){
        $this->tile = $tile;
        $this->type = $type;
     }
}