<?php 

    require_once 'kurir.php';    

    $kurir = new shopee ('Paket COD ', 10000);
    $kurir->set_saldo(10000);
    
   echo 'Kurir: COD ' .$kurir->get_saldo() . '<br>';
    
    $konsumen = new shopee_lite('Konsumen: Kemahalan turunin harganya', 20);
    echo $konsumen->get_voucher();
    
    
?>
