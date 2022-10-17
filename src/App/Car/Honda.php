<?php
namespace App\Car;

use App\Trait\Tag as Tag;
use JetBrains\PhpStorm\Pure;

class Honda extends Car
{
    use Tag;
    protected $title;
    protected $type;
    private $year;

    #[Pure] public function __construct($title, $type, $year){
       parent::__construct($title, $type);
       $this->year = $year;

   }
   public function info(){
        echo "{$this->type}, {$this->title}, {$this->year} <br>";

   }
}