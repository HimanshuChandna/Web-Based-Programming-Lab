<?php

class Vehicle {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Vehicle Details:<br>";
        echo "Brand: {$this->brand}<br>";
        echo "Model: {$this->model}<br>";
        echo "Year: {$this->year}<br>";
    }
}

class Car extends Vehicle {
    public $color;

    public function __construct($brand, $model, $year, $color) {
        parent::__construct($brand, $model, $year);
        $this->color = $color;
    }

    public function displayInfo() {
        echo "Car Details:<br>";
        echo "Brand: {$this->brand}<br>";
        echo "Model: {$this->model}<br>";
        echo "Year: {$this->year}<br>";
        echo "Color: {$this->color}<br>";
    }
}

$vehicle = new Vehicle("Ford", "Mustang", 2021);
$car = new Car("Toyota", "Corolla", 2020, "Red");

echo "Vehicle:<br>";
$vehicle->displayInfo();

echo "<br>Car:<br>";
$car->displayInfo();

?>