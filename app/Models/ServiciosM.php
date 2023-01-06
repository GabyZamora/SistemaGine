<?php 
namespace App\Models;

use CodeIgniter\Model;

class ServiciosM extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'servicios';
    protected $primaryKey           = 'IdServicio';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDelete        = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['NombreSer','PrecioSer'];

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