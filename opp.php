<?php

class car{

    public $name="no name", $color,$model;

    function getdetail(){

       echo $this->name;
       echo "<br>";
       echo $this->color;
       echo "<br>";
       echo $this->model;
         
    }
}
$group1=new car();
$group1->name= "hammer";
$group1->color="red";
$group1->model="2022";
$group2=new car();
$group2->name="corolla";

$group2->color="black";
$group2->model="2021";
$group1->getdetail();
echo "<br>";
$group2->getdetail();
?>

