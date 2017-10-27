
// ==================================== 
// YouTube API Embed code
// =====================================
var divToUse;
var frame;
var useThisVideoID;
var imgCTA;
var videoWidth;
var heightOfIframe = screenSize * 0.563594912280702;
var mainVideo1;
var screenSize = jQuery(window).width();



    function removeIFrame() {
      console.log(frame.parentNode);
      console.log(frame);
      frame.parentNode.removeChild(frame);
    };



    function onYouTubePlayerAPIReady() {
        console.info('embed function called');

        mainVideo1 = new YT.Player(divToUse, {
          width: videoWidth,
          height: heightOfIframe,
          videoId: useThisVideoID,
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          },
          playerVars: {
            'rel': 0
          }
        });
    }
    // shut down video
      function shutVidDown() {
        console.log("shut vid down");
        if(imgCTA){
          imgCTA.add('.vidShareIcon').fadeIn(500);
          removeIFrame();

        }
        $('.paceVideo').append('<div id="paceVideoContainer"></div>');
        $('.popupContentWrapper').show();
        $('#backToStory').hide();
      }
      // autoplay video
      function onPlayerReady(event) {
        event.target.playVideo();
        frame = document.getElementById(divToUse);
        // jQuery('.hgRightArrow, .hgLeftArrow, .woeVidRightArrow, .woeVidLeftArrow').hide();
        frame.addClass(addClassB);
      }
      // when video ends
      function onPlayerStateChange(event) {
        if (event.data === 0) {
          setTimeout(function() {
            shutVidDown();
          }, 500);
        }
      }
      //====================== END YouTube API Embed code =====================//




  

function launch(val) {
  console.log("play button clicked");
        var vidId=val;
        console.info('clicked ' + vidId);
        imgCTA = jQuery(this);
        //just change these:
        $('#backToStory').show();
        $('.popupContentWrapper').hide();
        divToUse = 'paceVideoContainer'; //embed in this div #id
        videoWidth = '100%';
        heightOfIframe = '674px';
        if (screenSize < 1280) {
           heightOfIframe = screenSize * 0.563594912280702
        }

        console.log('here '+vidId);

        embedInThisDiv = hgVideoCases[vidId];
        useThisVideoID = embedInThisDiv.thisVideoID;

        // getting parent class
        
        //embed video function
        onYouTubePlayerAPIReady();
        // preventDefault();
};

$('#backToStory').click(function(){
  console.log("shut down");
  shutVidDown();
})



jQuery(function($) {




//========================================
// Launching Main Video
//========================================

      $('.paceVideoPlayButton').click(function(ev) {
        console.log("play button clicked");
        var vidId=$(this).attr('id');
        console.info('clicked ' + vidId);
        // imgCTA = jQuery(this);
        //just change these:
        divToUse = vidId+'Container'; //embed in this div #id
        videoWidth = '100%';
        heightOfIframe = '725px';
        if (screenSize < 1280) {
           heightOfIframe = screenSize * 0.563594912280702
        }

        console.log('here '+vidId);

        embedInThisDiv = hgVideoCases[vidId];
        useThisVideoID = embedInThisDiv.thisVideoID;

        // getting parent class
        $('.'+$(this).parent().attr('class')).hide();

        //embed video function
        onYouTubePlayerAPIReady();
        ev.preventDefault();
      });




});


