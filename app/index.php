<?php

require __DIR__.'../../vendor/autoload.php';
require __DIR__.'../../config.php';
require __DIR__.'/twilio.php';

$tw = new twilio();
//$tw->senSMS('+244937147414','Olá senhor Neugreth Boa-Ventura Cano! Gostaríamos de lhe informar que foi escolhido para uma viagem de intercâmbio em Portugal,Lisboa. Por favor, matenha os seus contactos ativos.\n EMBAIXADA PORTUGUÊSA - ANGOLA');

$tw->sendWhatsapp();