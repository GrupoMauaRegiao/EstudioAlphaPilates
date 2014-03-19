      <section class="conteudo">
        <section class="lista-posts">
          <section class="cabecalho-lista-posts">
            <h1>Todos os posts</h1>
          </section>

          <?php if (date("Y") == "2015") { // Não é a melhor forma de fazer isso :( ?>
            <section class="lista-ordenada-ano">
              <section class="ano">
                <section class="cabecalho-lista-ordenada">
                  <h2>2015</h2>
                </section>
                <section class="ponta-balao-ano"></section>
                <section class="lista-ordenada">
                  <ul>
                    <?php query_posts("orderby=asc&category_name=blog&year=2005"); ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <li>
                        <span class="data">
                          <?php echo get_the_date("d/m"); ?>
                        </span>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                          <?php the_title(); ?>
                        </a>
                        <span class="hora">
                          [<?php the_time(); ?>]
                        </span>
                      </li>
                    <?php endwhile; else: ?>
                      <li>Nada foi publicado ainda.</li>
                    <?php endif; ?>
                  </ul>
                </section>
              </section>
            </section>
          <?php } ?>

          <section class="lista-ordenada-ano">
            <section class="ano">
              <section class="cabecalho-lista-ordenada">
                <h2>2014</h2>
              </section>
              <section class="ponta-balao-ano"></section>
              <section class="lista-ordenada">
                <ul>
                  <?php query_posts("orderby=asc&category_name=blog"); ?>
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <li>
                      <span class="data">
                        <?php echo get_the_date("d/m"); ?>
                      </span>
                      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                      </a>
                      <span class="hora">
                        [<?php the_time(); ?>]
                      </span>
                    </li>
                  <?php endwhile; else: ?>
                    <li>Nada foi publicado ainda.</li>
                  <?php endif; ?>
                </ul>
              </section>
            </section>
          </section>

        </section>
      </section>