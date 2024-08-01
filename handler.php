<?php

if (!($_SERVER["REQUEST_METHOD"] == "POST")) {
  header("Location: ../form.php");
  exit();
}

$nome = htmlspecialchars($_POST["nome"]);
$quantidade_horas = htmlspecialchars($_POST["quantidade_horas"]);
$valor_hora = htmlspecialchars($_POST["valor_hora"]);
$valor_desconto = htmlspecialchars($_POST["valor_desconto"]);

if (
  empty($nome) or
  empty($quantidade_horas) or
  empty($valor_hora) or
  empty($valor_desconto)
) {
  echo "Por favor preencha todos os campos.";
  return;
}

$horas_maximo = 200;
$porcentagem_bonificacao = 0.95;
$valor_bonificacao = 100;

if ($quantidade_horas > $horas_maximo) {
  echo "Não é possível trabalhar mais de {$horas_maximo} horas.";
  return;
}

$total_bruto = $quantidade_horas * $valor_hora;
$total_salario = $total_bruto - $valor_desconto;
$porcentagem_trabalho = $quantidade_horas / $horas_maximo;

if ($porcentagem_trabalho >= $porcentagem_bonificacao) {
  $total_salario = $total_salario + $valor_bonificacao;
}

echo "O salário total do funcionário {$nome} é R$ {$total_salario}.";
