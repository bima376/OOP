<?php 

    require_once 'kurir.php';    
    require_once 'marketplace.php';    

    $kurir = new shopee ('PAAAAAAAKEEEEETTTTT.... Woooyy ', 10000);
    echo $kurir->get_paket();

    $kurir = new shopee_lite ('konsumen sedang tidur ', 10000);
    echo $kurir->get_paket();
    
    
    
?>
