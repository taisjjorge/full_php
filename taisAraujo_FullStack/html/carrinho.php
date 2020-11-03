
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
</head>
<body>
    <header>
        <!-- menu -->
    <?php
        include_once('menu.html');
    ?>
    </header>
    <main>
        <br><h3> Ops! Parece que você ainda não adicionou produtos no carrinho ;(</h3>

        <div>
            <span>
                <p>Cadastre suas informações aqui</p>
                <input class="redondo" type="text" placeholder= "Insira o email">

                <input class="redondo" type="button" value="Cadastrar" onclick="cadastroCliente(this)">
            </span>
        </div>
        
        <div>
            <span>
                <p>Para pagamento com cartão de crédito</p>
                <input class="redondo" type="text" placeholder= "Insira o nome">
                <input class="redondo" type="number" placeholder= "Insira o número do cartão">
                <br><br>
                <input class="redondo" type="number" placeholder= "Insira o código de segurança">
                <input class="redondo" type="text" placeholder= "Insira a data de vencimento">
                <input class="redondo" type="button" value="Enviar" onclick="comprar(this)">  
            </span>
        </div>
        <div>
            <span>
                <p>Para pagamento com boleto bancário</p>
                <input class="redondo" type="text" placeholder= "Insira o email">
                <input class="redondo" type="button" value="Gerar boleto" onclick="gerarBoleto(this)">
            </span>
        </div>
        <br><br>
        <div id= foto>
            <img src="https://suryabrasil.com/media/wysiwyg/FormasdePagamento_3__1.png" width="250px", 
        alt="Formas de Pagamento">
        </div>
    </main>
    <footer style="background-color: rgb(220, 20, 60);">
        <hr>
        <center><br>
            <font color="white" face="Arial">&copy;Taís Araújo - Recode Pro</font>
        </center><br><br><br>
    </footer>
    <script src="index.js"></script>
</body>
</html>

