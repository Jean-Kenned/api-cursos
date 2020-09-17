<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Lista de cursos">
    <title>Lista de Cursos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>    
    <div class="container">
        <h1>Lista de cursos</h1>
        <a href="cursos/add" class="btn btn-success mb-3">Novo Curso</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                  <th class="text-center">Título</th>
                  <th class="text-center">Descrição</th>
                  <th class="text-center">Ações</th>
                </tr>
            </thead>

            <?php
              foreach ($cursos as $curso){
            ?>        
                <tr>
                  <td><?php echo $curso->titulo ?></td> 
                    <td class="text-center"><?php echo $curso->descricao ?></td>
                    <td class="text-center">
                      <a href="/cursos/editar/<?php echo $curso->id ?>" title="Editar cadastro" class="btn btn-primary">Editar</a>
                      <a href="/cursos/apagar/<?php echo $curso->id ?>" title="Apagar cadastro" class="btn btn-danger">Apagar</a>
                    </td>
                </tr>
            <?php 
              }
            ?>
        </table>
    </div>
  </body>
</html>