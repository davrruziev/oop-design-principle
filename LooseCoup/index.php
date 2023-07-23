<?php

class Animal
{
    private $name;

    public function setName($name){
        $this->name=$name;
    }

    public  function getName(){
        return $this->name;
    }
}

class Human
{
    public Animal $animal;

    public function callAnimal(){
        return $this->animal->getName();
    }
}

$sardor = new Human();
$sardor->animal = new Animal();
$sardor->animal->setName("Pidbull");
echo $sardor->callAnimal();


