<?php

require_once "Email.php";
require_once "SMS.php";
require_once "WhatsApp.php";

$email = new email();
$sms = new sms();
$wa = new whatsApp();

$email->kirim();
$sms->kirim();
$wa->kirim();

?>