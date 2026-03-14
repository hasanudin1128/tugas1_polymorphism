<?php

require_once "Notifikasi.php";

class WhatsApp implements notifikasi {

    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp <br>";
    }

}

?>