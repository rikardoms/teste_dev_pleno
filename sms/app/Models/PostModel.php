<?php namespace App\Models;
//use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class PostModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'posts';
 
    protected $allowedFields = ['title', 'description'];
    protected $returnType     = 'array';
}