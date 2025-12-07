<?php

// Base class
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Method to be overridden
    public function makeSound() {
        echo $this->name . " makes a sound.\n";
    }
}

// Subclass: Dog
class Dog extends Animal {
    public function makeSound() {
        echo $this->name . " says: Woof Woof!\n";
    }
}

// Subclass: Cat
class Cat extends Animal {
    public function makeSound() {
        echo $this->name . " says: Meow!\n";
    }
}

// Subclass: Cow
class Cow extends Animal {
    public function makeSound() {
        echo $this->name . " says: Moo!\n";
    }
}

// Subclass: Duck
class Duck extends Animal {
    public function makeSound() {
        echo $this->name . " says: Quack!\n";
    }
}

// Polymorphism in action
$animals = [
    new Dog("Buddy"),
    new Cat("Whiskers"),
    new Cow("Bessie"),
    new Duck("Daffy")
];

foreach ($animals as $animal) {
    $animal->makeSound();  // Each calls its own overridden method
}

?>
