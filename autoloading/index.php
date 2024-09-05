<?php     
    require_once 'kurir.php';    
    require_once 'marketplace.php';    
    require_once 'konsumen.php';  

    //autoload class
    spl_autoload_register(function($class_name){
        include $class_name . '.php';
    });
    $konsumen = new shopee_lite('Konsumen: Ok, ini uangnya ya', 20);    
    echo $konsumen->cod;
?>
