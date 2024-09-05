<?php 
    // self & parent= cara memanggil sebuah fungsi dari mana yang ingin kita ambil. 
    // fungsi dari parentnya atau fungsi dia sendiri
    require_once 'kurir.php';    
    require_once 'marketplace.php';    
    
    $konsumen = new shopee_lite('Konsumen: Ok, ini uangnya ya', 20);
    return $konsumen->panggil_fungsi();
    
    
?>
