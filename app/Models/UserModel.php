<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'film';

    protected $primaryKey = 'f_id';
    
    protected $allowedFields = ['f_nama', 'f_sinopsis', 'f_bioskop', 'f_jadwaltayang', 'f_gambar'];
}