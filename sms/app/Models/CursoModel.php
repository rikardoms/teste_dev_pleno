<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CursoModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'curso';
 
    protected $allowedFields = ['titulo','descricao','id_area'];
    protected $returnType     = 'array';
}