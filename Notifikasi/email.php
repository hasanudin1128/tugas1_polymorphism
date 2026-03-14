<?php

require_once "Notifikasi.php";

class Email implements notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui Email <br>";
    }

}

?>