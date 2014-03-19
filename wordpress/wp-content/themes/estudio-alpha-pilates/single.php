<?php get_header(); ?>

      <section class="conteudo">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="conteudo-textual">
            <section class="titulo-pagina">
              <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                <?php the_title(); ?>
              </a>
            </section>

            <?php if (get_post_meta($post -> ID, "Imagem para o post", true)) { ?>
              <section class="imagem-artigo">
                <img src="<?php echo get_post_meta($post -> ID, 'Imagem para o post', true); ?>"
                     alt="Imagem: <?php echo strtolower(get_the_title()); ?>"
                     title="Imagem: <?php echo strtolower(get_the_title()); ?>" />
              </section>
            <?php } ?>

            <section class="data-publicacao">
              <p title="Publicado em <?php echo get_the_date(); ?> às <?php echo get_the_time(); ?>">Publicado em <?php echo get_the_date(); ?> às <?php echo get_the_time(); ?> por <?php the_author_meta("user_firstname"); ?> <?php the_author_meta("user_lastname"); ?></p>
            </section>

            <section class="texto-conteudo">
              <?php the_content(); ?>
            </section>
          </article>
        <?php endwhile; else: ?>
          <article class="conteudo-textual">
            <section class="titulo-pagina">
              <h1>Sem posts por enquanto</h1>
            </section>
          </article>
        <?php endif; ?>

        <section class="veja-tambem">
          <section class="header-veja-tambem">
            <section class="balao">
              <h2>Veja também</h2>
            </section>
            <section class="ponta-balao-veja-tambem"></section>
          </section>

          <section class="lista-artigos">
            <ul>
              <?php
              $id = $post -> ID;
              query_posts(
                  array(
                      "orderby" => "asc",
                      "showposts" => 3,
                      "category_name" => "blog",
                      "post__not_in" => array($id)
                  )
              );

              if (have_posts()) : while (have_posts()) : the_post(); 
              ?>
                <li>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                  </a>
                </li>
              <?php endwhile; else: ?>
                <li>Nada foi publicado ainda.</li>
              <?php endif; ?>
            </ul>
          </section>

          <section class="botao-ver-todos">
            <a href="outros-posts.html" title="Ver todos os posts">Ver todos os posts</a>
          </section>
        </section>

      </section>

<?php get_footer(); ?>