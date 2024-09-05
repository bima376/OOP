<?php 
    //  class
    class shopee{

        // property
        public $cod;        
        public $saldo;

        // metode set(mengsetting) && metode get(mengambil)
        // metode set= melempar parameter & merubah propertynya dengan kata lain merubah atau mengisi value
        
        public function set_paket($paketcod){
            $this->cod = $paketcod;
        }
        
        public function get_paket(){
           return $this->cod;
        }
        public function set_saldo($pay){
            $this->saldo = $pay;
        }
        
        public function get_saldo(){
           return $this->saldo;
        }
        

    } 

    $kurir = new shopee;
    $kurir->set_paket(' Paket COD, ');
    $kurir->set_saldo(' COD 10K ya');
    echo 'Permisi.... Paket.. ' . $kurir->get_paket() . 'atas nama penguin'. $kurir->get_saldo() ;
?>
