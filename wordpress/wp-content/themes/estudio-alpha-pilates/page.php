<?php
get_header();
if (is_page("estudio")) {
  include "estudio.php";
} elseif(is_page("pilates")) {
  include "pilates.php";
} elseif (is_page("blog")) {
  include "blog.php";
} elseif (is_page("fotos")) {
  include "fotos.php";
} elseif (is_page("videos")) {
  include "videos.php";
} elseif (is_page("contato")) {
  include "contato.php";
}
get_footer();
?>