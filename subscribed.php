<?php 
    protected $SubscriptionStatus;

    public function setSubscription($_sub){
        $this->SubscriptionStatus = $_sub;
    }

    public function getSubscription(){
        return $this->SubscriptionStatus;
    }

?>