<?php
$a = 365;
$b = 947;
$c = $a + $b;
echo "O valor da soma {$a} + {$b} = {$c}.\n";
//Resultado é 10.

echo "--------------------------------------------\n";

$nome = "LiviaBrag";
If($nome == "LiviaBrag"){
  echo "O usuário {$nome} é válido!\n";
}
else{
  echo "O usuário {$nome} é inválido!\n";
}

echo "--------------------------------------------\n";

$valor = 10;
switch($valor){
  case "1":
    echo "bom dia!\n";
    break;
  case "2":
    echo "boa tarde!\n";
    break;
  default:
    echo "boa noite!\n";
    break;
}

echo "--------------------------------------------\n";

for($i = 0; $i < 10; $i++){
  echo "Número: {$i} \n";
}

echo "--------------------------------------------\n";

$i = 0;
do{
  echo "Número: {$i}\n";
  $i++;
}while($i <= 10);

echo "--------------------------------------------\n";

$nomes = array("Ana", "Julia", "Caio", "Gabi", "Felipi");
echo "O nome da quarta pessoa é: {$nomes[3]}\n";

echo "--------------------------------------------\n";
sort($nomes);
for($i = 0; $i < 5; $i++){
  if($i == 3){
    echo "Quarta pessoa: {$nomes[$i]}\n";
  } else {
    echo "Nome: {$nomes[$i]}\n";
  }
}

echo "--------------------------------------------\n";

$nomes = array( 1 => "Ana", 2 => "Gabi");
echo "Os nomes que aparecem no momento são:\n";
foreach($nomes as $n){
  echo $n. "\n";
}

echo "--------------------------------------------\n";

function exibirNome(){
  echo "Meu nome é Lívia!\n";
}
echo exibirNome();

echo "--------------------------------------------\n";

?>
