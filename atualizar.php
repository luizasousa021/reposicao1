<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$id = $_POST["id"];
include_once'conexao.php';
// instrução para atualizar
$sql = "updata aluno set nome = '".$nome"'  ,
 email ='".$email."' , telefone = '".$telefone."'
 where idaluno = ".$id;
 if (mysqli_query($con,$sql)) {
    $msg ="Atualizado com sucesso";
    {}
}else{
    $msg ="Erro ao atualizar .";
}
mysqli_close($con);
header("location: consulta.php?msg=".$msg);