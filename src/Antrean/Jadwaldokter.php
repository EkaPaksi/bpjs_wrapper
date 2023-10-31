<?php
namespace Nsulistiyawan\Bpjs\Antrean;

use Nsulistiyawan\Bpjs\BpjsService;

class Jadwaldokter extends BpjsService
{
    public function getJadwal($kd_poli = null, $tanggal = null)
    {
        $response = $this->get('jadwaldokter/kodepoli/'.$kd_poli.'/tanggal'.'/'.$tanggal);
        return $response;
    }
    public function update($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('jadwaldokter/updatejadwaldokter', $data, $header);
        return $response;
    }
}