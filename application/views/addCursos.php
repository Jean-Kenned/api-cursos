<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Adicionar novo curso">
    <title>Novo curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>    

    <div class="container p-3">
        <h1>Novo Curso</h1>   
        <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Novo Curso</li>
          </ol>
        </nav>  
        <form action="/cursos/salvar" name="form_add" method="post">
          <div class="row">
            <div class="col-md-8">
              <label>Titulo</label>
              <input type="text" name="titulo" value="" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <label>Descrição</label>
              <input type="text" name="descricao" value="" class="form-control" required>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
  </body>
</html>