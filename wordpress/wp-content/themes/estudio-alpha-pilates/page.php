<?php
get_header();
if (is_page("estudio")) {
  include "estudio.php";
} elseif(is_page("pilates")) {
  include "pilates.php";
} elseif (is_page("blog")) {
  include "blog.php";
}
get_footer();
?>