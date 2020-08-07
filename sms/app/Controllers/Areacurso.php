<?php namespace App\Controllers;
 
use App\Models\AreacursoModel;
use CodeIgniter\Controller;

class Areacurso extends Controller
{
 
    public function index()
    {    
        
        $model = new AreacursoModel();
 
        $data['areacurso'] = $model->orderBy('id', 'DESC')->findAll();
        
        #return view('posts', $data);
        return view('areacursolist', $data);
    }    
 
    public function create()
    {    
        return view('areacursoadd');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new AreacursoModel();
 
        $data = [
            'desc'  => $this->request->getVar('desc'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('areacurso') );
        //return redirect()->to( base_url('posts') );
        //public function index()
    }
 
    public function edit($id = null)
    {
    
        $model = new AreacursoModel();
        
        $data['post'] = $model->find($id);
        
        return view('areacursoedit', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new AreacursoModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
            'desc'  => $this->request->getVar('desc'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('areacurso') );
    }
 
    public function delete($id = null)
    {
 
        $model = new AreacursoModel();
    
        $data['post'] = $model->where('id', $id)->delete();
        
        return redirect()->to( base_url('areacurso') );
    }
}