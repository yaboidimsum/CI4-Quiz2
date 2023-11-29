<?php 
namespace App\Models;
use CodeIgniter\Model;

class MyTicketModel extends Model
{
	protected $table = 'myticket'; 

	protected $primaryKey = 'm_id';

    protected $allowedFields = [
        'f_nama', 'f_sinopsis', 'f_bioskop',
        'f_jadwaltayang', 'f_gambar',
        't_jamtayang', 't_jumlahtiket', 't_tempatduduk','t_code'
];
}