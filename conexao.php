<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "RH_DB";

    if($con = mysqli_connect($server, $user, $pass, $db)){
        // echo "Conectado com sucesso!";
    }else{
        echo "Erro ao se conectar!";
    }