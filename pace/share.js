
/*  ================================================================
    Sharing function (Facebook, Twitter, Pinterest)

    Each site has a button to post/share either a video or an image. 
      Facebook and Twitter share Ellen videos
      Pinterest will share brand clothing
    Facebook and Twitter have a section in which they share a 
    dynamically created text bubble

    a.) Facebook Sharing (using Feed API)
    b.) Twitter functions
    c.) Pinterest
    d.) Dynamic text bubble (their bread and butter)
====================================================================  */


//dynamic text bubble variables
var bitlyURL;
var twitterFinalText;
var useThisQuote;

var shareCases = {
    'sujatha': {
      blurb: 'zcgDQPZ4YQY'
    },
    'huong': {
      blurb: 'Huong joined P.A.C.E. to move forward after her husband died. As part of the program she gave a speech that proved to be life-changing.'
    }
  };

jQuery(document).ready(function() {
  
  //==============================
// a.)   //FACEBOOK SHARING
  //==============================

  //==========================================
    // Tracking IDs (TIDS) FB and Twitter
  //==========================================
  var useThisTID_FB;
  var useThisTID_TW;

    function FBShareTID() {
      s.linkTrackerVars="eVar6";
      s.eVar6=useThisTID_FB;
      s.tl(this,'o',s.eVar6);
      // console.info('tracking sent');
    }
     function TWShareTID() {
      s.linkTrackerVars="eVar6";
      s.eVar6=useThisTID_TW;
      s.tl(this,'o',s.eVar6);
      // console.info('tracking sent');
    }


// ================= Facebook API functions ================= //
  window.fbAsyncInit = function() {
          FB.init({
            appId      : '596987887110566', //WCD facebook acct. APP ID
            xfbml      : true,
            version    : 'v2.3'
          });
        };

        (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "//connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));

   

    function postToFeed() {
      // calling the API ...
      var obj = {
        method: 'feed',
        redirect_uri: 'http://www.gap.com/browse/info.do?cid=1033159',
        link: 'www.youtube.com/embed/'+useThisVideoID,
        // picture: ,
        name: 'GapKids x ED',
        caption: 'empower girls everywhere',
        description: "#heyworld let’s join GapKids and Ellen DeGeneres’ new lifestyle brand, ED, to tell girls that being a girl means being anything you want to be."
      };

      function callback(response) {
        // document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
      }
      FB.ui(obj, callback);
    }

    function postToFeed_celeb() {
      // calling the API ...
      var obj = {
        method: 'feed',
        redirect_uri: 'http://www.gap.com/browse/info.do?cid=1033159',
        // link: 'www.youtube.com/embed/'+useThisVideoID,
        picture: useThisQuote,
        name: 'GapKids x ED',
        caption: 'empower girls everywhere',
        description: "#heyworld let’s join GapKids and Ellen DeGeneres’ new lifestyle brand, ED, to tell girls that being a girl means being anything you want to be."
      };

      function callback(response) {
        // document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
      }
      FB.ui(obj, callback);
    }
  // ================= END Facebook API functions ================= //   


 
  
  //on click get closest video embed, get div id object with paramaters in youTubeEmbeds.js file
    function FBShareFunc(){
    //these variables can be found in the youTubeEmbeds.js file
      divToUse = $(this).parent().attr('id');
      console.log("FB Share: "+divToUse);
      embedInThisDiv = hgVideoCases[divToUse];
      useThisVideoID = embedInThisDiv.thisVideoID;

      // console.info(divToUse);
    //TID functions
      if(divToUse == 'youTubeEmbed1') {
        // console.info('FB use main video 1 TID');
        useThisTID_FB = 'ED_BRAND1_FB';
      } else if (divToUse == 'woeVid3' || divToUse == 'woeVid1' || divToUse == 'woeVid2') {
        // console.info('FB use woe TID');
        useThisTID_FB = 'ED_BRAND2_FB';
      } else {
        // console.info('FB use hg video TID');
        useThisTID_FB = 'ED_BRAND3_FB';
      }

    //post it!
      postToFeed();
    //send TID
      FBShareTID();
    });

  //on click to share celebrity quotes
    jQuery('.FBCelebQShare').click(function() {
      useThisQuote = jQuery(this).parent('div').find('img:first').attr('src');
      // console.info(useThisQuote);
      postToFeed_celeb();
    });


  //==============================
// b.)    //TWEET IT (TWITTER)
  //==============================

  function WCD_tweetIt() {
    window.open('https://twitter.com/intent/tweet?url=https://www.youtube.com/embed/'+useThisVideoID+'&text=%23heyworld+%23GapKidsxED','twitterTweet','toolbar=0,status=0,width=620,height=500');
  }
  function tweetQuote() {
    // console.info(tweetThisQuote);
    window.open('https://twitter.com/intent/tweet?url='+tweetThisQuote+'&text=%23heyworld+%23GapKidsxED','twitterTweet','toolbar=0,status=0,width=620,height=500');
  }

  jQuery('.tweetVideo').click(function() {
    //these variables can be found in the youTubeEmbeds.js file
      divToUse = jQuery(this).closest('.videoEmbed').find('div').attr('id');
      embedInThisDiv = hgVideoCases[divToUse];
      useThisVideoID = embedInThisDiv.thisVideoID;
    //TID functions
      if(divToUse == 'youTubeEmbed1') {
        // console.info('TW use main video 1 TID');
        useThisTID_TW = 'ED_BRAND1_TW';
      } else if (divToUse == 'woeVid3' || divToUse == 'woeVid1' || divToUse == 'woeVid2') {
        // console.info('TW use woe TID');
        useThisTID_TW = 'ED_BRAND2_TW';
      } else {
        // console.info('TW use hg video TID');
        useThisTID_TW = 'ED_BRAND3_TW';
      }
    //tweet it!
      WCD_tweetIt();
    //send TID
      TWShareTID();
  })

  var tweetThisQuote;
  jQuery('.tweetQ').click(function(){
    tweetThisQuote = jQuery(this).parent('div').find('img:first').attr('src');
    tweetQuote();
  })


  //==============================
// c.)    //PIN IT (PINTEREST)
  //==============================

  // ===== Pinterest TID ====//
    var pinTIDa;
    var pinTIDb;
    function pinItTID() {
      s.linkTrackerVars="eVar6";
      s.eVar6='ED_'+pinTIDa+'_'+pinTIDb;
      s.tl(this,'o',s.eVar6);
      // console.info('pint tracking sent');
    }

  var pinThisImage;
  //change options here, add description if necessary
  var pinItTheDesc = "Check out GapKids x ED, a collaboration with Ellen DeGeneres' new lifestyle brand, created to empower girls everywhere. %23heyworld";
 
  //function to call when pinning using pinterest pin it string
  function WCD_pinIt() {
    window.open('//www.pinterest.com/pin/create/button/?url=www.gap.com&media='+pinThisImage+'&description='+pinItTheDesc,'pinIt','toolbar=0,status=0,width=620,height=500');
    // console.info('Pinned!')
  }
  //pin it!
    jQuery(".pinItWCD").click(function() {
    //get information for TID
      var sldOrOF = jQuery(this).parent('div').attr('class');
      if (sldOrOF == 'lbSLD') {
        pinTIDb = 'SLD';
      } else {
        pinTIDb = 'OF';
      }
      var whichLB = jQuery(this).closest('.lookBookContainer').attr('id');
      if (whichLB == 'lbOne') {
        pinTIDa = "LOOKBOOK1";
      } else if(whichLB == 'lbTwo') {
        pinTIDa = 'LOOKBOOK2';
      } else if( whichLB == "lbThree") {
        pinTIDa = "LOOKBOOK3";
      } else {
        pinTIDa = "LOOKBOOK4";
      }
    //get image directly below parent div, must be full url in HTML, to post correctly on pinterest
      pinThisImage = jQuery(this).siblings('img:first').attr("src");
    // console.info(pinThisImage);
      WCD_pinIt();
      // console.info(pinTIDa+':'+pinTIDb);
      pinItTID()
    })


  //========================================
// d.)    //  DYNAMIC TEXT BUBBLE
  //========================================

  //For Text Area clear on click
  jQuery('#enterText').click(function(){
    this.value = '';
  });
  //Grab URL/Change for Twitter & Convert to bitly
  function getTextForBubble(){
    var enterTextContent = (encodeURIComponent(jQuery("#enterText").val()+' #heyworld #GapKidsxED')).replace(/\%2C/g, '');
    var cloudinaryURL = "http://gapkidsxed-res-4.cloudinary.com/image/upload/g_north,x_0,y_130,w_500,h_250,c_fit,l_text:Gloria%20Hallelujah_30_bold:"+enterTextContent+",co_grey/gapEDBubblePNG_US";
    
    var twitterPlusCheck = enterTextContent.replace(/\%20/g, '+');
    twitterFinalText = twitterPlusCheck.replace(/\'/g, "\\'");
    
    //Convert to bitly
    function get_short_url(long_url, login, api_key, func) {
      jQuery.getJSON(
        "http://api.bitly.com/v3/shorten?callback=?", 
        { 
          "format": "json",
          "apiKey": api_key,
          "login": login,
          "longUrl": long_url
        },
        function(response)
        {
          func(response.data.url);
        }
      );
    }
    var login = "gotothegap";
    var api_key = "R_fce76a2a080b1449d8a68031f48d4f78";

    var long_url = cloudinaryURL;

    get_short_url(long_url, login, api_key, function(short_url) {
      bitlyURL = short_url;
      jQuery('#urlLink').text(bitlyURL);
      jQuery('#urlLink').attr('href',bitlyURL);
    });
  }

  //TID functions for brand 4 (text bubble)
  function bubbleShareTID_FB() {
    s.linkTrackerVars="eVar6";
    s.eVar6='ED_BRAND4_FB';
    s.tl(this,'o',s.eVar6);
  }
  function bubbleShareTID_TW() {
    s.linkTrackerVars="eVar6";
    s.eVar6='ED_BRAND4_TW';
    s.tl(this,'o',s.eVar6);
  }
  //share on facebook
  jQuery('#shareDynBubFB').click(function(){
    bubbleShareTID_FB();
    getTextForBubble();
    setTimeout(function() {
    // postToFeed(); 
      window.open('https://www.facebook.com/dialog/feed?app_id=596987887110566&link=http://www.gap.com/browse/info.do?cid=1033159&picture='+bitlyURL+'&name=GapKids%20x%20ED&caption=words%20of%20support&description=%23heyworld%20help%20GapKids%20x%20ED%2C%20Ellen%20DeGeneres%27%20new%20lifestyle%20brand%2C%20to%20empower%20girls%20everywhere%21%20What%20are%20your%20best%20words%20of%20support%3F&redirect_uri=http://www.gap.com/browse/info.do?cid=1033159&closeWindow&display=popup','facebookShare','toolbar=0,status=0,width=620,height=500'); 
    }, 500);
  });

  //tweet it
  jQuery('#tweetDynBub').click(function(){
    bubbleShareTID_TW() 
    getTextForBubble();
    setTimeout(function() { 
      window.open('https://twitter.com/intent/tweet?text=' +twitterFinalText+ "&amp;url=" +bitlyURL,'tweetIt','toolbar=0,status=0,width=620,height=500')
    }, 500);  
  });
  //=========== END DYNAMIC TEXT BUBBLE =================   






  // console.info("shareFunctions.js loaded");





});
