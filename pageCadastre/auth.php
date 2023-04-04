<?php
session_start();

$cadUsuario = $_POST["usuarioCadastrado"];
$cadSenha = $_POST["senhaCadastrada"];
$confirmaSenha = $_POST["confirmaSenha"];


if($cadUsuario != null ){
    if($cadSenha != null){
        $_SESSION["usuarioCadastrado"] = $cadUsuario;
        header("Location: ../pageHome/index.html");        
    }elseif($cadSenha !== $confirmaSenha){
        $_SESSION["senhaCadastrada"] = $cadSenha;
        echo"As senhas não pode ser diferentes";
    }    
 } 





 
?>