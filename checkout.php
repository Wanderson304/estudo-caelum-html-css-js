<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
      .navbar {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Mirror Fashion</a>
        <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
          Menu
        </button>
      </div>
      <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Ajuda</a></li>
        <li><a href="#">Perguntas frequentes</a></li>
        <li><a href="#">Entre em contato</a></li>
      </ul>
    </nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Ótima escolha!</h1>
        <p>Obrigado por comprar na Mirror Fashion!
        Preencha seus dados para efetivar a compra.</p>
      </div>
    </div>
    <?php
      $conexao = mysqli_connect("127.0.0.1", "root", "", "mirror-fashion");
      $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
      $produto = mysqli_fetch_array($dados);
    ?>

    <div class="container">
      <div class= "row">
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h2 class="panel-title">Sua compra</h2>
            </div>
            <div class="panel-body">
              <img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" class="img-thumbnail img-responsive hidden-xs">
              <dl>
                <dt>Produto</dt>
                <dd><?= $produto["nome"] ?></dd>
                <dt>Cor</dt>
                <dd><?= $_POST["cor"] ?></dd>
                <dt>Tamanho</dt>
                <dd><?= $_POST["tamanho"] ?></dd>
                <dt>Preço</dt>
                <dd><?= $produto["preco"]  ?></dd>
              </dl>
            </div>
          </div>
        </div>
        <form class="col-sm-8">
          <div class="row">
            <fieldset class="col-md-6">
              <legend>Dados pessoais</legend>

              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
              </div>

              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" value="sim" name="spam" checked>
                  Quero receber os e-mails com as promoções da Mirror Fashion
                </label>
              </div>
            </fieldset>

            <fieldset class="col-md-6">
              <legend>Cartão de crédito</legend>
              <div class="form-group">
                <label for="numero-cartao">Número do cartão</label>
                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
              </div>

              <div class="form-group">
                <label for="bandeira-cartao">Bandeira</label>
                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                  <option value="master">MasterCard</option>
                  <option value="visa">VISA</option>
                  <option value="amex">American Express</option>
                </select>
              </div>

              <div class="form-group">
                <label for="validade-cartao">Validade</label>
                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
              </div>
            </fieldset>
          </div>

          <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar Pedido
          </button>
        </form>
      </div>
    </div>
    <script src="js/bootstrap.js"></script>

  </body>
</html>
