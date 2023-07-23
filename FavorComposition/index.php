<?php


class Coffee
{
    public $cost=1000;


    public $ingredient=[];
    public function AddIngredient(Ingredient $ingredient){

        $this->cost +=$ingredient->cost();
        $this->ingredient[]=$ingredient->name();
    }

    public function pourCoffee(){
        echo "Pouring coffee";
    }
}

interface Ingredient
{
    public function cost();
    public function name();

}

class Milk implements Ingredient
{
    public function cost()
    {
        return 300;
    }

    public function name()
    {
        return "Milk";
    }
}

class Tea implements Ingredient
{
    public function cost()
    {
        return 200;
    }

    public function name()
    {
        return "Tea";
    }
}

class Sugar implements Ingredient
{
    public function cost()
    {
        return 100;
    }

    public function name()
    {
        return "Sugar";
    }
}

$coffee = new Coffee();
$coffee->AddIngredient(new Milk());
$coffee->AddIngredient(new Tea());
$coffee->AddIngredient(new Milk());

var_dump($coffee->ingredient);