<?php
    class Foo
    {
        public function __construct(){
                echo 'khoi tao foo <br/>';
        }

        public function getMessage(){
            echo 'chay foo';
        }

        public function __destruct(){
            echo 'ket thuc class Foo <br/>';
        }
    }

    class Bar extends Foo
    {
        public function __construct(){
            echo 'khoi tao Bar <br/>';
        }
        public function __destruct(){
            parent::__destruct();
            echo 'class Bar Canncle<br/>';
        }

    }

    $foo =  new Foo();

    $bar = new Bar();

    
?>