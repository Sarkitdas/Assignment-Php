<?php

class Employee {

    private $name;
    private $salary;

  
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary); 
    }

   
    public function getName() {
        return $this->name;
    }

   
    public function getSalary() {
        return $this->salary;
    }


    public function setSalary($amount) {
        if ($amount < 0) {
            echo "Salary cannot be negative.\n";
            return;
        }
        $this->salary = $amount;
    }
}

$emp1 = new Employee("John Doe", 50000);

echo "Name: " . $emp1->getName() . "\n";
echo "Salary: $" . $emp1->getSalary() . "\n";

$emp1->setSalary(60000);

echo "Updated Salary: $" . $emp1->getSalary() . "\n";

?>
