<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ServiciosM;

class Servicios extends Controller
{

    public function index()
    {
        $servicio= new ServiciosM();
        $datos['servicios']= $servicio->orderBy('IdServicio','ASC')->paginate(10);
        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('servicios/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('servicios/crear', $datos);
    }

    public function guardar()
    {
    
        $servicio = new ServiciosM();
        $datos=[
            'NombreSer'=> $this->request->getVar('NombreSer'),
            'PrecioSer'=>$this->request->getVar('PrecioSer')
        ];

        $servicio->insert($datos);
    

        return $this->response->redirect(site_url('servicios/listar'));
    }
    
    public function borrar($id=null)
    {
        $servicio= new ServiciosM();
        $datosservicio=$servicio->where('IdServicio',$id)->first();
        \unlink($ruta);

        $servicio->where('IdServicio',$id)->delete($id);

        return $this->response->redirect(site_url('servicios/listar'));
    }

    public function editar($id=null)
    {
        print_r($id);
        $servicio= new ServiciosM();
        $datos['servicio']=$servicio->where('IdServicio',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('servicios/editar', $datos);
    }

    public function actualizar()
    {
        $servicio=new ServiciosM();
        $datos=[
            'NombreSer'=> $this->request->getVar('NombreSer'),
        ];
        $id=$this->request->getVar('IdServicio');
        $servicio->update($id,$datos);
    }
}