<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PagosM;

class Pagos extends Controller
{

    public function index()
    {
        $pago= new PagosM();
        $datos['pagos']= $pago->orderBy('IdPago','ASC')->paginate(10);
        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('pagos/listar', $datos);
    }

    public function crear()
    {
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('pagos/crear', $datos);
    }

    public function guardar()
    {
    
        $pago = new PagosM();
        $datos=[
            'NombrePag'=> $this->request->getVar('NombrePag'),
        ];

        $pago->insert($datos);
    

        return $this->response->redirect(site_url('pagos/listar'));
    }
    
    public function borrar($id=null)
    {
        $pago= new PagosM();
        $datospago=$pago->where('IdPago',$id)->first();
        \unlink($ruta);

        $pago->where('IdPago',$id)->delete($id);

        return $this->response->redirect(site_url('pagos/listar'));
    }

    public function editar($id=null)
    {
        print_r($id);
        $pago= new PagosM();
        $datos['pago']=$pago->where('IdPago',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('pagos/editar', $datos);
    }

    public function actualizar()
    {
        $pago=new PagosM();
        $datos=[
            'NombrePag'=> $this->request->getVar('NombrePag'),
        ];
        $id=$this->request->getVar('id');
        $pago->update($id,$datos);
    }
}