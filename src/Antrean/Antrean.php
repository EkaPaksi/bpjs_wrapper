<?php
namespace Nsulistiyawan\Bpjs\Antrean;

use Nsulistiyawan\Bpjs\BpjsService;
class Antrean extends BpjsService
{
    public function getListTask($data = [])
    {
        $response = $this->post('antrean/getlisttask',$data);

        return $response;
    }
    public function addAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/add', $data, $header);
        return $response;
    }
    public function addAntreanFarmasi($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/farmasi/add', $data, $header);
        return $response;
    }
    public function cancelAntrean($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/batal', $data, $header);
        return $response;
    }
    public function updateWaktu($data = [])
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->post('antrean/updatewaktu', $data, $header);
        return $response;
    }
    public function dashboardMonthly($month = null, $year = null,$time = null)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('dashboard/waktutunggu/bulan/'.$month.'/tahun/'.$year.'/waktu/'.$time);

        return $response;
    }

    public function dashboardDaily($date = null,$time = null)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('dashboard/waktutunggu/tanggal/'.$date.'/waktu/'.$time);

        return $response;
    }
    public function fingerValidation($param = null,$keyword = null)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('ref/pasien/fp/identitas/'.$param.'/noidentitas/'.$keyword);

        return $response;
    }

    public function AntreanPerTanggal($date = null)
    {
        $header = [
            'Content-Type'=>'application/json'
        ];
        $response = $this->get('antrean/pendaftaran/tanggal/'.$date);

        return $response;
    }
}