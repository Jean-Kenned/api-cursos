<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_model extends CI_Model {
    public function getCursos(){
        $query = $this->db->get('cursos');
        return $query->result();
    }

    public function addCurso($dados){
		$this->db->insert('cursos', $dados);		
	}   

    public function getCursoByID($id){
        $this->db->where('id', $id);         
        $this->db->limit(1);
        $query = $this->db->get("cursos");        
        return $query->row();   
    } 

    public function editarCurso($dados, $id){
        $this->db->update('cursos', $dados, array('id'=>$id));      
    }   

    public function apagarCurso($id){
        $this->db->delete('cursos', array('id'=>$id));            
    }  


}