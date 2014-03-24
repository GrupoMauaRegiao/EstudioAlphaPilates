Estudio = {}

Estudio.apps =
  identificarUserAgent: ->
    # Identifica e exibe na tag HTML o user agent do usuário.

    doc = document.documentElement
    doc.setAttribute 'data-useragent', navigator.userAgent
    return

  controlarOutrosPosts: ->
    # Controla exibição dos posts antigos, escondendo-os e mostrando-os conforme
    # o clique do usuário. A ano atual não se aplicou o efeito.

    balao = document.querySelectorAll '.cabecalho-lista-ordenada'

    if balao
      lista = document.querySelectorAll '.lista-ordenada'
      cabecalho = document.querySelectorAll '.cabecalho-lista-ordenada'
      ponta = document.querySelectorAll '.ponta-balao-ano'
      laranja = 'rgb(255, 153, 52)'
      cinza = 'rgb(150, 150, 150)'

      _toggle = (i) ->
        display = lista[i].getAttribute 'class'
        if display isnt 'lista-ordenada esconder'
          lista[i].setAttribute 'class', 'lista-ordenada esconder'
          cabecalho[i].style.background = laranja
          ponta[i].style.borderColor = laranja + 'transparent transparent transparent'
        else
          lista[i].setAttribute 'class', 'lista-ordenada mostrar'
          cabecalho[i].style.background = cinza
          ponta[i].style.borderColor = cinza + 'transparent transparent transparent'
        return

      for item, i in balao by 1
        if i isnt 0
          lista[i].setAttribute 'class', 'lista-ordenada esconder'
          balao[i].addEventListener 'click', _toggle.bind null, i
    return

  destacarLinkAtual: ->
    # Implementa balão de diálogo como background no menu das páginas, exceto na
    # inicial.

    links = document.querySelectorAll 'nav ul li'
    paginaAtual = document.querySelector('body').getAttribute 'class'
    classe = paginaAtual.split " "
    paginas = [
        'pagina-estudio'
        'pagina-pilates'
        'pagina-blog'
        'pagina-fotos'
        'pagina-videos'
        'pagina-contato'
    ]

    pontaBalao = document.createElement 'section'
    pontaBalao.setAttribute 'class', 'ponta-balao'

    for pagina, i in paginas by 1
      if classe[0] is paginas[i]
        links[i + 1].setAttribute 'class', 'atual'
        links[i + 1].appendChild pontaBalao
    return

  paginadorFotos: ->
    # Adiciona paginador para a exibição de fotos utilizando a biblioteca List.js

    fotos = document.querySelector '.list'
    if fotos
      options =
        valueNames: ['']
        page: 8
        plugins: [ ListPagination {} ]
      paginacao = new List 'fotos', options
    return

  paginadorVideos: ->
    # Adiciona paginador para a exibição de vídeos utilizando a biblioteca List.js

    videos = document.querySelector '.list'
    if videos
      options =
        valueNames: ['']
        page: 8
        plugins: [ ListPagination {} ]
      paginacao = new List 'videos', options
    return

  youTubeAPI: (response) ->
    # Obtém JSON object via YouTube API v3 e cria uma lista de links para os vídeos
    # obtidos no canal selecionado. A url completa é a seguinte:
    #
    # URL: https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=CHANNEL_API&maxResults=50&order=date&key=GOOGLE_YT_API&callback=Estudio.apps.youTubeAPI
    #
    # O último parâmetro é o `callback`, ou seja, a função que receberá o
    # JSON object.

    videos = document.querySelector '.list'
    ytObj = response.items
    todosVideos = ''
    len = ytObj.length - 1

    for video, i in ytObj by 1
      todosVideos += '
          <section class="video"
                   style="background: url(' + ytObj[i].snippet.thumbnails.high.url + ') no-repeat;"
                   title="' + ytObj[i].snippet.title + '">
            <a class="fancy fancybox.iframe"
               href="https://www.youtube.com/embed/' + ytObj[i].id.videoId + '?autoplay=1"
               title="' + ytObj[i].snippet.title + '"></a>
          </section>' if i < len
    videos.innerHTML = todosVideos
    $('.fancy').fancybox() if $ '.fancy'
    return

  enviarEmail: ->
    formulario = document.querySelector '.formulario-contato form'
    if formulario
      cNome = document.querySelector '#nome'
      cEmail = document.querySelector '#e-mail'
      cMsg = document.querySelector '#mensagem'
      msgSucesso = document.querySelector '.mensagem-sucesso'
      botao = document.querySelector '#enviar'

      botao.addEventListener 'click', (evt) ->
        xhr = new XMLHttpRequest()
        regexEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/
        msg = ''

        if cNome.value isnt ''
          if cEmail.value isnt '' and cEmail.value.match(regexEmail) isnt null
            if cMsg.value isnt ''
              msg += 'nome=' + encodeURI(cNome.value)
              msg += '&e-mail=' + encodeURI(cEmail.value)
              msg += '&mensagem=' + encodeURI(cMsg.value)

              xhr.open formulario.method, formulario.action + '?' + msg, true
              xhr.send msg
              xhr.onreadystatechange = ->
                if xhr.readyState is 4 and xhr.status is 200
                  formulario.style.display = 'none'
                  msgSucesso.setAttribute 'class', 'mensagem-sucesso exibir'
                return
            else
              cMsg.focus()
              cMsg.setAttribute 'class', 'erro'
          else
            cEmail.focus()
            cEmail.setAttribute 'class', 'erro'
        else
          cNome.focus()
          cNome.setAttribute 'class', 'erro'

        evt.preventDefault()
        evt.stopPropagation()
        return
    return

do ->
  Estudio.apps.enviarEmail()
  Estudio.apps.destacarLinkAtual()
  Estudio.apps.paginadorFotos()
  Estudio.apps.identificarUserAgent()
  Estudio.apps.controlarOutrosPosts()
  return
