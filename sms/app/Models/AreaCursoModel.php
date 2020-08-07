<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class AreaCursoModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'area_curso';
 
    protected $allowedFields = ['desc'];
    protected $returnType     = 'array';
}