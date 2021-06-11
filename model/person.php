<?php

    /**
     * @param int _idPerson       id de l'objet Person
     * @param string _name          nom de famille de l'objet Person
     * @param string _firstName         prénom de l'objet Person
     * @param int _age       age de l'objet Person
     * @param int _email      email de l'objet Person
     */
    
        class Person{
            private int $_idPerson;
            private string $_name;
            private string $_firstName;
            private int $_age;
            private string $_email;
    
            public function __construct($_idPerson, $_name, $_firstName, $_age, $_email) 
            {
                $this->_idPerson = $_idPerson;
                $this->_name = strtolower($_name);
                $this->_firstName = strtolower($_firstName);
                $this->_age = $_age ;
                $this->_email = $_email;
            }
            public function getID(){
                return $this-> _idPerson;
            }
            public function setID($_idPerson){
                $this-> _idPerson = $_idPerson;
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
            public function getEmail(){
                return $this-> _email;
            }
            public function setEmail($_email){
                $this-> _email = $_email;
            }

            /* Calcul de l'âge de la personne */

            public function birthYear(){
                return 2021-($this->_age);
            }
           
    
        }

?>
