<link rel="stylesheet" href="style.css">
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

if($cadUsuario != $usuario and $cadSenha != $senha){
    
    $_SESSION["usuarioCadastrado"] = $cadUsuario;
    echo"<h1 class='erro'>Os dados estão incorretos</h1>";
    echo"<button style='margin-left:45vw;' ><a href='../pageLogin/index.html'>Retornar para tela de login</a></button>";
    
    
}  




?>

