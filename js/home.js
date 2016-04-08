//opção 1 - Valida Form
// function validaBusca(){
//   if(document.querySelector('#q').value == ''){
//     //alert("Informe uma palavra ou texto que deseja encontrar!");
//     document.querySelector('#form-busca').style.background = 'red';
//     return false;
//   }
// }

//fazendo a associação da função com o evento
// document.querySelector('#form-busca').onsubmit = validaBusca;

//opção 2 - Valida Form

document.querySelector('#form-busca').onsubmit = function(){
  if(document.querySelector('#q').value == ''){
    document.querySelector('#form-busca').style.background = 'red';
    return false;
  }
}

var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner(){
  bannerAtual = (bannerAtual + 1) % 2;
  document.querySelector('.banner img').src = banners[bannerAtual];
}

document.querySelector('#pause').onclick = function(){
  clearInterval(timer);
}

document.querySelector('#play').onclick = function(){
  setInterval(trocaBanner, 4000);
}

var timer = setInterval(trocaBanner, 4000);


$('.novidades').addClass('painel-compacto');

$('.novidades button').click(function() {
  $('.novidades').removeClass('painel-compacto');
});
