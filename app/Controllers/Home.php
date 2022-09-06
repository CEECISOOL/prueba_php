<?php

namespace App\Controllers;

use App\Models\Usuarios;

class Home extends BaseController
{
	private $usuario;
    public function index()
    {
        return view('login');
    }

    public function login(){
        $emailUsuario= $this->request->getPost('email');
		$password = $this->request->getPost('password');
		if(filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)){
			$email= filter_var($emailUsuario, FILTER_SANITIZE_EMAIL);
			$this->usuario = new Usuarios();
			$resultadoUsuario = $this->usuario->buscarUsuario($email);
		}

		if($resultadoUsuario){
			$datosUsuarioP = $this->usuario->where('password', $password)->first();
			if($datosUsuarioP){
				$data= [
					'email'=>$resultadoUsuario->email,
					'id_user'=>$resultadoUsuario->id_user,
					'type'=>$resultadoUsuario->type,
					'name'=>$resultadoUsuario->name
				];	
				$session = session();
				$session->set($data);
				return redirect()->to(base_url('/comercios'))->with('mensaje','1', $session);
			}else{
				$data=['tipo'=>'danger', 'mensaje'=>'La clave es incorrecta'];
				return view('login',$data);
			}
		}else{
			$data = ['tipo'=> 'danger', 'mensaje'=> 'Usuario incorrecto'];
			return view('login',$data);

		}
    }

	public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}


