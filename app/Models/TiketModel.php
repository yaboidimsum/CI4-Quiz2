<?php
namespace App\Models;
use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = 'tiket';
    protected $primaryKey = 't_id';
    protected $allowedFields = ['t_jamtayang', 't_jumlahtiket', 't_tempatduduk', 't_metodepembayaran', 't_promo', 't_timestamp'];
    
    protected $useTimestamps = false; 
    protected $beforeInsert = ['addTimestamp'];
    protected $beforeUpdate = ['updateTimestamp'];

    protected function addTimestamp(array $data)
    {
        // Set timezone to WIB
        date_default_timezone_set('Asia/Jakarta');
        // Add timestamp to the data before inserting
        $data['t_timestamp'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function updateTimestamp(array $data)
    {
        // Set timezone to WIB
        date_default_timezone_set('Asia/Jakarta');
        // Update timestamp to the data before updating
        $data['t_timestamp'] = date('Y-m-d H:i:s');
        return $data;
    }
}
