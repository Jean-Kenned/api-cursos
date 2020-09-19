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
		$fileImageName = preg_replace('/\s+/', '', $dados['titulo']).'.png';
		$dados['imagem'] = base_url().'uploads/'.$fileImageName;
		$config['upload_path'] = './uploads/';
         $config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = 100;
        $config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['file_name'] = $fileImageName;
		$config['overwrite'] = TRUE;
		$this->load->library('upload');
		$this->upload->initialize($config);
		if($this->upload->do_upload('imageURL')){
			if ($this->input->post('id') != NULL) {			
				$this->cursos->editarCurso($dados, $this->input->post('id'));
			} else {
				$this->cursos->addCurso($dados);
			}	
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


	public function detalhes($id=NULL){
		$this->load->model('cursos_model', 'cursos');
		$query = $this->cursos->getCursoByID($id);
		if($query==NULL){
			redirect('/');
		}
		$dados['curso'] = $query;
		$this->load->view('detalhesCursos',$dados);	
	}

}