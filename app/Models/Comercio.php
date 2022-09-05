<?php 
namespace App\Models;

use CodeIgniter\Model;

class Comercio extends Model{
    protected $table      = 'comercios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_comercio';
    protected $allowedFields= ['cuit', 'razon_social', 'user_id', 'id_comercio'];
}
