jQuery(function($) {
	var carouselInterval;

	var screenSize = jQuery(window).width();

	/* toggle quick facts*/
	$("#paceQuickFactsLink").click(function(){
		console.log("showing collapsed content");
	    $('#paceQuickFactsWrapper').slideToggle('slow');
	});






//========================================
// Open Close Popup Functionality
//========================================

	/* opens popup if plus sign is clicked*/
	$(".plusMain").click(function(){
		// console.log($(this).parent().attr('id'));
		if($('.whiteOut').css('display')=="none"){
			$('.whiteOut').fadeIn('slow');
		}
		$('.whiteOut').css('z-index','20');
		$('.popUpWrapper').fadeIn('slow');
		console.log("starting "+$(this).parent().attr('id')+" carousel");
		var numCarouselItems = populateMe($(this).parent().attr('id'));

		if(numCarouselItems>1){
			carouselMe($(this).parent().attr('id'));
		}
	});

	/* closes popup only if you click outside*/
	$(document).mouseup(function (e) {
		var container = $(".popUpWrapper");
		if($('.whiteOut').css('z-index')!="0"){
			if (!container.is(e.target) && container.has(e.target).length === 0){
					clearInterval(carouselInterval);
			        $('.whiteOut').fadeOut('slow');
			 }
		}
	});
		




		

		//   $(document).ready(function() {
		// 	 $(".videoPlayButton").bind('click', function() {
		// 		console.log("meow");
		
		// 	});
		// 	 function launch() {
		// 		console.log("play button clicked");
		// 	  };
		// });



//========================================
// Stories
//========================================

	/* Story Constructor*/
	function Story(left, right){
		this.leftContent=left,
		this.rightContent=right
	};


	var huongStory = new Story(
		'<div class="popupContentLeft">'+
	        '<img class="car huongCarousel active-slide" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong1.jpg">'+
	        '<img class="car huongCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong2.jpg">'+
	        '<img class="car huongCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong3.jpg">'+
	        '<img class="car huongCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong4.jpg">'+
	    '</div>'+
	    '<nav class="navDots">'+
	        '<ul>'+
	           '<li class="huongDot active-dot"></li>'+
	           '<li class="huongDot"></li>'+
	           '<li class="huongDot"></li>'+
	           '<li class="huongDot"></li>'+
	        '</ul>'+
	    '</nav>', 

       	'<div class="popupContentRight">'+
            '<hr class="quote">'+
            '<div class="quote">'+
               '"Before P.A.C.E., I didn\'t like to talk to people. But now I raise questions with my manager directly, and I can make friends very easily."'+
            '</div>'+
            '<hr class="quote">'+
            '<div class="story" id="huong">'+
               '<h1>Huong</h1>'+
               '<h4>Vietnam</h4>'+
               '<p>'+
                  'As I arrived home from work one day in 2005, I heard cries from my mother-in-law. When I walked into the house, I learned that my husband died and felt that my world was collapsing. After his death, I kept telling myself that I must continue to live for my children. I had heard about P.A.C.E. and felt curious, and in 2011 I requested to join the program. I was tired of living in sadness. After a few months, we were asked to write a speech. I had never written anything before. Every night, I spent two hours writing down whatever words I could think of. I spent three days practicing in front of the mirror. When I walked up to the stage, I focused on the empty space above people’s heads – I just could not bring myself to look at anyone’s faces. When I finished, the room burst out in applause. Many people came up to congratulate me and my manager even asked for a copy to be translated. I started thinking that maybe my husband’s death was not the end for us. I didn’t like to talk to people. But now I raise questions with my manager directly, and I can make friends very easily.'+
               '</p>'+
             '</div>'+
           '</div>');

	var harshaniStory = new Story(
		'<div class="popupContentLeft">'+
         '<img class="car harshaniCarousel active-slide" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani1.jpg">'+
         '<img class="car harshaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani2.jpg">'+
         '<img class="car harshaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani3.jpg">'+
         '<img class="car harshaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani4.jpg">'+
       '</div>'+
       '<nav class="navDots">'+
         '<ul>'+
           '<li class="harshaniDot active-dot"></li>'+
           '<li class="harshaniDot"></li>'+
           '<li class="harshaniDot"></li>'+
           '<li class="harshaniDot"></li>'+
         '</ul>'+
       '</nav>',

       '<div class="popupContentRight">'+
         '<hr class="quote">'+
             '<div class="quote">'+
                '"I hope to look after my mother and give my brother the best education possible. I have achieved some of my goals and already set new ones." '+
          '</div>'+
             '<hr class="quote">'+
             '<div class="story">'+
               '<h1>Harshani</h1>'+
                 '<h4>Sri Lanka</h4>'+
                 '<p>'+
                    'I wanted knowledge from the P.A.C.E. program to become a confident woman. When we work with people and are achieving goals, we face different kinds of challenges. I wanted to learn to make the right decisions at the right time and understand the differences between people. I had a bad habit of having a temper, but I have learned how to work with others without having conflicts. Now I can work with patience and have the ability to face any problem, which enabled me to be promoted. From my savings I have been able to buy land of my own and purchase furniture and electrical appliances. I hope to look after my mother, build a house on the land I have purchased and give my brother the best education possible. I am very happy to have the opportunity to be a P.A.C.E. teacher. I have achieved some of my goals and have already set new ones.'+
                 '</p>'+
               '</div>'+
       '</div>');

	var sriyaniStory = new Story(
		'<div class="popupContentLeft">'+
         '<img class="car sriyaniCarousel active-slide" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Sriyani1.jpg">'+
         '<img class="car sriyaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Sriyani2.jpg">'+
         '<img class="car sriyaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Sriyani3.jpg">'+
       '</div>'+
       '<nav class="navDots">'+
         '<ul>'+
           '<li class="sriyaniDot active-dot"></li>'+
           '<li class="sriyaniDot"></li>'+
           '<li class="sriyaniDot"></li>'+
         '</ul>'+
       '</nav>',

       '<div class="popupContentRight">'+
         '<hr class="quote">'+
             '<div class="quote">'+
                '"I was not good at balancing my work life and my personal life. After joining the program, I had enough confidence to face any challenge." '+
          '</div>'+
             '<hr class="quote">'+
             '<div class="story">'+
               '<h1>Sriyani</h1>'+
                 '<h4>Sri Lanka</h4>'+
                 '<p>'+
                    'After the Indian Ocean Tsunami on December 26, 2004, all we had were just the clothes on our backs and very little money. They were some of the darkest days in my life. I finally realized that if I wanted things to change, I needed to help my husband and find a job. At the time I came to know about the P.A.C.E. program, I was a negative-minded person. I really thought there would be direct and easy answers, but it was not like that. The program was a totally different education.  We had to use our brain and think deeply to find solutions. I was not good at balancing my work life and my personal life. I really learned how valuable my life is and how much my personal life and career life have succeeded. Now I am working to become a role model for my daughter. Compared to my past life, my present life is much more organized, and I have a positive attitude. After joining the program, I had enough confidence to face any challenge.'+
                 '</p>'+
               '</div>'+
       '</div>'
		);


	var sujathaStory = new Story(
		
		'<div class="popupContentLeft">'+
         '<img class="car sujathaCarousel active-slide" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Sujatha.jpg">'+
         '<div class="videoPlayButton" id="sujathaVideo2" onClick="launch(\'sujathaVideo\')"></div>'+
       '</div>',

       '<div class="popupContentRight">'+
         '<hr class="quote">'+
             '<div class="quote">'+
                '"In two years I have changed so much. Nobody believes it – and even I can’t believe how much has changed." '+
          '</div>'+
             '<hr class="quote">'+
             '<div class="story">'+
               '<h1>Sujatha</h1>'+
                 '<h4>Sri Lanka</h4>'+
                 '<p>'+
                    'When P.A.C.E started, I was working as an operator. Even though I spoke well, I didn’t have much confidence or courage. I had only studied through 10th grade in the village where I grew up, and I felt scared when the P.A.C.E. teacher would call on me.  I didn’t have many ideas about my future. But as I attended the program, I learned to talk with different people. I opened a savings account. I started to have new ideas and began to see how I could accomplish them. My attendance in P.A.C.E. was 100 percent – and when the program ended, I was promoted to be a supervisor. Now, every day in team meetings, my team members ask me to keep talking – they have a lot of curiosity and want to listen to me more. Everyone tells me that I should motivate others to achieve what I have achieved. In my opinion, P.A.C.E should spread to all women. We can achieve whatever we want if we are dedicated to it. And I’m an example of that. In two years I have changed so much. Nobody believes it – and even I can’t believe how much has changed. '+
                 '</p>'+
               '</div>'+
       '</div>'
		);



//========================================
// Populating Popups & Initialize Carousel
//========================================


		/* Populate Popup */
		function populateMe(story){
			console.log("building popup");
			console.log(story);
			$('.popupContentLeftWrapper').html(eval(story+'Story').leftContent);
			// console.log('left content '+eval(story+'Story').leftContent);
			$('.popupContentRightWrapper').html(eval(story+'Story').rightContent);
			// console.log('right content '+eval(story+'Story').rightContent);
			$('<div id="socialWrapper">'+
		          '<div class="shareSocial" id="instagram"></div>'+
		          '<div class="shareSocial" id="facebook" onclick="FBShareFunc()"></div>'+
		          '<div class="shareSocial" id="twitter"></div>'+
		        '</div><br class="clear">').insertAfter('.story h1')
			return $('.'+story+'Carousel').length;
		}


		/*Carousel Functionality */
		function carouselMe(carousel){
			console.log("starting carousel");
			var carouselId='.'+carousel+'Carousel';
			var dotID='.'+carousel+'Dot';
			
			 carouselInterval = setInterval(function(){
		       next();
		     },2500);
		    
			function next() {
				var currentSlide=$(carouselId+'.active-slide');
				var currentDot=$(dotID+'.active-dot');
				var nextSlide=currentSlide.next();
				var nextDot=currentDot.next();

				if(nextDot.length === 0){
					nextSlide=$(carouselId).first();
					nextDot=$(dotID).first();
				}

				currentSlide.removeClass('active-slide');
				nextSlide.addClass('active-slide');
				currentDot.removeClass('active-dot');
				nextDot.addClass('active-dot');
			}

				$('ul li').click(function(){
					clearInterval(carouselInterval);
					var index=$(this).index();
					$(dotID+'.active-dot').removeClass('active-dot');
					$(carouselId+'.active-slide').removeClass('active-slide');
					$(this).addClass('active-dot');
					$(carouselId+':eq('+index+')').addClass('active-slide');
				})
		};









});