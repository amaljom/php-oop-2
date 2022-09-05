<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
class Procudcts{
    protected $name;
    protected $price;
    protected $type; 

    public function __construct($_name, $_price, $_type){
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
    }
}
?>


</body>
</html>