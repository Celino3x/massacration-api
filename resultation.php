<?php
    include('conexao.php');

    $dados = array();

    $buscarIntegrantes = "SELECT * FROM integrantes";


    $resultado = mysqli_query($conexao, $buscarIntegrantes);


    if(mysqli_num_rows($resultado)>0){
        while ($user = mysqli_fetch_array($resultado)){
            $dados[] = array(
                'id_mass' => intval($user['id_mass']),
                'nome_mass' => $user['nome_mass'],
                'inter_mass' => $user['inter_mass'],
                'fun_mass' => $user['fun_mass'],
                'ano_mass' => $user['ano_mass'],
                'status_mass' => $user['status_mass'],
                'foto_mass' => $user['foto_mass'],
            );
        }
    } else{
        echo 'Nenhum Integrante';
        exit;
    }

    echo json_encode($dados);
?>