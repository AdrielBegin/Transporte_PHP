<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fazer Envio</title>
</head>
<body>
    <div>
        <div class="navBarPrincipal">
            <div >
                <img src="logoAviazao.jpg" />
            </div class="">
            <div class="listaLogin">                
                <ul class="ulLogin">                                       
                    <a href="../pageLogin/index.html"><li>Login</li></a>
                    <a href="../pageCadastre/index.html"><li>Cadastre-se</li></a>
                </ul>
            </div>
                        
        </div>
        <div class="navBarLista">
            <ul class="ulPrincipal">
                <a href="../pageServico/index.html"><li>Serviço</li></a>
                <a href="../Exception/index.html"><li>Conheça Azul Cargo Express</li></a>                
                <a href="../Exception/index.html"><li>Fazer Envio</li></a>
                <a href="../Exception/index.html"><li>Restrear</li></a>
                <a href="../Exception/index.html"><li>Conta</li></a>
            </ul>    
        </div>       
    </div>
    <div class="logo">
        <!-- <img class="imagemFundo" src="BackGroundLogo.png" alt="">         -->
    </div>    
    <div class="cotacao">
        <div><p style="color:white">Cotação de envio de encomendas</p></div>    
        <form action="" method="get">
            <div class="campos">
              <input type="text" name="informCEPorigem" placeholder="informe de CEP de origem">
              <input type="text" name="informCEPdestino" placeholder="informe de CEP de destino">
              <div class="botao">
                <input type="submit" name="buscar" value="Buscar">
              </div>
            </div>
        </form>          
    </div> 
    <?php      
          
        error_reporting(0);
        $cep = $_GET["informCEPorigem"];       
        $url ='https://viacep.com.br/ws/'.$cep.'/json/';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");    
        
        if($cep != null){
            $resultado = json_decode(curl_exec($ch));      
            echo "<p>Pais: " .$resultado->localidade."</p><br>";  
            echo "<p>UF: " .$resultado->uf."</p><br>";  
            echo "<p>Bairro: " .$resultado->bairro."</p><br>";  
            echo "<p>Logradouro: " .$resultado->logradouro."</p><br>";                     
        }
                       
    ?> 
      
</body>
<footer>
    <p>Copyright ©</p>
</footer>    
</html>
