<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">

    <meta property="og:url" content="<?php echo definirUrlAtual(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="✔ <?php bloginfo('name'); ?><?php echo definirTituloPagina(); ?>">
    <meta property="og:description" content="Sejam muito bem-vindos ao Estúdio Alpha Pilates.">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/screenshot.png">

    <meta name="keywords" content="estudio alpha pilates, mauá, pilates, condicionamento físico, educação física, joseph pilates, grupo maua e regiao, revista maua, videos pilates, fotos pilates, thaisa paulino">
    <meta name="description" content="Sejam muito bem-vindos ao Estúdio Alpha Pilates.">
    <meta name="author" content="Grupo Mauá e Região de Comunicação">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/imagens/favicon.ico">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/libs/lightbox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/libs/jquery.fancybox.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/styles.min.css">
    <title>✔ <?php bloginfo("name"); ?><?php echo definirTituloPagina(); ?></title>
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