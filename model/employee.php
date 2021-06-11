<?php

/** Class Employee héritée de Person 
 * @param int _salary            montant du salaire
*/

class Employee extends Person{
    private int $_salary;

    public function __construct($_salary){
        $this->_salary = $_salary;
    }
    public function getSalary(){
        return $this-> _salary;
    }
    public function setSalary(){
        $this-> _salary = $_salary;
    }
}
?>