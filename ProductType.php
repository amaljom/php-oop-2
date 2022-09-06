<?php 
    require_once __DIR__ .'/Product.php';
     
    class ProductType extends Products{
        protected $type;
        protected $species;

        public function __construct($_name, $_price, $_type,  $_species){
            parent::__construct($_name, $_price);
            $this->type = $_type;
            $this->species = $_species;
        }
    }

    $prodottCompleto= new ProductType("crocchette", 12, "cibo", "gatti");
    var_dump($prodottCompleto);