<?php
include_once 'Animal.php';
include_once 'Edible.php';

/**
 * @method howToEat()
 */
class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
        // TODO: Implement makeSound() method.
    }

    public function howToEar()
    {
        return "could be fried";
        // TODO: Implement howToEar() method.
    }
}