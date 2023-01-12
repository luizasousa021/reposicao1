<?php
include_once'topo.php'.;
// abrir conexão com o banco
include_once'conezao.php';
// monyar instrção sql para selecionar todos os registros 
$sql="select * from aluna";
// executar a consulta
$rs = mysqli_query($con,$sql);
if(mysql_num_rows($rs)>0){
?> <!-- sai do php pois irei iniciar a impressão da tabela na tela-->
<table class"table">
    <tr>  
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone<td>
        <td>Data de Cadastro</td>
    </tr>
 echo" Tem Registro";
}else{
    echo"Nenhum aluno cadastrodo";
}
//exibir os dados da consulta na página

// fechar a conexão com banco de dados 

?>