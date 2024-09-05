<?php 

    require_once 'kurir.php';    
    require_once 'marketplace.php';    

    $kurir = new shopee ('Paket COD ', 10000);
    $kurir->set_saldo(10000);
    
   echo 'Kurir: COD ' .$kurir->get_saldo() . '<br>';
    
    $konsumen = new shopee_lite('Konsumen: Ok, ini uangnya ya', 20);
    echo $konsumen->get_paket();
    
    
?>
