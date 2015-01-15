$('.icon.icon-list2').on 'click', ->
  if getPlatform() is 'smartphone vertical' || getPlatform() is 'smartphone horizontal'
    if $('.top-nav').hasClass 'relative'
      $('.top-nav span').remove()
      $('.top-nav').removeClass 'relative'
      $('.top-nav').removeClass 'desktop-nav'
    else
      $('.top-nav').addClass 'relative'
      $('.top-nav').addClass 'desktop-nav'
  return