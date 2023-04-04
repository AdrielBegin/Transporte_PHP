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

if($cadUsuario != $usuario){
    if($cadSenha != $senha){
        $_SESSION["usuarioCadastrado"] = $cadUsuario;
        echo"<h1>Os dados estão errados</h1>";
        echo"<a href='../pageLogin/index.html'>Retornar</a>";        
    }    
}  




?>

