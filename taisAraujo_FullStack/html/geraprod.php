<?php 

    $consulta = 'select * from produtos;';
    $resultado = $connect->query($consulta);

    $imprimir = $resultado->fetch_assoc();

    echo "<span class='box-produto' id='Nokia'>
    <img src='https://s2.glbimg.com/fyC0QV72cee07cKqHTs3f_ZFWi0=/0x0:695x401/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2017/9/4/j6fITqTW2nce3A8ZA3IQ/2-nokia-3310.jpg'
         width='105px' height='100px' onclick='destaque(this)'>
    <p>{$imprimir['produto']}</p>
    <p>{$imprimir['descricao']}</p>
    <p><font size='2', color='black'><strike>R$ 65,80</strike></font><br>
        <font size= '4', color='red'>R$ {$imprimir['preco']}</font></p> 
<span>      
        <button class='btn-produtos' onclick='adicionadoCarrinho()'>
            Comprar</button></span>
        <span><button class='btn-produtos' onclick='gostouNe()'>WishList</button></span>
        <hr>
</span>";

    