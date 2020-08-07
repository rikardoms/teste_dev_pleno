<?php namespace App\Controllers;
 
use App\Models\PostModel;
use CodeIgniter\Controller;

class Posts extends Controller
{
 
    public function index()
    {    
        
        $model = new PostModel();
 
        $data['posts'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('posts', $data);
    }    
 
    public function create()
    {    
        return view('create-post');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new PostModel();
 
        $data = [
 
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('posts') );
        //return redirect()->to( base_url('posts') );
        //public function index()
    }
 
    public function edit($id = null)
    {
    
     $model = new PostModel();
     
     $data['post'] = $model->find($id);
      
     return view('edit-post', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new PostModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
 
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('posts') );
    }
 
    public function delete($id = null)
    {
 
     $model = new PostModel();
 
     $data['post'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('posts') );
    }
}