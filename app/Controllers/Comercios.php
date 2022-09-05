<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Comercio;
use App\Models\Usuarios;


class Comercios extends Controller{

    public function index(){

        $comercio= new Comercio();        
        $datos['comercios']= $comercio->findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['footer']= view('template/footer');
        

        return view('comercios/listarComercios', $datos);
    }

    public function alta(){

        $datos['cabecera']= view('template/cabecera');
        $datos['footer']= view('template/footer');

        return view('comercios/altaComercio', $datos);
    }

    public function guardar($id){

        $comercio= new Comercio();
        $razon_social= $this->request->getVar('razon_social');
        $cuit= $this->request->getVar('cuit');
        $id_comercio= rand(5, 15);

        $data= [
            'cuit'=>$cuit,
            'razon_social'=>$razon_social,
            'user_id'=>$id
            
        ];
        $comercio->insert($data);
        
        return $this->response->redirect(site_url('/comercios'));
    }

    public function borrar($id=null){
        $comercio= new Comercio();


        $comercio->delete([$id]);

        return $this->response->redirect(site_url('/comercios'));
    }

    public function editar($id=null){
        $comercio= new Comercio();

        $datos['comercio']= $comercio->where('id_comercio', $id)->first();
        $datos['cabecera']= view('template/cabecera');
        $datos['footer']= view('template/footer');

        return view('comercios/modificacionComercio', $datos);
        
    }

    public function actualizar($id_comercio=null){

        $comercio= new Comercio();
        $razon_social= $this->request->getPost('razon_social');
        $cuit= $this->request->getPost('cuit');
        $datos= [
            'cuit'=>$cuit,
            'razon_social'=>$razon_social
        ];

        $comercio->update($id_comercio, $datos);

        return $this->response->redirect(site_url('/comercios'));

    }
}