<?php

//Create Class
class employeel{
    private $firstName;             // Create properties
    private $lastName;
    private $age;
    private $id;
    private $address;
    private $salary;

// Change from private to public using function
public function getFirstName(){
    return $this->firsName;

}
public function getLastName(){
    return $this->lastName;

}
public function getAge(){
    return $this->age;

}
public function getID(){
    return $this->id;

}

//Function changes the value in the class to the value it takes in the object
public function setFirstName($firstName){
    $this->firstName = $firstName;

}
public function setLastName($lastName){
    $this->lastName = $lastName;

}
public function setAge($age){
    $this->age = $age;

}
public function setID($id){
    $this->id = $id;

}

}
// Create object from the class

$employeel_1 = newemployeel();

//Define properties
$employeel_1->setFirstName = ('Khaled');
$employeel_1->setLastName = ('Nada');
$employeel_1->setAge = (19);
$employeel_1->setID = (120180193);

echo var_dump($employeel_1);



