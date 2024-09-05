<?php 

    //  class
    class indomaret{

        // property
        public $jajanan = 'snack';
        public $kebutuhan = 'top-up';

    } 

    $orang = new indomaret;
    echo 'di indomaret, aku jajan.. ' . $orang->jajanan . ' sama ' . $orang->kebutuhan; // mengakses property di ikuti namanya tanpa tanda panah tanpa dolar $
    
?>
