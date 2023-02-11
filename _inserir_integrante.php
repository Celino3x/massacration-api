<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Massacration | Registration</title>
</head>
<body>

<?php
    include('conexao.php');

    $nome_mass = $_POST['nome_mass'];
    $inter_mass = $_POST['inter_mass'];
    $fun_mass = $_POST['fun_mass'];
    $ano_mass = $_POST['ano_mass'];
    $status_mass = $_POST['status_mass'];


    //upload de arquivo

        $extensao = strtolower(substr($_FILES['foto_mass']['name'], -4));
        $new_name = md5(time()) . $extensao;
        $diretorio = "foto_mass/";

        move_uploaded_file($_FILES['foto_mass']['tmp_name'], $diretorio.$new_name);

        $sql = "INSERT INTO `integrantes`( `nome_mass`, `inter_mass`, `ano_mass`, `status_mass`, `foto_mass`) VALUES ('$nome_mass', '$inter_mass', '$fun_mass', '$ano_mass', '$status_mass', '$new_name')";

        $inserir = mysqli_query($conexao, $sql);

?>

<div class="container">
    <h3>Cadastrado</h3>
    <a href="Voltar" class="btn btn-sm btn-warning">Voltar</a>
    <a href="_consultar_integrantes.php" class="btn btn-sm brn-secondary">Consultar</a>
    </div>
<?php ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
