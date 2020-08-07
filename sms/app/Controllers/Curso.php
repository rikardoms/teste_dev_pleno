<?php namespace App\Controllers;
 
use App\Models\CursoModel;
use App\Models\AreaCursoModel;
use CodeIgniter\Controller;

class Curso extends Controller
{
    
    public function index()
    {    
        
        $model = new CursoModel();
        $mdAC = new AreaCursoModel();
        //$sql = "SELECT curso.id, curso.titulo, curso.descricao, area_curso.id as id_area, area_curso.desc as area FROM curso, area_curso WHERE curso.id_area = area_curso.id"
        //$data['areas'] = $mdAC->orderBy('id', 'DESC')->findAll();
        $data['cursos'] = "";
        $model->select("DISTINCT(c.id), c.titulo, c.descricao, ac.desc as area");
        $model->from("curso as c, area_curso as ac");
        $model->where("c.id_area = ac.id");
        $data['cursos'] = $model->orderBy('c.id')->find();
        
        return view('cursolist', $data);
    }    
 
    public function create()
    {    
        $mdAC = new AreaCursoModel();
        $data['areas'] = $mdAC->orderBy('DESC')->findAll();
        return view('cursoadd',$data);
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new CursoModel();
 
        $data = [
            'titulo'  => $this->request->getVar('titulo'),
            'descricao'  => $this->request->getVar('descricao'),
            'id_area'  => $this->request->getVar('id_area'),
            ];
        if ($save = $model->insert($data)){
            
            echo "window.alert('Curso Inserido com sucesso');";
        }
            
        return redirect()->to( base_url('curso') );

    }
 
    public function edit($id = null)
    {
    
        $model = new CursoModel();
        $mdAC = new AreaCursoModel();
        $data['areas'] = $mdAC->orderBy('DESC')->findAll();
        $data['post'] = $model->find($id);
        
        return view('cursoedit', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new CursoModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
            'titulo'  => $this->request->getVar('titulo'),
            'descricao'  => $this->request->getVar('descricao'),
            'id_area'  => $this->request->getVar('id_area'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('curso') );
    }
 
    public function delete($id = null)
    {
 
        $model = new CursoModel();
    
        $data['post'] = $model->where('id', $id)->delete();
        
        return redirect()->to( base_url('curso') );
    }
}