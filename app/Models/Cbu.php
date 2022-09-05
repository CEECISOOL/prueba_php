<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cbu extends Model{
    protected $table      = 'cbus';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id_cbu';
     protected $allowedFields= ['alias', 'cbu', 'comercios_id'];
}