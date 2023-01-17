<?php include_once 'topo.php';?>
<script>
    function exluir(id){
        if (confirm('Deseja realmente excluir este aluno')) {
            location.href='excluir.php?id='+id;
        }
    }
</script>
<?php
//abrir conexão com o banco
include_once 'conexao.php';
//montar a instrução sql para selecionar todos os registros
$sql="select * from aluno";
//executar a consulta
$rs= mysqli_query($con,$sql);
if (mysqli_num_rows($rs)>0) {
 ?>
 <table class="table">
    <tr>
        <td>Matricula</td>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td>Data de Cadastro</td>
        <td>Editar</td>
        <td>Excluir</td>
    <tr>   
 <?php
 while ($row= mysqli_fetch_array($rs)) {
    ?>
    <tr>
        <td><?php echo $row["idaluno"];?></td>
        <td><?php echo $row["nome"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["telefone"];?></td>
        <?php
                   $data = explode("-",$row["datacadastro"]);
                   $data1 = array_reverse($data);
                   $data2 = implode("/",$data1);
                ?>
         <td><?php echo $data2; ?></td>
         <td>
            <a href="editar.php?id=<?php echo $row["idaluno"];?>">
               <img src="./img/download (1).png">
            </a>
         </td>
         <td> 
                <a href="#" onclick="excluir(<?php echo $row['idaluno'];?>">
                     <img src="./img/download.png">
                </a>
            </td>
       
    </tr>
    <?php
 }
 echo"tem registro";
}else{
    echo"nenhum aluno cadastrado";
}

//exibir dados da consulta na pagina



//fechar a conexão com o banco de dados


?>