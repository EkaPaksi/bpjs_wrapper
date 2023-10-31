<?php
namespace Nsulistiyawan\Bpjs\Antrean;

use Nsulistiyawan\Bpjs\BpjsService;

class Referensi_antrean extends BpjsService
{
    public function referensiPoli()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/poli');
        
        return $response;
    }
    public function referensiDokter()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/dokter');
        
        return json_decode($response,true);
    }
    public function referensiPoliFinger()
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/poli/fp');
        
        return json_decode($response,true);
    }
   
}