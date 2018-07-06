/* 
  global jQuery 
*/
~(function($){
  function menuToggle(){
    $('.main-menu-open').click(function(){
      $('.main-menu-container').addClass('active')
    })
    
    $('.main-menu-close').click(function(){
      $('.main-menu-container').removeClass('active')
    })
  }
  
  function docReady(){
    menuToggle()
  }
  
  $(document).ready(docReady)
})(jQuery)