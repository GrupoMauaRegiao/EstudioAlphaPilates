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

      for item, i in balao
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

    for pagina, i in paginas
      if classe[0] is paginas[i]
        links[i + 1].setAttribute 'class', 'atual'
        links[i + 1].appendChild pontaBalao
    return

  paginador: ->
    fotos = document.querySelector '.list'
    if fotos
      options =
        valueNames: ['']
        page: 8
        plugins: [ ListPagination {} ]
      paginacao = new List 'fotos', options
    return

do ->
  Estudio.apps.destacarLinkAtual()
  Estudio.apps.paginador()
  Estudio.apps.identificarUserAgent()
  Estudio.apps.controlarOutrosPosts()
  return
