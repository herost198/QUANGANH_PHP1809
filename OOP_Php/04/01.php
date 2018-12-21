<?php
        class Person
        {
            private $name;
            
            private function run(){
                return 'day la ham Run';
            }

            function setName($name){
                $this->name = $name;
            }

            function getName(){
                return $this->name;
            }

            function getRunMethod(){
                return $this->run();
            }
        }
        // khi khai bao bang Private thif khong co the truy xuat bien do
        $person = new Person();

        // $person->name;


        $person->setName('nguyen quang anh');
        echo self::getName;
        echo $person->getRunMethod();
?>