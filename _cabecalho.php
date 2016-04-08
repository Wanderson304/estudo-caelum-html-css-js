<!DOCTYPE html>
<html>
  <head>
    <title><?php print $cabecalho_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet/less" href="less/base.less"/>
    <?php print @$cabecalho_css;?>
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <header class="container">
      <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

      <p class="sacola">Nenhum item na sacola de compras</p>

      <nav class="menu-setores">
        <ul>
          <li><a href="#">Sua Conta</a></li>
          <li><a href="#">Lista de Desejos</a></li>
          <li><a href="#">Cartão Fidelidade</a></li>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="#">Ajuda</a></li>
        </ul>
      </nav>
    </header>
