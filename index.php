<?php

class abc{
    private $name = 'Ram';

    public function __get($property){
        return 'This property not accessible '. $property;
    }
}

$obj = new abc;
echo $obj->name;

?>
