//Exercicios opcionais

//Numeros impares entre 1 e 10
for(i=1; i<=10; i++){
  if (i%2 != 0){
    alert(i);
  }
}

//Soma de 1 a 100
var soma = 0;
for(i=1; i<=100; i++){
  soma += i;
}
alert(soma);

//Pessoas com nomes de 4 letras
  var pessoas = ["João", "José", "Maria", "Sebastião", "Antônio"];

for(i=0; i<pessoas.length; i++){
  if(pessoas[i].length <= 4){
    alert(pessoas[i]);
  }
}
