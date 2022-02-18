<?php

class Car{
    private $color;
    private $year;
    private $model;

    function getColor(){
        return $this -> color;
    }

    function setColor($color){
        $this -> color = $color;
    }

    function getYear(){
        return $this -> year;
    }

    function setYear($year){
        $this -> year = $year;
    }

    function getModel(){
        return $this -> model;
    }

    function setModel($model){
        $this -> model = $model;
    }

}

$car = new Car();
$car -> setColor("white");
$car -> setModel("Focus");
$car -> setYear("2022");
echo $car -> getColor();
echo $car -> getModel();
echo $car -> getYear();


?>