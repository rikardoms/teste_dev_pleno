<?php namespace App\Controllers;
 
use App\Models\AlunoModel;
use CodeIgniter\Controller;

class Aluno extends Controller
{
    
    public function index()
    {    
        
        $model = new AlunoModel();
 
        $data['alunos'] = $model->orderBy('id', 'NOME')->findAll();
        
        #return view('posts', $data);
        return view('alunolist', $data);
    }    
 
    public function create()
    {    
        return view('alunoadd');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new AlunoModel();
 
        $data = [
            'nome'  => $this->request->getVar('nome'),
            'email'  => $this->request->getVar('email'),
            'data_nasc'  => $this->request->getVar('data_nasc'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('aluno') );

    }
 
    public function edit($id = null)
    {
    
        $model = new AlunoModel();
        
        $data['post'] = $model->find($id);
        
        return view('alunoedit', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new AlunoModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
            'nome'  => $this->request->getVar('nome'),
            'email'  => $this->request->getVar('email'),
            'data_nasc'  => $this->request->getVar('data_nasc'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('aluno') );
    }
 
    public function delete($id = null)
    {
 
        $model = new AlunoModel();
    
        $data['post'] = $model->where('id', $id)->delete();
        
        return redirect()->to( base_url('aluno') );
    }
}