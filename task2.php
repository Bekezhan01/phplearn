<?php

class Animal {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

class Dog extends Animal {
    private $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function getBreed() {
        return $this->breed;
    }

    public function bark() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function __construct($name, $age) {
        parent::__construct($name, $age);
    }
    public function bark() {
        return "Myau! Myau!";
    }
}

// Пример использования
$dog = new Dog("Tuzik", 3, "Haski");
$cat = new Cat("Cat", 5);
echo "Name: " . $dog->getName() . "\n";
echo "Age: " . $dog->getAge() . "\n";
echo "Breed: " . $dog->getBreed() . "\n";
echo "Dog says: " . $dog->bark() . "\n\n";

echo "Name: " . $cat->getName() . "\n";
echo "Age: " . $cat->getAge() . "\n";
echo "Cat says: " . $cat->bark() . "\n";