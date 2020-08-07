<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Models\UserModel;
 
class User extends Controller
{
    public function index()
    {    
        $model = new UserModel();
 
        $data['users_detail'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('list', $data);
    }    
 
    public function create()
    {    
        return view('add');
    }
 
    public function store()
    {  
        helper(['form', 'url']);
         
        $model = new UserModel();
 
        $data = [
            'name' => $this->request->getVar('txtName'),
            'email'  => $this->request->getVar('txtEmail'),
            'password'  => $this->request->getVar('txtPassword'),
            'city'  => $this->request->getVar('txtCity'),
            ];
        $save = $model->insert($data);
        return redirect()->to( base_url('User') );
    }
 
    public function edit($id = null)
    {
        $model = new UserModel();
 
        $data['user'] = $model->where('id', $id)->first();
 
        return view('edit', $data);
    }
 
    public function update()
    {  
        helper(['form', 'url']);
 
        $model = new UserModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
            'name' => $this->request->getVar('txtName'),
            'email'  => $this->request->getVar('txtEmail'),
            'password'  => $this->request->getVar('txtPassword'),
            'city'  => $this->request->getVar('txtCity'),
        ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('users') );
    }
 
    public function delete($id = null)
    {
        $model = new UserModel();
        $data['user'] = $model->where('id', $id)->delete();
        return redirect()->to( base_url('users') );
    }
}
 
?>