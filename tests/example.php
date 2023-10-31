<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once 'config.php';

$Jadwaldokter = new \Nsulistiyawan\Bpjs\Antrean\Jadwaldokter($antrol_conf);
var_dump($Jadwaldokter->getJadwal('BED','2023-10-31'));

$Referensi_antrean = new \Nsulistiyawan\Bpjs\Antrean\Referensi_antrean($antrol_conf);
var_dump($Referensi_antrean->referensiPoli());