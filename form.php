<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de salário</title>
</head>

<body>
  <form action="handler.php" method="post">
    <div>
      <label for="nome">Nome: </label>
      <input type="text" name="nome" id="nome" required />
    </div>
    <div>
      <label for="quantidade_horas">Quantidade de horas: </label>
      <input type="number" name="quantidade_horas" id="quantidade_horas" required />
    </div>
    <div>
      <label for="valor_hora">Valor da hora: </label>
      <input type="number" name="valor_hora" id="valor_hora" required />
    </div>
    <div>
      <label for="valor_desconto">Descontos: </label>
      <input type="number" name="valor_desconto" id="valor_desconto" required />
    </div>
    <div>
      <input type="reset" value="Limpar" />
      <input type="submit" value="Calcular" />
    </div>
  </form>
</body>

</html>