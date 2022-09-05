<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cbu;


class Cbus extends Controller{

    public function indexCbu($id=null){  //funcion para que me muestre todos los cbu

        $cbu= new Cbu();        
        $datos['cbus']= $cbu->where('comercios_id', $id)
        ->findAll();;
        $datos['cabecera']= view('template/cabecera');        
        $datos['idComercio']= $id;
        $datos['footer']= view('template/footer');
        
        return view('cbu/listarCbu', $datos);
    }

   public function altaCbu($id){

        $datos['cabecera']= view('template/cabecera');
        $datos['footer']= view('template/footer');
        $datos['comercios_id']= $id;

        return view('cbu/altaCbu', $datos);
    }

    public function guardarCbu($id=null){

        $cbuNew= new Cbu();
        $cbu= $this->request->getVar('cbu');
        $alias= $this->request->getVar('alias');
        $comercios_id= $id;

        $data= [
            'alias'=>$alias,
            'cbu'=>$cbu,
            'comercios_id'=>$comercios_id
        ];
        $cbuNew->insert($data);

        return $this->response->redirect(site_url('cbu/'.$comercios_id));
    }

    public function editarCbu($id=null){
        $cbu= new Cbu();

        $datos['cbu']= $cbu->where('id_cbu', $id)->first();
        $datos['cabecera']= view('template/cabecera');
        $datos['footer']= view('template/footer');

        return view('cbu/modificacionCbu', $datos);
        
    }

    public function actualizarCbu($id=null){

        $cbuN= new Cbu();
        $cbu= $this->request->getPost('cbu');
        $alias= $this->request->getPost('alias');
        $datos= [
            'cbu'=>$cbu,
            'alias'=>$alias
        ];

        $cbuN->update($id, $datos);

        return $this->response->redirect(site_url('/comercios'));

    } 
    public function borrarCbu($id=null){
        $cbu= new Cbu();


        $cbu->delete([$id]);

        return $this->response->redirect(site_url('/comercios'));
    } 
}
