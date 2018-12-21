<?php
    class Person
    {
        public $name;

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

     $person =  new Person();
     
     $person->name = 'Nguyen quang anh';
    
     echo $person->getName();
?>