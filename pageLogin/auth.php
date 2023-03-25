<?php
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$cadUsuario = "adriel";
$cadSenha = "123";


if($cadUsuario == $usuario){
    if($cadSenha == $senha){
        $_SESSION["usuarioCadastrado"] = $cadUsuario;
        header("Location: ../pageHome/index.html");        
    }    
}  


?>

