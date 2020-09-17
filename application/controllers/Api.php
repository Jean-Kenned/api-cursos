<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
       function __construct()
       {
           parent::__construct();
       }
       
       public function cursos_get(){
            $this->load->model('cursos_model','cursos');
            $cursos= $this->cursos->getCursos();
	     $this->response($cursos,200);
       }
    
}