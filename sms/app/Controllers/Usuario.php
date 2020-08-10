<?php namespace App\Controllers;
 
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Usuario extends Controller
{
    
    public function index()
    {    
        
        $model = new UsuarioModel();
 
        $data['usuarios'] = $model->orderBy('id', 'NOME')->findAll();
        
        #return view('posts', $data);
        return view('usuarioslist', $data);
    }    
 
    public function create()
    {    
        return view('usuarioadd');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new UsuarioModel();
 
        $data = [
            'name'  => $this->request->getVar('nome'),
            'email'  => $this->request->getVar('email'),
            'password'  => md5($this->request->getVar('senha')),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('usuario') );

    }
 
    public function edit($id = null)
    {
    
        $model = new UsuarioModel();
        
        $data['post'] = $model->find($id);
        
        return view('usuarioedit', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new UsuarioModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
            'name'  => $this->request->getVar('nome'),
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('senha'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('usuario') );
    }
 
    public function delete($id = null)
    {
 
        $model = new UsuarioModel();
    
        $data['post'] = $model->where('id', $id)->delete();
        
        return redirect()->to( base_url('usuario') );
    }
}