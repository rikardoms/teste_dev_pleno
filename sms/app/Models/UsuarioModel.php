<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class UsuarioModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'usuario';
 
    protected $allowedFields = ['name','email','password'];
    protected $returnType     = 'array';
}