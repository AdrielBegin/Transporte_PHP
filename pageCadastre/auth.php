<?php
session_start();



if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $cadUsuario = $_POST["usuarioCadastrado"];
    $cadSenha = $_POST["senhaCadastrada"];
    $confirmaSenha = $_POST["confirmaSenha"];
   
    if($cadUsuario != null ){
        if($cadSenha != null){
            $_SESSION["usuarioCadastrado"] = $cadUsuario;
            header("Location: ../pageHome/index.html");        
        }elseif($cadSenha !== $confirmaSenha){
            
            echo"As senhas não pode ser diferentes";
        }    
 } 
}







 
?>