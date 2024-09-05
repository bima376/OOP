<?php 

require_once 'kurir.php';

// inheritance || pewarisan
class shopee_lite extends shopee {
    public function get_voucher(){
        echo 'Konsumen: Ok saya terima';
    }
    // overriding=mengubah value method dari aslinya. dengan menggunakan method yang sama tapi isi fungsinya berbeda 
    public function get_paket(){
        return 'Sementara itu ' . $this->cod;
    }
    // panggil fungsi
    public function panggil_fungsi(){
        // self= memanggil fungsi yang ada di classnya sendiri
        // alternatif bisa menggunakan $this->
       echo self::get_paket();
    //    echo $this->get_paket();
    }
}
?>