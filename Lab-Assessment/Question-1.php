<?php

// Parent class: Animal
class Animal {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function sound() {
        echo "The animal makes a sound.";
    }

    public function __destruct() {
        echo "Animal object destroyed.";
    }
}

// Child class: Dog
class Dog extends Animal {
    public $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function sound() {
        echo "The dog barks.";
    }

    public function displayInfo() {
        echo "Name: ". $this->name. "<br>";
        echo "Age: ". $this->age. "<br>";
        echo "Breed: ". $this->breed. "<br>";
    }
}

// Create an object of the Dog class
$dog = new Dog("Fido", 3, "Golden Retriever");

// Call the displayInfo method
$dog->displayInfo();

// Call the sound method
$dog->sound();

// Destroy the object
unset($dog);
