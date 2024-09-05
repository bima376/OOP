<?php
    class shopee{
        // public=sifatnya bisa diakses dari mana saja

        public $cod;
        public $saldo;

        
        public function __construct($paket, $dana)
        {
            $this->cod = $paket;
            $this->saldo = $dana;
        }

        public function set_paket($paket){
            $this->cod = $paket;
        }
        public function get_paket(){
           return  $this->cod;
        }
        public function set_saldo($dana){
            $this->saldo = $dana;
        }
        public function get_saldo(){
           return  $this->saldo;
        }
    }

    
?>