<?php
function criarMenu() {
  $paginas = wp_list_pages("title_li=&exclude=-59");
  return $paginas;
}

function definirClassesParaPaginas() {
  if (is_home()) {
    $classe = "";
  } elseif (is_page("estudio")) {
    $classe = "pagina-estudio";
  } elseif (is_page("pilates")) {
    $classe = "pagina-pilates";
  } elseif (is_page("blog")) {
    $classe = "pagina-blog";
  } elseif (is_page("outros-posts")) {
    $classe = "pagina-outros-posts";
  } elseif (is_page("fotos")) {
    $classe = "pagina-fotos";
  } elseif (is_page("videos")) {
    $classe = "pagina-videos";
  } elseif (is_page("contato")) {
    $classe = "pagina-contato";
  } else {
    $classe = "pagina-blog";
  }
  return $classe;
}

function definirClassesParaBanners() {
  if (is_home()) {
    $classe = "";
  } elseif (is_page("estudio")) {
    $classe = "banner-estudio";
  } elseif (is_page("pilates")) {
    $classe = "banner-pilates";
  } elseif (is_page("blog")) {
    $classe = "banner-blog";
  } elseif (is_page("outros-posts")) {
    $classe = "banner-outros-posts";
  } elseif (is_page("fotos")) {
    $classe = "banner-fotos";
  } elseif (is_page("videos")) {
    $classe = "banner-videos";
  } elseif (is_page("contato")) {
    $classe = "banner-contato";
  } else {
    $classe = "banner-blog";
  }
  return $classe;
}

function definirClasseParaHome() {
  return is_home() ?
         "home" :
         "";
}

function definirClasseHeader() {
  return !is_home() ?
         "pagina" :
         "";
}

function definirBanners() {
  if (!is_home()) {
    $html = "<section class='" . definirClassesParaBanners() . "' title='Pilates'></section>
             <section class='sombra'></section>";
  } else {
    $html = "";
  }
  return $html;
}

function exibirLinha() {
  return is_home() ?
         "<section class='linha'></section>" :
         "";
}

function exibirFundoMenu() {
  return !is_home() ?
         "<section class='fundo-menu'></section>" :
         "";
}

function formatarTitulo($titulo) {
  $length = strlen($titulo);
  $limiteCaracteres = 50;

  if ($length >= $limiteCaracteres) {
    $titulo = substr_replace(substr($titulo, 0, $limiteCaracteres), "_", $length);
  } else {
    $titulo = $titulo;
  }
  return $titulo;
}

function definirTituloPagina() {
  if (is_page()) {
    $titulo = " :: " . get_the_title();
  } elseif (is_single()) {
    $titulo = " :: Blog: " . get_the_title();
  } else {
    $titulo = " :: Início";
  }
  return $titulo;
}

function definirUrlAtual() {
  return "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}
?>