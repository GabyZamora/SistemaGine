<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EstadosM;

class Estados extends Controller
{

    public function index()
    {
        $estado= new EstadosM();
        $datos['estados']= $estado->orderBy('IdEstado','ASC')->paginate(10);
        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('estados/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('estados/crear', $datos);
    }

    public function guardar()
    {
    
        $estado = new EstadosM();
        $datos=[
            'NombreEs'=> $this->request->getVar('NombreEs'),
        ];

        $estado->insert($datos);
    

        return $this->response->redirect(site_url('estados/listar'));
    }
    
    public function borrar($id=null)
    {
        $estado= new EstadosM();
        $datosEstado=$estado->where('id',$id)->first();
        \unlink($ruta);

        $estado->where('IdEstado',$id)->delete($id);

        return $this->response->redirect(site_url('estados/listar'));
    }

    public function editar($id=null)
    {
        print_r($id);
        $estado= new EstadosM();
        $datos['estado']=$estado->where('IdEstado',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('estados/editar', $datos);
    }

    public function actualizar()
    {
        $estado=new EstadosM();
        $datos=[
            'NombreEs'=> $this->request->getVar('NombreEs'),
        ];
        $id=$this->request->getVar('id');
        $estado->update($id,$datos);
    }
}