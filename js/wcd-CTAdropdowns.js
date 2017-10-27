$(function() {
//Accordion Menu Manager
  wcdAccordionMenu2 = {
    model : {
      animationInProgress : false
    },

    init : function() {
      var flag = false;
      $('.CTAbutton').bind('touchstart click', function(){
        if (!flag) {
          flag = true;
          setTimeout(function(){ flag = false; }, 100);
          wcdAccordionMenu2.expandCollapse($(this));
        }
        return false
      });
    },

    expandCollapse : function(obj) {

          if (wcdAccordionMenu2.model.animationInProgress) return false;

          wcdAccordionMenu2.model.animationInProgress = true;
          var targetDiv = obj.next('.CTAdropdownList');

          if (obj.closest('.CTAlist').hasClass('show-menu')) {
            console.log('already has class show-menu');
            obj.closest('.CTAlist').removeClass('show-menu');

            targetDiv.slideUp(250,'linear',function() {
              wcdAccordionMenu2.model.animationInProgress = false;
            });
          }
          else {
            console.log('does not have class show-menu. adding...');
            obj.closest('.CTAlist').addClass('show-menu');
            targetDiv.slideDown(250,'swing'); 

            if($(window).width() !=768){ //do not jump on ipad
              $('html, body').animate({scrollTop: obj.offset().top - 62}, 500, 'swing', function() {
                wcdAccordionMenu2.model.animationInProgress = false;
              });
            }
            
          }
        }
      };

  var wcd_ctaInitiated2=false;

  function initAccordian2(){
    if($(window).width() <=767){
      if(wcd_ctaInitiated2==false){
        wcd_ctaInitiated2=true;
        wcdAccordionMenu2.init();
      }
      else{
        return 0;
      }
    }
  }

  initAccordian2();


});







$(function(){

  if($(window).width() >=768){
    $('.CTAmenu').setup_navigation();
  }
});

$.fn.setup_navigation = function(settings) {
  settings = $.extend({
    menuHoverClass: 'show-menu',
  }, settings);
  

  // Set tabIndex to -1 so that links can't receive focus until menu is open
  $(this).find('> li > a').next('ul').find('a').attr('tabIndex',-1);
  
  $(this).find('> li > a').hover(function(){
    $(this).closest('ul').find('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1);
  });
  $(this).find('> li > a').focus(function(){
    $(this).closest('ul').find('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1);
    $(this).next('ul').closest('.CTAlist').addClass(settings.menuHoverClass).find('a').attr('tabIndex',0);
  });
    
  // Hide menu if click or focus occurs outside of navigation
  $(this).find('a').last().keydown(function(e){ 
    if(e.keyCode == 9) {
      // If the user tabs out of the navigation hide all menus
      $('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1);
    }
  });
  $(document).click(function(){ $('.'+settings.menuHoverClass).removeClass(settings.menuHoverClass).find('a').attr('tabIndex',-1); });
  
  $(this).click(function(e){
    e.stopPropagation();
  });
}

