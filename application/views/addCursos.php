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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="../../JS/addCursos.js"></script>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Cadastro de curso</h1>
        </div>
    </div>
    <div class="container p-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Novo Curso</li>
            </ol>
        </nav>
        <?php echo form_open_multipart('cursos/salvar');?>
        <div class="row">
            <div class="col-md-8">
                <label>Titulo</label>
                <input type="text" maxlength="255" name="titulo" value="" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label>Descrição</label>
                <textarea style="height:200px" type="text" maxlength="8000" name="descricao" value=""
                    class="form-control" required></textarea>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-8">
                <div id="filename" class="alert alert-success col-md-4" role="alert">
                    Imagem: Nenhum arquivo
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="btn btn-secondary btn-sm" for="url">Carregar imagem</label>
                <input onchange="showname()" type="file" class="form-control hidden" style="display:none;"
                    name="imageURL" id="url" class="filestyle" data-icon="true"
                    data-buttontext="Escolha uma image para o curso" required>
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