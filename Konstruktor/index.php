<?php 

    // require_once atau include_once
    require_once 'kurir.php';
    // include_once 'kurir.php';

    $kurir = new shopee ('Paket COD ', 10000);
    $konsumen = new shopee ('Turunin harganya jadi ', 5000);
    
    echo 'Kurir: ' . $kurir->get_paket() . $kurir->get_saldo() .'<br>';
    echo 'Emak: ' . $konsumen->get_paket() . $konsumen->get_saldo();
?>
