<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CitasM;
use App\Models\EstadosM;
use App\Models\ServiciosM;
use App\Models\PagosM;
use App\Models\PacientesM;


class Citas extends Controller
{

    public function index()
    {
        
        $cita = new CitasM();
        $servicios = model('ServiciosM');
        $pacientes = model('PacientesM');
        $pagos = model('PagosM');
        $estados = model('EstadosM');
        $datos['citas']= $cita->orderBy('IdCita','ASC')->paginate(10);
        
        $datos['servicios'] = $servicios→findAll();
        $datos['pacientes'] = $pacientes→findAll();
        $datos['pagos'] = $pagos→findAll();
        $datos['estados'] = $estados→findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('citas/listar', $datos);
    }

    public function crear()
    {
        $servicios = model('ServiciosM');
        $pacientes = model('PacientesM');
        $pagos = model('PagosM');
        $estados = model('EstadosM');
        $datos['servicios'] = $servicios→findAll();
        $datos['pacientes'] = $pacientes→findAll();
        $datos['pagos'] = $pagos→findAll();
        $datos['estados'] = $estados→findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('citas/crear', $datos);
    }

    public function guardar()
    {
        $cita = new CitasM();
        $datos=[
            'AsuntoCit'=> $this->request->getVar('AsuntoCit'),
            'NotaCit'=> $this->request->getVar('NotaCit'),
            'FechaCit'=> $this->request->getVar('FechaCit'),
            'IdPaciente'=> $this->request->getVar('IdPaciente'),
            'IdServicio'=> $this->request->getVar('IdServicio'),
            'IdPago'=> $this->request->getVar('IdPago'),
            'IdEstado'=> $this->request->getVar('IdEstado')
        ];

        $cita->insert($datos);

        return $this->response->redirect(site_url('citas/listar'));
    }
    
    public function borrar($id=null)
    {
        $cita= new CitasM();
        $datoscita=$cita->where('IdCita',$id)->first();
        \unlink($ruta);

        $cita->where('IdCita',$id)->delete($id);

        return $this->response->redirect(site_url('citas/listar'));
    }

    public function editar($id=null)
    {
        $cita= new CitasM();
        $datos['cita']=$cita->where('IdCita',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('citas/editar', $datos);
    }

    public function actualizar()
    {
        $cita=new CitasM();
        $datos=[
            'AsuntoCit'=> $this->request->getVar('AsuntoCit'),
            'NotaCit'=> $this->request->getVar('NotaCit'),
            'FechaCit'=> $this->request->getVar('FechaCit'),
            'IdPaciente'=> $this->request->getVar('IdPaciente'),
            'IdServicio'=> $this->request->getVar('IdServicio'),
            'IdPago'=> $this->request->getVar('IdPago'),
            'IdEstado'=> $this->request->getVar('IdEstado')
        ];
        $id=$this->request->getVar('IdCita');
        $cita->update($id,$datos);
    }
}