<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Editar curso">
    <title>Editar curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>    
    <div class="container p-3">
        <h1>Editar Curso</h1>   
        <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Editar Curso</li>
          </ol>
        </nav>  
        <form action="/cursos/salvar" name="form_add" method="post">
          <div class="row">
            <div class="col-md-8">
              <label>Titulo</label>
              <input type="text" name="titulo" value="<?php echo $curso->titulo?>" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <label>Descrição</label>
              <input type="text" name="descricao" value="<?php echo $curso->descricao?>" class="form-control" required>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-2">
              <input type="hidden" name="id" value="<?php echo $curso->id ?>">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
          </div>
        </form>
      </div>
  </body>
</html>