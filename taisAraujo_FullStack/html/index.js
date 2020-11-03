
function adicionadoCarrinho(){
    alert('Eba! Seu produto foi adicionado.');
}
function gostouNe(){
    alert('Hummmm.. gostou né?');
}

var itensFiltro = document.querySelectorAll('.filtro')
var produtos = document.querySelectorAll('.box-produto')

console.log(itensFiltro)
console.log(produtos)

function exibirCategoria(categoria){
    for(i=0; i<produtos.length; i++){
        if(categoria == produtos[i].id){
            produtos[i].style.display = 'block'
        } else {
            produtos[i].style.display = 'none'
        }
    }
}
function semFiltro(limpar){
    for(i=0; i<produtos.length; i++){
        produtos[i].style.display = 'block'
    }
}

// function exibirCategoria(categorias){
// let elementos = document.getElementsByClassName('.box-produto');
// console.log(elementos);
// for(var i=0; i=elementos.length; i++){
//     console.log(elementos[i].id);
//     if(categorias == elementos[i].id)
//     elementos[i].style.display ="block";
//     else
//     elementos[i].style.display ="none";
//     }
// }

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width ==240){
        imagem.width = 105
        imagem.height = 100
    }else{
    imagem.width= 240
    imagem.height = 240
    }
}

function enviado(){
    alert('Mensagem enviada com sucesso!');
}
function comprar(){
    alert('Já estamos processando o seu pedido...');
}
function gerarBoleto(){
    alert('Oba! O boleto para pagamento já foi enviado para o seu email');
}
function cadastroCliente(){
    alert('Cliente cadastrado!');
}