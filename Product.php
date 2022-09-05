
<?php 
class Products{
    protected $ProductName;
    protected $price;

    public function __construct($_name, $_price){
        $this->ProductName = $_name;
        $this->price = $_price;
    }

    // * name
    public function setProdictname($_name){
        $this->ProductName = $_name;
    }

    public function getProdictname(){
        return $this->ProductName;
    }
    // * price
    public function setPrice($_price){
        $this->price = $_price;
    }

    public function getPrice(){
        return $this->name;
    }
}
?>
