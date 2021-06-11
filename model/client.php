<?php


/** Class Client héritée de Person 
 * @param string _entrepriseName            nom de l'entreprise
*/

class Client extends Person{
    private string $_entrepriseName;

    public function __construct($_entrepriseName){

        $this->_entrepriseName = $_entrepriseName;
    }
    public function getEntrepriseName(){
        return $this-> _entrepriseName;
    }
    public function setEntrepriseName(){
        $this-> _entrepriseName = $_entrepriseName;
    }
}
?>