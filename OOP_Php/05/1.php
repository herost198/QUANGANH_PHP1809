<?php
    class Hinh
    {
        protected function DienTich(){

        }
    }

    class HinhVuong extends Hinh
    {
        private $canh;

        public function setCanh($canh){
            $this->canh = $canh;
        }

        public function getCanh(){
            return $this->canh;
        }
        
        public function DienTich(){
            return pow($this->canh,2);
        }

    }

    class HinhTron extends Hinh
    {
        private $R;

        public function setCanh($R){
            $this->R = $R;
        }

        public function getCanh(){
            return $this->R;
        }
        
        public function DienTich(){
            return M_PI*pow($this->R,2);
        }
        
    }

    $hv = new HinhVuong();
    $hv->setCanh(3);
    echo $hv->DienTich();

    echo '<br/>';

    $ht = new HinhTron();
    $ht->setCanh(3);
    echo $ht->DienTich();
?>