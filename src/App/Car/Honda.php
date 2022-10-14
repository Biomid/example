<?php
namespace App\Car;



use App\Trait\Tag as Tag;

class Honda extends Car
{
    use Tag;


    private $year;

   public function __construct($title = '', $type = '', $year){
       parent::__construct($title, $type);
       $this->year = $year;

   }
   public function info(){
        echo "{$this->type}, {$this->tile}, {$this->year} <br>";

   }
}