/* 
  global jQuery 
*/
~(function($) {
  function menuToggle() {
    $('.main-menu-open').click(function() {
      $('.main-menu-container').addClass('active')
    })

    $('.main-menu-close').click(function() {
      $('.main-menu-container').removeClass('active')
    })
  }

  function clickOffMenuClosesIt() {
    $(document).click(function(e) {
      var isMenuClick = $(e.target).closest('.main-menu-container.active').length
      var isMenuOpening = $(e.target).closest('.main-menu-open').length
      if (isMenuClick == 0 && isMenuOpening == 0) {
        $('.main-menu-container').removeClass('active')
      }
    })
  }

  function smoothScroller() {
    $('a[href^="#"]').click(function(e) {
      var target = $(e.target).attr('href')

      if ($(target).length) {
        e.preventDefault()
        $('html, body').animate({ scrollTop: $(target).offset().top }, 600)
      }

    })
  }

  function stickyMenu() {
    var menuTop = $('.utility-bar').offset().top
    var isSticky = false
    var clone

    $(window).scroll(function() {
      var scrollHeight = $(this).scrollTop()
      if (scrollHeight >= menuTop && !isSticky) {
        clone = $('.utility-bar').clone()
        $('.utility-bar').addClass('sticky').parent().append(clone)
        isSticky = true
      }
      else if (scrollHeight <= menuTop && isSticky) {
        clone.remove()
        $('.utility-bar').removeClass('sticky')
        isSticky = false
      }
    })
  }

  function docReady() {
    clickOffMenuClosesIt()
    menuToggle()
    smoothScroller()
    stickyMenu()
  }

  $(document).ready(docReady)
})(jQuery)
