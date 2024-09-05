<?php 

    //  class
    class indomaret{

        // property
        public $jajanan = 'snack';
        public $kebutuhan = 'top-up';
        public $saldo = ' 10K';

        // metode
        public function dompet(){
            echo 'cukuplah beli '. $this->jajanan; //$this=mengambil property dalam dirinya sendiri
        }

        public function ingin(){
            echo ' tapi gk cukup buat '. $this->kebutuhan; 
        }
        public function uang(){
            return $this->saldo;
        }

    } 

    $orang = new indomaret;
    $orang->dompet();
    $orang->ingin();
    echo $orang->uang();
    
?>
