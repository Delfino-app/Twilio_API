<?php

require __DIR__.'../../vendor/autoload.php';
require __DIR__.'../../config.php';
require __DIR__.'/twilio.php';

$tw = new twilio();
$tw->senSMS(YOUR_PHONE_NUMBER,'Hello mister Delfino! I hope to see you later.');
