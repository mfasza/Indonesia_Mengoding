<?php

require_once 'App/init.php';

$elang1 = new Elang();
$harimau1 = new Harimau();

$harimau1->getInfoHewan();
echo '<hr>';
$elang1->getInfoHewan();

echo '<hr>';

$elang1->serang($harimau1);
$harimau1->diserang();
$harimau1->getInfoHewan();

echo '<hr>';

$harimau1->serang($elang1);
$elang1->diserang();
$elang1->getInfoHewan();