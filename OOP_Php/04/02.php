<?php
    class Person
    {
        protected $name;
    }

    class Male extends Person
    {
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
    }

    $person = new Person();
    echo $person->name;
    
    $male = new Male();
    $male->setName('anh');
    $male->getName();
?>