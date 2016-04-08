<?php
  $conexao = mysqli_connect("127.0.0.1", "root", "9nirvana0", "WD43");
  $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
  while( $produto = mysqli_fetch_array($dados)):
?>

<?php
  $cabecalho_title = $produto["nome"];
  $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
  include("_cabecalho.php");
?>

    <div class="produto-back">
      <div class="container">
        <div class="produto">
          <h1><?= $produto["nome"]?></h1>
          <p>por apenas <?= $produto["preco"]?></p>

          <div class="fb-like" data-href="http://mirrorfashion.net/loja"
              data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
          <form action="checkout.php" method="POST">
            <input type="hidden" name="id" value="<?= $produto["id"] ?>">

            <fieldset class="cores">
              <legend>Escolha a cor:</legend>

              <input type="radio" name="cor" value="verde" id="verde" checked>
              <label for="verde">
                <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png">
              </label>

              <input type="radio" name="cor" value="rosa" id="rosa">
              <label for="rosa">
                <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png">
              </label>

              <input type="radio" name="cor" value="azul" id="azul">
              <label for="azul">
                <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png">
              </label>
            </fieldset>
            <fieldset class="tamanhos">
              <legend>Escolha o tamanho:</legend>
              <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
              <output for="tamanho" name="valortamanho">42</output>
            </fieldset>

            <input type="submit" class="comprar" value="Comprar">
          </form>
        </div>
        <div class="detalhes">
          <h2>Detalhes do produto</h2>

          <p><?= $produto["descricao"]?></p>
          <table>
            <thead>
              <tr>
                <th>Característica</th>
                <th>Detalhe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Modelo</td>
                <td>Cardigã 7845</td>
              </tr>
              <tr>
                <td>Material</td>
                <td>Algodão e poliester</td>
              </tr>
              <tr>
                <td>Cores</td>
                <td>Azul, Rosa e Verde</td>
              </tr>
              <tr>
                <td>Lavagem</td>
                <td>Lavar a mão</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div id="fb-root"></div>
    <?php include("_rodape.php");?>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/produto.js"></script>
    <script src="js/less.js"></script>
  </body>
</html>
