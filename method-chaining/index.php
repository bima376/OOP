<?php     
    require_once 'kurir.php';    
    require_once 'marketplace.php';    
    require_once 'konsumen.php';  

    // method chaining
    $konsumen = new shopee_lite('Konsumen: Ok, ini uangnya ya', 20);    
    $konsumen->set_paket('terimakasih')->set_saldo(10000);
    // $konsumen->set_saldo('kembaliannya ambil saja');

    echo $konsumen->cod. '<br>'. $konsumen->saldo;
    
?>
