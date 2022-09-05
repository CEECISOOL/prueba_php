<?php 
namespace App\Models;
	
use CodeIgniter\Model;

class Usuarios extends Model {
    protected $table      = 'users';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_user';
    
    public function buscarUsuario($email){
        $db = db_connect();
        $builder = $db->table($this->table)->where('email', $email);
        $resultado = $builder->get();
        return $resultado->getResult()?$resultado->getResult()[0]: false;
    }
}
