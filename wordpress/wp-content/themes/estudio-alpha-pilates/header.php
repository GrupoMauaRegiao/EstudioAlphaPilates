<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="estudio alpha pilates">
    <meta name="description" content="Descrição...">
    <meta name="author" content='Grupo Mauá e Região de Comunicação'>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/imagens/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/styles.min.css">
    <title>✔ <?php bloginfo("name"); ?> :: Início</title>
  </head>
  <body class="<?php echo definirClassesParaPaginas(); ?>">

    <section class="layout">
      <header class="<?php echo definirClasseHeader(); ?>">
        <section class="topo">
          <a href="<?php bloginfo('url'); ?>" title="Estúdio Alpha Pilates">
            <section class="logotipo"></section>
          </a>
          <section class="frase" title="Respeito à tradição"></section>
        </section>

        <?php echo exibirLinha(); ?>
        
        <section class="menu">
          <?php echo exibirFundoMenu(); ?>
          <nav>
            <ul>
              <li><a href="<?php bloginfo('url'); ?>">Início</a></li>
              <?php echo criarMenu(); ?>
            </ul>
          </nav>
        </section>

        <?php echo definirBanners(); ?>

      </header>