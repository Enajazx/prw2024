<?php
$email= $_GET['email'];
$nome= $_GET['nome'];
$senha= $_GET['senha'];

$senha= 123;
if($campo=$senha)
echo "Logado com Sucesso!";
else{
    echo "Senha/Email invalido, tente outra vez";
    echo '<a href="entrada.html" ';
}
?>