<?php
    class Personnel{
        private $name = 'Vu Van A';
        private $age = 32;

        public function getPersonnel(){
            return $this->name . '-' . $this->age;
        }

        public function setAge($age){
            return $this->age = $age;
        }

    }

    $anh = new Personnel();

    $anh->setAge(30);
    
    echo $anh->getPersonnel();
?>