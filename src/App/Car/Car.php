<?php
namespace App\Car;

abstract class Car
{
    protected $title;
    protected $type;

     protected function __construct($title,$type){
        $this->title = $title;
        $this->type = $type;
     }
}