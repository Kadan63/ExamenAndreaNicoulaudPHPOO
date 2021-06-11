<?php

    /**
     * @param string _name          nom de famille de l'objet Person
     * @param string _firstName         prénom de l'objet Person
     * @param int _age       age de l'objet Person
     */
    
        class Person{
            private string $_name;
            private string $_firstName;
            private int $_age;
    
            public function __construct($_name, $_firstName, $_age) 
            {
                $this->_name = strtolower($_name);
                $this->_firstName = strtolower($_firstName);
                $this->_age = $_age ;
            }
            public function getName(){
                return $this-> _name;
            }
            public function setName($_name){
                $this-> _name = $_name;
            }
            public function getFirstName(){
                return $this-> _firstName;
            }
            public function setFirstName($_firstName){
                $this-> _firstName = $_firstName;
            }
            public function getAge(){
                return $this-> _age;
            }
            public function setAge($_age){
                $this-> _age = $_age;
            }

            /* Calcul de l'âge de la personne */

            public function birthYear(){
                return 2021-($this->_age);
            }
           
    
        }
?>
