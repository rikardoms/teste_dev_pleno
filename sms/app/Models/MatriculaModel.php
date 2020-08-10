<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class MatriculaModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'matricula';
 
    protected $allowedFields = ['id_curso','id_aluno'];
    protected $returnType     = 'array';
}