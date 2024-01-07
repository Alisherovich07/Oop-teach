<?php

// Inharitance
// extends
// parent - child
// final

class Car {
    // property, attribute
    public $model;
    public $year;


    // methods
    function drive(){
        return 'driving';
    }

    public function __construct($model, $year)
    {
      $this->model = $model;
      $this->year = $year;
    }

    /*  function getfuel(){
        return 'fueling';
     }
 */
     function setModel($model){
        $this->model = $model;
     }
 }

 class ElectricCar extends Car {

 }

 class RaceCar extends Car {
   public function drive(){
      return 'fast driving';
   }
 }

 $tesla = new RaceCar('TESLA', 2023);

 var_dump($tesla->drive());
 class PublicCar extends Car {

 }





/* $bmw = new Car('Bmw', '2019'); */

// var_dump($bmw->drive());
 
 /* functionlardi ekranga ciqarish har hil metodlar bn */


// $bmw->setModel('BMW-m5-f90');

// echo  $bmw->model;

// $bmw->model = 'BMW';
// $bmw->year = '2019';

 // echo $bmw->drive();

// echo $bmw->model;
// echo $bmw->year;

// var_dump($audi);
?>