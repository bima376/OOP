<?php
    class shopee{
        public $cod;
        public $saldo;

        public function __construct($paket, $dana)
        {
            $this->cod = $paket;
            $this->saldo = $dana;
        }

        public function set_paket($paket){
            $this->cod = $paket;
            // method chain
            return $this;
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
        // to sring magic methods
        // buka di dokumentasi PHP magic method
        // magic method= fungsi-fungsi yang otomatis terpanggil katika melakukan aksi-aksi tertentu.
        public function __toString(){
          echo 'Shopee COD Shopee COD bayar langsung di tempat';
        }//muncul Fatal error
    }

    
?>