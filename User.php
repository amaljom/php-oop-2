<?php 
    require_once __DIR__ . '/Credito.php';
class User{
    protected $name;
    protected $surname; 
    protected $address;
    protected $SubscriptionStatus; 

    public function __construct($_name, $_surname, $_address, $_sub){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
        $this->SubscriptionStatus = $_sub;
    }
    // * name
    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }
    // * surname
    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function getAddress(){
        return $this->surname;
    }
    // * address
    public function setAddress($_address){
        $this->address = $_address;
    }

    public function getSurname(){
        return $this->address;
    }
    // * sub
    public function setSubscription($_sub){
        $this->SubscriptionStatus = $_sub;
    }

    public function getSubscription(){
        return $this->SubscriptionStatus;
    }
}
$new= new User("ciao", "ciao", "via", true);
var_dump($new);
?>