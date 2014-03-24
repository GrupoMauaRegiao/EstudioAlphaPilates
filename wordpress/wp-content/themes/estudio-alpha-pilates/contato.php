      <section class="conteudo">
        <section class="contato">
          <section class="cabecalho-contato">
            <h1>Fale conosco</h1>
          </section>

          <section class="formulario-contato">
            <form action="<?php bloginfo('template_url'); ?>/enviar-mensagem.php" method="get">
              <section class="nome">
                <input type="text" id="nome" name="nome" placeholder="Nome">
              </section>

              <section class="linha-central"></section>

              <section class="e-mail">
                <input type="text" id="e-mail" name="e-mail" placeholder="E-mail">
              </section>

              <section class="mensagem">
                <textarea id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
              </section>

              <section class="ponta-balao-enviar"></section>
              <section class="enviar">
                <input type="button" id="enviar" value="Enviar" name="enviar">
              </section>
            </form>

            <section class="mensagem-sucesso esconder">
              <p>Mensagem enviada com sucesso. Obrigada!</p>
            </section>
          </section>

          <section class="localizacao-contato">
            <section class="ponta-balao-localizacao-contato"></section>
            <section class="conteudo-localizacao-contato">
              <section class="icone-telefone" title="Telefone"></section>
              <section class="telefone">
                <p><span>+55 11</span> 2564-1661</p>
              </section>

              <address>
                <p>Rua Campos Sales, 199 - Centro - Mauá - SP.</p>
              </address>

              <section class="icone-e-mail" title="E-mail"></section>
              <section class="e-mail">
                <a href="mailto:contato@estudioalpha.com.br">contato@estudioalpha.com.br</a>
              </section>
            </section>
          </section>
        </section>
      </section>