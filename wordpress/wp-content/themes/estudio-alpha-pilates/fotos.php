      <section class="conteudo">
        <section class="exibicao-fotos">
          <section class="cabecalho-fotos">
            <h1>Fotos</h1>
          </section>

          <section class="fotos">
              <?php
              $index = 0;
              query_posts("orderby=asc&showposts=8&category_name=fotos");
              if (have_posts()) : while (have_posts()) : the_post();
                $index += 1;
              ?>
              <section class="foto" style="background: url('<?php echo get_post_meta($post -> ID, "Foto", true); ?>') no-repeat">
                <a href="<?php echo get_post_meta($post -> ID, "Foto", true); ?>"
                   data-lightbox="<?php echo "imagem-" . $index; ?>"
                   title="<?php the_title(); ?>"></a>
              </section>
            <?php endwhile; else: ?>
              <p>Sem fotos por enquanto</p>
            <?php endif; ?>
          </section>
        </section>
      </section>