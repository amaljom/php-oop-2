<?php
    require_once __DIR__ . '/User.php';
class Carta{
    protected $number;
    protected $cvv;
    protected $expiration;


    public function __construct($_number, $_cvv, $_expiration){
        $this->number=$_number;
        $this->cvv=$_cvv;
        $this->expiration=$_expiration;
    }
    // * numero
    public function setNumber($_number){
        $this->number = $_number;
    }

    public function Getnumber(){
        return $this->number;
    }

    // * cvv
    public function setCvv($_cvv){
        $this->cvv = $_cvv;
    }

    public function getCvv(){
        return $this->cvv;
    }

    // * data
    public function setExpiration($_expiration){
        $this->expiration = $_expiration;
    }

    public function getExpiration(){
        return $this->expiration;
    }
}
$cardOne= new carta(1215485421, 782, 2024);
var_dump($cardOne, $new);