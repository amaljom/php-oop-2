<?php 

require_once __DIR__ . '/ProductType.php';
require_once __DIR__ . '/Credito.php';

echo $new->getName().' '. $new->getSurname();

     $subscription=$new->getSubscription();
     
     if($subscription){
        echo ($prodottCompleto->getPrice()-($prodottCompleto->getPrice()*20)/100).''. " hai ricevuto uno sconto!";
     }
     else{
        echo $prodottCompleto->getPrice();
     }

     
?>