<link rel="stylesheet" href="style.css">

<?php
session_start();
$pagamentoTotal = $_GET['totalPagar'];

 echo"<h1 class='sucess'>Pagamento relizado com sucesso, valor pago: R$ $pagamentoTotal</h1>"; 
 
 echo"<button style='margin-left:50vw;'><a style='color:black' href='../pageHome/index.html'>Voltar</a></button>";
?>