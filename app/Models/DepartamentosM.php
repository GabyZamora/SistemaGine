<?php 
namespace App\Models;

use CodeIgniter\Model;

class DepartamentosM extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'Departamentos';
    protected $primaryKey           = 'IdDepartamento';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDelete        = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['NombreDep'];

    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdFields        = 'created_at';
    protected $updatedFields        = 'updated_at';
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