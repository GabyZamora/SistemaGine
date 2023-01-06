<?php 
namespace App\Models;

use CodeIgniter\Model;

class PacientesM extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'pacientes';
    protected $primaryKey           = 'IdPaciente';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDelete        = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['NombrePac','DuiPac','TelPac','CorreoPac','FechaNacPac','IdDepartamento','IdMunicipio'];

    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdFields        = 'FechaIngreso';
    protected $updatedFields        = 'FechaModific';
    protected $deletedField         = 'delete_at';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];

}
?>