<?php

// Class and Object
// A class is a blueprint for creating objects. An object is an instance of a class.
class Car {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}

// Creating objects of the Car class
$car1 = new Car("Toyota", "Corolla");
$car2 = new Car("Honda", "Civic");

// Encapsulation
// Encapsulation is bundling data and methods that operate on the data into a single unit.
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient funds\n";
        }
    }
}

// Creating an object of the BankAccount class
$acc = new BankAccount();
$acc->deposit(100);
$acc->withdraw(50);

// Access Modifiers
// Access modifiers control the visibility of classes, methods, and attributes.
class Example {
    public $public_var = 10;
    protected $_protected_var = 20;
    private $__private_var = 30;
}

$obj = new Example();
echo $obj->public_var . "\n";          // Accessible
echo $obj->_protected_var . "\n";     // Accessible (but conventionally considered private)
//echo $obj->__private_var . "\n";    // Not accessible (Fatal error)

// Constructor
// A constructor is a special method in a class that gets called automatically when an object is created.
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// Creating an object of the Person class using the constructor
$person = new Person("Alice", 30);

// Destructor
// A destructor is a special method in a class that gets called automatically when an object is destroyed.
class MyClass {
    public function __construct() {
        echo "Constructor called\n";
    }

    public function __destruct() {
        echo "Destructor called\n";
    }
}

$obj = new MyClass();
unset($obj);  // Destructor called when object is unset or goes out of scope

?>
