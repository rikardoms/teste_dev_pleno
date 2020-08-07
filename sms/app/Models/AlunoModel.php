<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class AlunoModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'aluno';
 
    protected $allowedFields = ['nome','email','data_nasc'];
    protected $returnType     = 'array';
}