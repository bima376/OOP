<?php
    //  class
    class shopee{

        // property
        public $cod;        
        public $saldo;
        
        // konstruktor
        public function __construct($paket, $dompet)
        {
            $this->cod = $paket;
            $this->saldo = $dompet;
        }

        // metode set && metode get
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
?>