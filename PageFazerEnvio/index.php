<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="BackGroundLogo.png" type="image/x-icon">
    <title>Fazer Envio</title>
</head>
<body>
    <div>
        <div class="navBarPrincipal">
            <div >
                <a href="../pageHome/index.html"><img src="logoAviazao.jpg" /></a>
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
                <a href="../Exception/index.html"><li>Conheça Aviãozão Transportadora</li></a>                
                <a href="../Exception/index.html"><li>Fazer Envio</li></a>
                <a href="../pagePagamento/index.html"><li>Pagamento</li></a>
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
        $cepOrigem = $_GET["informCEPorigem"];   
        $cepDestino = $_GET["informCEPdestino"];        
        
        $urlOrigem ='https://viacep.com.br/ws/'.$cepOrigem.'/json/';
        $urlDestino ='https://viacep.com.br/ws/'.$cepDestino.'/json/';

        $chUm = curl_init($urlOrigem);
        curl_setopt($chUm, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($chUm, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($chUm, CURLOPT_CUSTOMREQUEST, "GET");    

        $chDois = curl_init($urlDestino);
        curl_setopt($chDois, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($chDois, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($chDois, CURLOPT_CUSTOMREQUEST, "GET");    
        
        if($cepOrigem != null){
            $resultado = json_decode(curl_exec($chUm));      
            $stringUm = $resultado->cep;
            $stringUm = intval($stringUm);
            echo "<p>Pais de Origem: " .$resultado->localidade . "</p>";  
            echo "<p>UF: " .$resultado->uf."</p>";  
            echo "<p>Bairro: " .$resultado->bairro."</p>";  
            echo "<p>Logradouro: " .$resultado->logradouro."</p>";                                
        }

        if($cepDestino != null){
            $resultado = json_decode(curl_exec($chDois));      
            $stringDois = $resultado->cep;
            $stringDois = intval($stringDois);
            $conta = ($stringDois-$stringUm)*5;
            echo"<hr>";
            echo "<p class='cep'>Pais de Destino:  .$resultado->localidade</p>";  
            echo "<p class='cep'>UF: " .$resultado->uf."</p>";  
            echo "<p class='cep'>Bairro: " .$resultado->bairro."</p>";  
            echo "<p class='cep'>Logradouro: " .$resultado->logradouro."</p>";  
            echo "<p class='cep'>Valor da cotação é: <strong>$$conta</strong></p>";                                           
        }
                       
    ?> 
      
</body>
<footer>
    <p>Copyright ©</p>
</footer>    
</html>
