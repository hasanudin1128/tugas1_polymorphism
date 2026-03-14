<?php

require_once "BangunDatar.php";

class Lingkaran extends bangundatar {

    public $r;

    public function __construct($r){
        $this->r = $r;
    }

    public function hitungLuas(){
        return 3.14 * $this->r * $this->r;
    }

}

?>