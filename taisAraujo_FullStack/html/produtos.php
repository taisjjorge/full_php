<?php
    include 'connect.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de produtos</title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 

</head>
<body>
    <header>
        <!-- menu -->
    <?php
        include_once('menu.html');
    ?>
        <br><br>
    </header>

    <main class="ladoAlado" id="main-prod">
    
    <aside id="aside-prod">
        
        <ul id="categorias">
            <p class="filtro" onclick="semFiltro('limpar')">Todas as categorias</p>
            <li class="filtro" onclick="exibirCategoria('Motorola')">Motorola(4)</li>
            <li class="filtro" onclick="exibirCategoria('Nokia')">Nokia(2)</li>
            <li class="filtro" onclick="exibirCategoria('Siemens')">Siemens(1)</li>
            <li class="filtro" onclick="exibirCategoria('SonyEricsson')">SonyEricsson(2)</li>
        </ul>
    </aside>

    <section class="vitrine">
        
    <?php

    $sql= "select * from produtos"; 
    $result= $connect->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
        ?>
        <div class="ladoAlado">
            <span class="box-produto" id="<?php echo $rows['categoria']?>">
                <img src=" <?php echo $rows['imagem']?>"
                    width="105px" height="100px" onclick="destaque(this)" >
                <p><?php echo $rows['produto']?></p>
                <p><?php echo $rows['descricao']?></p>
                <p><font size="2", color="black"><strike>R$ 65,80</strike></font><br>
                    <font size= "4", color="red"><?php echo $rows['preco']?></font></p> 
            <span>      
                    <button class="btn-produtos" onclick="adicionadoCarrinho()">
                        Comprar</button></span>
                    <span><button class="btn-produtos" onclick="gostouNe()">WishList</button></span>
                    <hr>
            </span>
    <?php 
        }
    } else {
        echo "Nenhum produto cadastrado.";
    } 
    ?>
        
    </section>

<br><br>
</main>
    
<footer>
    <hr>
    <center style="background-color: rgb(220, 20, 60);"><br>
        <font color="white" face="Arial">&copy;Taís Araújo - Recode Pro</font>
        <br><br><br><br><br></center>
</footer>
<script src="index.js"></script>
</body>
</html>