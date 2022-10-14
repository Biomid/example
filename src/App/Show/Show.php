<?php
namespace App\Show;
class Show
{
    public function path(){
        return __CLASS__.':'.__FILE__;
    }
    public function test($str){
        echo $str.$this->showMagic();
    }
    private function showMagic(){
        echo " All work";
    }

}