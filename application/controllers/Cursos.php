<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

	public function index(){
		$this->load->model('cursos_model','cursos');
		$data['cursos'] = $this->cursos->getCursos();
		$this->load->view('listarCursos',$data);
	}

	public function add(){
		$this->load->model('cursos_model','cursos');
		$this->load->view('addCursos');
	}

	public function salvar(){		
			$this->load->model('cursos_model','cursos');
			$dados['titulo'] = $this->input->post('titulo');
			$dados['descricao'] = $this->input->post('descricao');

			if ($this->input->post('id') != NULL) {			
				$this->cursos->editarCurso($dados, $this->input->post('id'));
			} else {
				$this->cursos->addCurso($dados);
			}	
			redirect("/");	
	}

	public function editar($id=NULL){
			$this->load->model('cursos_model', 'cursos');
			$query = $this->cursos->getCursoByID($id);
			if($query==NULL){
				redirect('/');
			}
			$dados['curso'] = $query;
			$this->load->view('editarCursos',$dados);	
	}

	public function apagar($id=NULL){
		if($id == NULL) {
			redirect('/');
		}
		$this->load->model('cursos_model', 'cursos');
		$query = $this->cursos->getCursoByID($id);
		if($query != NULL) {
			$this->cursos->apagarCurso($query->id);
		}
		redirect('/');
	}

}
