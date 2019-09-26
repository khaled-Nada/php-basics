<?php

class Person{
    public $firstName;
    public $lastName;
    public $age;
    protected $id;
    public $address;

function personInfo(){
    $result = " ";
    $result .= $this->firstName . ',' .$this->lastName;
    $result .= $this->id . ',' .$this->age;
}

}

$std = new person();
echo '==========================';
echo '<pre>';
$std->firstName = 'Khaled';
$std->lastName = 'Nada';
$std->age = 19;
$std->address = 'Gaza';
echo var_dump($std);
echo '</pre>';
echo '==========================';

echo $std->personInfo();

?>