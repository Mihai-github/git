<?php

class Person{


    public $name;
    public $age;

    public  function getAge(){
        echo $this->age;
    }
    public function setAge(int $age){
        $this->age = $age;
    }

    public function getName(){
        echo $this->name;
    }
    public function setName(string $name){
         $this->name = $name;
    }




}

