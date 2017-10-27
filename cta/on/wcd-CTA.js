
/** SET TRIGGERS HERE **/
$(window).load(function(){
  //variable used for AB Tests
  var flyoutAction = "click";
  /////////////////////////////////////////////////////////
  //set width and height on trigger div and image
  $(".flyout_trigger").each(function(index,element){
    jTarget = $(element);
    jTargetImage = jTarget.children(":first");
  });
  /////////////////////////////////////////////////////////
  $(".flyout_trigger").on(flyoutAction, function(){
    $('.carousel_ActiveSale_wrapper').trigger('pauseCarousel.jc'); //pause NewArrivals Carousel
    //$(".carousel_hp_wrapper").trigger('pauseCarousel.jc');
    var jTrigger = $(this);
    flyoutHeight = typeof jTrigger.data("flyoutheight")=="undefined" ? "275px" : jTrigger.data("flyoutheight");
    flyoutColor = typeof jTrigger.data("flyoutliacolor")=="undefined" ? "#006699" : jTrigger.data("flyoutliacolor"); 
    if(window.innerWidth < 768){
       flyoutHeight = jTrigger.data("flyoutheightsmall");
    }

    jTrigger.find(".flyout_links a").css("color",flyoutColor);
    
    flyoutWidth = 371;
    var triggerWidth = jTrigger.width();
    if(flyoutWidth < triggerWidth){
      var marginLeft = (triggerWidth - flyoutWidth) / 2;
      jTrigger.children(".flyout_links").css({"margin":"0px 0px 6px " + marginLeft + "px"});
    }

    jTrigger.children(".flyout_links").stop(true).show();
    jTrigger.children(".flyout_links").stop(true).animate({
        height:flyoutHeight
    });
  });
    
  $(".flyout_trigger, .flyout_links").mouseleave(function(evt){
    //fadeCarousel.startCarousel(); //start hp prim carousel
    $('.carousel_ActiveSale_wrapper').trigger('resumeCarousel.jc'); //start new arrivals carousel
    jTarget = $(evt.currentTarget);
    jTarget.find( ".flyout_links" ).stop(true).delay(1000).animate({
      height:"0px"
    },250,function(){
      jTarget.find(".flyout_links").hide();
    });
  });

});
/** END TRIGGERS **/

wcdAccordionMenu = {
    model : {
      animationInProgress : false
    },

    init : function() {
      $('.flyoutMenu-list').css({'display':'none'});
        $('.flyoutMenu-trigger').each(function() {
          var flyoutLabelImg = wcdAccordionMenu.getImgSrc($(this));
          $(this).find('.flyoutMenu-label p img').attr('src',flyoutLabelImg.closed);
        });

        $('.flyoutMenu-trigger').on('click',function(event) {
          wcdAccordionMenu.expandCollapse($(this));
        });
        
    },

    getImgSrc : function(obj) {
      if (obj.children('.flyoutMenu-label').hasClass('white')) {
        var openSrc = "http://www1.assets-gap.com/Asset_Archive/GPWeb/content/skava/assets/minus_w.png";
        var closedSrc = "http://www1.assets-gap.com/Asset_Archive/GPWeb/content/skava/assets/plus_w.png";
      }
      else {
        var openSrc = "http://www1.assets-gap.com/Asset_Archive/GPWeb/content/skava/assets/minus.png";
        var closedSrc = "http://www1.assets-gap.com/Asset_Archive/GPWeb/content/skava/assets/plus.png";
      }
      var assetObj = {open:openSrc,closed:closedSrc};
      return assetObj; 
    },

    expandCollapse : function(obj) {
      if (wcdAccordionMenu.model.animationInProgress) return false;
      wcdAccordionMenu.model.animationInProgress = true;
      var targetDiv = obj.next('.flyoutMenu-list');
      var flyoutLabelImg = wcdAccordionMenu.getImgSrc(obj);
      var targetImg = obj.find('.flyoutMenu-label p img');
      if (obj.hasClass('open')) {
        obj.removeClass('open');
        if(obj.parent().hasClass('SBSbBlock')){
          obj.children('.flyoutMenu-label').removeClass('white');
        }
        targetImg.attr('src',flyoutLabelImg.closed);
        targetDiv.slideUp(250,'linear',function() {
          wcdAccordionMenu.model.animationInProgress = false;
        });
      }
      else {
        obj.addClass('open');
        if(obj.parent().hasClass('SBSbBlock')){
          // console.log("SBS!");
          obj.children('.flyoutMenu-label').addClass('white');
        }
        var flyoutLabelImg = wcdAccordionMenu.getImgSrc(obj);
        targetImg.attr('src',flyoutLabelImg.open);
        // console.log("3rd try" + flyoutLabelImg.open)
        targetDiv.slideDown(250,'swing'); 
        $('html, body').animate({scrollTop: obj.offset().top - 62}, 500, 'swing', function() {
          wcdAccordionMenu.model.animationInProgress = false;
        });
      }
    }
  };


  $(document).ready(wcdAccordionMenu.init);

  $(document).ready(function(e) {
    $('.clickable-div').click( function(e) {
      if( e.target && $( e.target ).length > 0 ) {
        var targetTag = $( e.target ).prop("tagName");
        if( targetTag != 'A' && targetTag != 'AREA' ) {
          var $this = $( this )
          var hrefToLink = $this.attr('data-href');
          var trackingToLink = $this.attr('data-tracking');
          if( hrefToLink !== undefined && gidLib.getCookieVar("mktUniversalPersist",currentSOPCookieKey) == "B" ) {
            hrefToLink += '&sop=true';
          }
          if( hrefToLink !== undefined && trackingToLink !== undefined ) {
            $( this ).attr('href', hrefToLink );
            return wcdLib.contentItemLinkWithFacet( this, hrefToLink, trackingToLink );
          }
        }
      }
    });
  });





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

