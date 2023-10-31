<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once 'config.php';
$Referensi = new \Nsulistiyawan\Bpjs\VClaim\Referensi($vclaim_conf);
// var_dump($Referensi->dokterDpjp('2', '2021-12-09', 'INT'));

$Referensi_antrean = new \Nsulistiyawan\Bpjs\Antrean\Referensi_antrean($antrol_conf);
var_dump($Referensi_antrean->referensiPoli());
