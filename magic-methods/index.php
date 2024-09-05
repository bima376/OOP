<?php     
    require_once 'kurir.php';    
    require_once 'marketplace.php';    
    require_once 'konsumen.php';  
    
    $konsumen = new shopee_lite('Konsumen: Ok, ini uangnya ya', 20);    
    echo $konsumen;
    
?>
