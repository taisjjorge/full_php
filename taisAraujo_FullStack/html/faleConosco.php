<?php
         include 'connect.php';
    
        if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            $sql = "insert into comentarios (nome, email, mensagem) 
            values('$nome', '$email', '$mensagem')";
            $result = $connect->query($sql);
        } else {
            echo "olá mundo";
        }
        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
</head>
<body id="faleConoscoBack">
    <header>
        <!-- menu -->
    <?php
        include_once('menu.html');
    ?>
    <br><br><br>
    </header>
    <main>
            <center>
                <form method="POST" action="" id="formSugestao"> 
                    <h5 style="text-align: center;font-size: 15px;"><font face:"Arial">Deixe sua mensagem:</font></h5>
                    <input id="nome" type="text" name="nome"placeholder="Nome">
                    <input id="email" type="email" name="email" placeholder="E-mail"><br>
                    <label for="tipo">Encaminhar para:</label>
                    <input type="radio" id="financeiro" value="Financeiro" name="tipo">
                    <label for="financeiro">Financeiro</label>
                    <input type="radio" id="operacional" value="Operacional" name="tipo">
                    <label for="financeiro">Operacional</label>
                    <input type="radio" id="outros" value="Operacional" name="tipo">
                    <label for="financeiro">Outros</label>
                    
                    <textarea id="mensagem" name="mensagem" style="width: 130mm; height: 80mm;"> Conta tudo:</textarea> <br>
                    <input id= "btn-enviar" type="submit" value="Enviar" onclick="enviado()">
                
                
             </form>               
        </center>
    </main>
    <footer>
        <hr>
        <center style="background-color: rgb(220, 20, 60);"><br>
            <font color="white" face="Arial">&copy;Taís Araújo - Recode Pro</font>
            <br><br><br><br></center>
    </footer>
    <script src="index.js"></script>
</body>
</html>