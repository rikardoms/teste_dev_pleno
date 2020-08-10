<?php namespace App\Controllers;
 
use App\Models\MatriculaModel;
use App\Models\AlunoModel;
use App\Models\CursoModel;
use CodeIgniter\Controller;

class Matricula extends Controller
{
    
    public function index()
    {    
        
        $model = new MatriculaModel();
        

        $model->select("DISTINCT(m.id) as id, a.nome as aluno, c.titulo as curso");
        
        $model->from("matricula as m, aluno as a, curso as c");
        
        $model->where("m.id_aluno = a.id and m.id_curso = c.id");
        
        $data['matriculas'] = $model->orderBy('a.nome')->findAll();
        
        return view('matriculalist', $data);
    }    
 
    public function create()
    {   
        $alunoModel = new AlunoModel();
        $cursoModel = new CursoModel();
        $data['alunos'] = $alunoModel->orderBy("NOME")->findAll();
        $data['cursos'] = $cursoModel->orderBy("DESCRICAO")->findAll();
        return view('matriculaadd',$data);
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new MatriculaModel();
        $data = [
            'id_aluno'  => $this->request->getVar('aluno'),
            'id_curso'  => $this->request->getVar('curso'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('matricula') );

    }
 
    public function edit($id = null)
    {
    
        $model = new MatriculaModel();
        $alunoModel = new AlunoModel();
        $cursoModel = new CursoModel();

        $data['post'] = $model->find($id);
        
        $data['alunos'] = $alunoModel->orderBy("NOME")->findAll();
        $data['cursos'] = $cursoModel->orderBy("DESCRICAO")->findAll();

        return view('matriculaedit', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new MatriculaModel();
 
        $id = $this->request->getVar('id');
        
        $data = [
            'id_aluno'  => $this->request->getVar('aluno'),
            'id_curso'  => $this->request->getVar('curso'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('matricula') );
    }
 
    public function delete($id = null)
    {
 
        $model = new MatriculaModel();
    
        $data['post'] = $model->where('id', $id)->delete();
        
        return redirect()->to( base_url('matricula') );
    }
}