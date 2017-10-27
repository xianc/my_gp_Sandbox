jQuery(function($) {
	var shareCases = {
	    'paceGridCopy': {
	      blurb: 'something here'
	    },
	    'huong': {
	      blurb: 'Huong joined P.A.C.E. to move forward after her husband died. As part of the program she gave a speech that proved to be life-changing.'
	    }
	 };


// ================= Facebook API functions ================= //
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1466005420395965',
      xfbml      : true,
      version    : 'v2.4'
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
        name: 'blahblah',
        caption: 'some more blahlahblah',
        description: "sdafghffdgsf"
      };

      function callback(response) {
        // document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
      }
      FB.ui(obj, callback);
    }

    // function postToFeed_celeb() {
    //   // calling the API ...
    //   var obj = {
    //     method: 'feed',
    //     redirect_uri: 'http://www.gap.com/browse/info.do?cid=1033159',
    //     // link: 'www.youtube.com/embed/'+useThisVideoID,
    //     picture: useThisQuote,
    //     name: 'GapKids x ED',
    //     caption: 'empower girls everywhere',
    //     description: "#heyworld let’s join GapKids and Ellen DeGeneres’ new lifestyle brand, ED, to tell girls that being a girl means being anything you want to be."
    //   };

    //   function callback(response) {
    //     // document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
    //   }
    //   FB.ui(obj, callback);
    // }


    $('.shareSocial#facebook').click(function(){
    //these variables can be found in the youTubeEmbeds.js file
      divToUse = $(this).parent().parent().attr('class');
      console.log("FB Share: "+divToUse);
      // if(divToUse == 'paceGridCopy') {
      //   // console.info('FB use main video 1 TID');
      //   useThisTID_FB = 'ED_BRAND1_FB';
      // }

      //post it!
      postToFeed();
    //send TID
      // FBShareTID();
      
    });
  // ================= END Facebook API functions ================= //   



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

  $('.shareSocial#twitter').click(function() {
    //these variables can be found in the youTubeEmbeds.js file
      // divToUse = jQuery(this).closest('.videoEmbed').find('div').attr('id');
      // embedInThisDiv = hgVideoCases[divToUse];
      // useThisVideoID = embedInThisDiv.thisVideoID;
    //   divToUse = $(this).parent().parent().attr('class');
    //   console.log("FB Share: "+divToUse);
    // //TID functions
    //   if(divToUse == 'youTubeEmbed1') {
    //     // console.info('TW use main video 1 TID');
    //     useThisTID_TW = 'ED_BRAND1_TW';
    //   } else if (divToUse == 'woeVid3' || divToUse == 'woeVid1' || divToUse == 'woeVid2') {
    //     // console.info('TW use woe TID');
    //     useThisTID_TW = 'ED_BRAND2_TW';
    //   } else {
    //     // console.info('TW use hg video TID');
    //     useThisTID_TW = 'ED_BRAND3_TW';
    //   }
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

	
});