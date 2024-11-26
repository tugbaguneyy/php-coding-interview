<?php
//Implement a class named BasketBall with an attribute named baskets and initialize it to 0 as the starting position and a method score. 
//When the score method is invoked, the baskets must increase by 1

class BasketBall{

    //before php 8.0

    // private $baskets;

    // public function __construct() {
    //     $this->baskets = 0; // Başlangıç değeri 0
    // }

    //Constructor Property Promotion (with php 8.0)

    public function __construct(private int $baskets = 0) {}

    public function score(){
        $this->baskets+=1;
    }

    public function getBaskets()  {
        return $this->baskets;
    }

}

$object=new BasketBall();
$object->score();
echo "Baskets:" . $object->getBaskets();
