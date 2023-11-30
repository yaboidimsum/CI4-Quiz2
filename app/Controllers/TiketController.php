<?php 
namespace App\Controllers;
use App\Models\TiketModel;
use CodeIgniter\Controller;

class TiketController extends Controller
{
    public function ticketForm(){
        $tiketModel = new TiketModel();
        $data['users'] = $tiketModel->orderBy('t_id', 'ASC   ')->findAll();
        return view('ticket', $data);
    }

// insert data
    public function store() {
        $tiketModel = new TiketModel();
        $data = [
            't_jamtayang' => $this->request->getVar('t_jamtayang'),
            't_jumlahtiket'  => $this->request->getVar('t_jumlahtiket'),
            't_tempatduduk'  => $this->request->getVar('t_tempatduduk'),
            't_metodepembayaran'  => $this->request->getVar('t_metodepembayaran'),
            't_promo'  => $this->request->getVar('t_promo'),
            't_timestamp'  => date('Y-m-d H:i:s'),
        ];
        $tiketModel->insert($data);
        return $this->response->redirect(site_url('/confirmation'));
    }

}