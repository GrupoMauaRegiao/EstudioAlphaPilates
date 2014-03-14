Estudio = {}

Estudio.apps =
  identificarUserAgent: ->
    doc = document.documentElement
    doc.setAttribute 'data-useragent', navigator.userAgent
    return

  controlarOutrosPosts: ->
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

  ajustarEfeitoFotos: ->
    html = document.querySelector 'html'
    useragent = html.getAttribute 'data-useragent'
    efeito = document.querySelectorAll '.fotos .foto .efeito-hover'

    if efeito[0]
      if useragent.match 'Firefox'
        for item, i in efeito
          efeito[i].style.top = '0'
    return

do ->
  Estudio.apps.identificarUserAgent()
  Estudio.apps.ajustarEfeitoFotos()
  Estudio.apps.controlarOutrosPosts()
  return
