<?php

require_once "Notifikasi.php";

class SMS implements notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui SMS <br>";
    }

}

?>