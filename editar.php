<?php include_once 'topo.php'
$id = $_GET["id"];
include_once'conexao.php';
// montar a instrução para pegar os dados e mostrar
// na tela
$sql = "select * from aluno where idaluno =".;
$resultado = mysqli_fetch_array($con,$sql);
$row = mysqli_fetch_array($resultado);
?>
  <div id = "tela">
    <form action="atualizar.php" method="post">

        <input type="text" name="nome"
        value="<?php acho $row["idaaluno"] ?>"/>

        Nome:<br>
        <input type="text" name="nome" 
        value="<?php echo $row["nome"] ?>"/>
        <br/></br>
        E-mail:<br>
        <input type="text" name="email" 
        value="<?php echo $row["email"] ?>"/>
        <br/></br>
        Telefone:<br>
        <input type="text" name="telefone" 
        value="<?php echo $row["telefone"] ?>"/>
        <br/></br>
        <input type="submit" value="Enviar"/>
</form>
</div>
<?php
    echo"<br><br>";
    if(isset($_GET["msg"])) {
        echo $_GET["msg"];
    }
?>
</div>
</body>
