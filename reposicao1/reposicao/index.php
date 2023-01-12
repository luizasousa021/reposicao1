<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/jquery-1.8.0.min.js"></script>
    <script src="./js/jquery.maskedinput.js"></script>

    <script>
        $(document).ready(function () {
            $("#tela").hide();
            $("#admissao").mask("99/99/9999");

            $("#btn").click(function(){
                $("#tela").toggle(5000);
            });
           
            $("#btnenviar").click(function(){
                $.post('gravar.php',{

                })
        });
    </script>
</head>
<body>
    <h3>SISTEMA DE FUNCIONÁRIOS</h3>
    <hr/>
    <a href="#" id="btn">Novo Funcionário</a>
    <a href="#">Buscar Funcionário</a>
    <div id="tela">
    <form>
        Nome:<br/>
        <input type="text" name="nome"/>
        <br/><br/>
        E-mail:<br/>
        <input type="text" name="email"/>
        <br/><br/>
        Admissão:<br/>
        <input type="text" name="admissao" id="admissao"/>
        <br/><br/>
        Cargo:<br/>
        <?php
        //abrir a conexão com o banco
        include_once'conexao.php';
        $sql = "select * from cargo";
        $rs = mysqli_query($con,$sql);
        if(mysqli_num_rows($rs))        
        ?>
        <select name="cargo">
            <?php while ($row = mysqli_fetch_array($rs)){
                ?> <option value="<?php echo $row["idcargo"];?>">
                   <?php echo $row["nomecargo"];?>
            </option>

            <?php
            }?>
            
        </select>
        <!-- Iremos aqui entrar no php e buscar os dados do cargo no banco de dados -->        
        <br/><br/>
        Cidade:<br/>
        <input type="text" name="cidade"/>
        <br/><br/>
        Estado:<br/>
        <select name="estado">
            <option value="">--Selecione</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="SP">São Paulo</option>
            <option value="MG">Minas Gerais</option>
            <option value="ES">Espírito Santo</option>
        </select>    
        <br/><br/>
        <input type="submit" value="Cadastrar Funcionáriio" id="btnenviar"/>      
    </form>
</body>
</html>