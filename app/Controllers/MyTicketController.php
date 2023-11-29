<?php 
namespace App\Controllers;
use App\Models\MyTicketModel;
use CodeIgniter\Controller;

class MyTicketController extends Controller
{
    public function ticketList()
    {
        $myTicketModel = new MyTicketModel();
        $data['users'] = $myTicketModel
            ->join('film', 'film.f_id = myticket.f_id')
            ->join('tiket', 'tiket.t_id = myticket.t_id')
            ->findAll(); 

        return view('ticket_list', $data);
    }

    public function myticket()
    {
        $myTicketModel = new MyTicketModel();
        $data['users'] = $myTicketModel
            ->join('film', 'film.f_id = myticket.f_id')
            ->join('tiket', 'tiket.t_id = myticket.t_id')
            ->findAll(); 

        return view('myticket', $data);
    }
}