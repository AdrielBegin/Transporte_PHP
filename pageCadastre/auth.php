<?php
session_start();

$cadUsuario = $_POST["usuarioCadastrado"];
$cadSenha = $_POST["senhaCadastrada"];
$confirmaSenha = $_POST["confirmaSenha"];


if($cadUsuario != null ){
    if($cadSenha != null){
        $_SESSION["usuarioCadastrado"] = $cadUsuario;
        header("Location: ../pageHome/index.html");        
    }    
 } 

if($_POST["senhaCadastrada"] != $_POST["confirmaSenha"]){
    echo"As senhas não pode ser diferentes";
}
 
?>