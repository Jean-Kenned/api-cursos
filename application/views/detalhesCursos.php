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
    <title>Detalhes do curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="../../JS/editCursos.js"></script>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $curso->titulo?></h1>
        </div>
    </div>
    <div class="container p-3 h-100">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detalhes do Curso</li>
            </ol>
        </nav>
        <div class="row d-flex h-100 justify-content-center mb-5">
            <img src="<?php echo $curso->imagem ?>" width="300" height="300">
        </div>
        <div class="row">
            <h3>Detalhes do curso:</h3>
        </div>
        <div class="row">
            <?php echo $curso->descricao?>
        </div>
    </div>
</body>


</html>