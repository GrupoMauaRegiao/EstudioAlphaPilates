<?php
function criarMenu() {
  $paginas = wp_list_pages("title_li=");
  return $paginas;
}

function definirClassesParaPaginas() {
  if (is_page("estudio")) {
    $classe = "pagina-estudio";
  } elseif (is_page("pilates")) {
    $classe = "pagina-pilates";
  } elseif (is_page("blog")) {
    $classe = "pagina-blog";
  } elseif (is_page("todos-os-posts")) {
    $classe = "pagina-todos-os-posts";
  } elseif (is_page("fotos")) {
    $classe = "pagina-fotos";
  } elseif (is_page("videos")) {
    $classe = "pagina-videos";
  } elseif (is_page("contato")) {
    $classe = "pagina-contato";
  }
  return $classe;
}

function definirClassesParaBanners() {
  if (is_page("estudio")) {
    $classe = "banner-estudio";
  } elseif (is_page("pilates")) {
    $classe = "banner-pilates";
  } elseif (is_page("blog")) {
    $classe = "banner-blog";
  } elseif (is_page("todos-os-posts")) {
    $classe = "banner-todos-os-posts";
  } elseif (is_page("fotos")) {
    $classe = "banner-fotos";
  } elseif (is_page("videos")) {
    $classe = "banner-videos";
  } elseif (is_page("contato")) {
    $classe = "banner-contato";
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
?>