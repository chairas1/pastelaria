<!doctype html>
<html lang="pt-bt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrando Pasteis</title>
  </head>
  <body>
    <h1>Cadastre seus Pasteis aqui!</h1>
    <form method="POST" action="processa.php">
        <input type="text" name="sabor" placeholder="Sabor" maxlength="255">
        <input type="float" name="valor" placeholder="Valor" maxlength="255">
        <input type="text" name="ingredientes" placeholder="Ingredientes">
        <input type="submit" value="Finalizar cadastro">
    </form>
    <a href="cardapio.php"><button type="button" class="btn btn">Cardapio</button></a>
  </body>
</html>