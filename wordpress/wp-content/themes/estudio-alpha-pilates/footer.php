      <footer class="<?php echo definirClasseParaHome(); ?>">
        <section class="informacoes-contato">
          <section class="telefone">
            <section class="icone-telefone" title="Telefone"></section>
            <section class="numero">
              <p><span>+55 11</span> 2564-1661</p>
            </section>
          </section>

          <section class="endereco">
            <address title="Endereço">
              <p>R. Campos Sales, 199 - Centro - Mauá - SP.</p>
            </address>
          </section>

          <section class="endereco-e-mail">
            <section class="icone-e-mail" title="E-mail"></section>
            <section class="e-mail">
              <a href="mailto:contato@estudioalpha.com.br">contato@estudioalpha.com.br</a>
            </section>
          </section>
        </section>
      </footer>
    </section>

    <?php wp_reset_query(); ?>
    <?php wp_footer(); ?>

    <?php if ((is_page("fotos")) || (is_page("videos"))) { ?>
    <script src="<?php bloginfo('template_url'); ?>/scripts/libs/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/libs/list.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/scripts/libs/list.pagination.min.js"></script>
    <?php } ?>

    <?php if (is_page("fotos")) { ?>
    <script src="<?php bloginfo('template_url'); ?>/scripts/libs/lightbox-2.6.min.js"></script>
    <?php } ?>
    
    <?php if (is_page("videos")) { ?>
    <script src="<?php bloginfo('template_url'); ?>/scripts/libs/jquery.fancybox.pack.js"></script>
    <script async="" src="https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCqiQNOIlCb3CMf1Hoc8YY0Q&maxResults=50&order=date&key=AIzaSyDE3RNDKPDE9Qy-L4ZFHu33Zqvev1ootsY&callback=Estudio.apps.youTubeAPI"></script>
    <script>window.onload=function(){Estudio.apps.paginadorVideos();};</script>
    <?php } ?>

    <script src="<?php bloginfo('template_url'); ?>/scripts/scripts.js"></script>

  </body>
</html>