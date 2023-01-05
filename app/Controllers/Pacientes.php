<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PacientesM;
use App\Models\DepartamentosM;
use App\Models\MunicipiosM;

class Pacientes extends Controller
{

    public function index()
    {
        $paciente= new PacientesM();
        $departamentos = model('DepartamentosM');
        $municipios = model('MunicipiosM');
        $datos['pacientes']= $paciente->orderBy('IdPaciente','ASC')->paginate(10);
        
        $datos['departamentos'] = $departamentos→findAll();
        $datos['municipios'] = $municipios→findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('pacientes/listar', $datos);
    }

    public function crear()
    {
        $departamentos = model('DepartamentosM');
        $municipios = model('MunicipiosM');
        $datos['departamentos'] = $departamentos→findAll();
        $datos['municipios'] = $municipios→findAll();
        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('pacientes/crear', $datos);
    }

    public function guardar()
    {
        $paciente = new PacientesM();
        $datos=[
            'NombrePac'=> $this->request->getVar('NombrePac'),
            'DuiPac'=> $this->request->getVar('DuiPac'),
            'TelPac'=> $this->request->getVar('TelPac'),
            'CorreoPac'=> $this->request->getVar('CorreoPac'),
            'FechaNacPac'=> $this->request->getVar('FechaNacPac'),
            'IdDepartamento'=> $this->request->getVar('IdDepartamento'),
            'IdMunicipio'=> $this->request->getVar('IdMunicipio')
        ];

        $paciente->insert($datos);

        return $this->response->redirect(site_url('pacientes/listar'));
    }
    
    public function borrar($id=null)
    {
        $paciente= new PacientesM();
        $datospaciente=$paciente->where('IdPaciente',$id)->first();
        \unlink($ruta);

        $paciente->where('IdPaciente',$id)->delete($id);

        return $this->response->redirect(site_url('pacientes/listar'));
    }

    public function editar($id=null)
    {
        $paciente= new PacientesM();
        $datos['paciente']=$paciente->where('IdPaciente',$id)->first();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('pacientes/editar', $datos);
    }

    public function actualizar()
    {
        $paciente=new PacientesM();
        $datos=[
            'NombrePac'=> $this->request->getVar('NombrePac'),
            'DuiPac'=> $this->request->getVar('DuiPac'),
            'TelPac'=> $this->request->getVar('TelPac'),
            'CorreoPac'=> $this->request->getVar('CorreoPac'),
            'FechaNacPac'=> $this->request->getVar('FechaNacPac'),
            'IdDepartamento'=> $this->request->getVar('IdDepartamento'),
            'IdMunicipio'=> $this->request->getVar('IdMunicipio')
        ];
        $id=$this->request->getVar('IdPaciente');
        $paciente->update($id,$datos);
    }
}