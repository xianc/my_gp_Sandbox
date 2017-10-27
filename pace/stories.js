jQuery(function($) {
	function Story(left, right){
		this.leftContent=left,
		this.rightContent=right
	};

	var huongStory = new Story(
		'<div class="popupContentLeft">'+
	        '<img class="huongCarousel active-slide" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong1.jpg">'+
	        '<img class="huongCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong2.jpg">'+
	        '<img class="huongCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong3.jpg">'+
	        '<img class="huongCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Huong4.jpg">'+
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
            '<div class="story">'+
               '<h1>Huong</h1>'+
               '<h4>Vietnam</h4>'+
               '<p>'+
                  'As I arrived home from work one day in 2005, I heard cries from my mother-in-law. When I walked into the house, I learned that my husband died and felt that my world was collapsing. After his death, I kept telling myself that I must continue to live for my children. I had heard about P.A.C.E. and felt curious, and in 2011 I requested to join the program. I was tired of living in sadness. After a few months, we were asked to write a speech. I had never written anything before. Every night, I spent two hours writing down whatever words I could think of. I spent three days practicing in front of the mirror. When I walked up to the stage, I focused on the empty space above people’s heads – I just could not bring myself to look at anyone’s faces. When I finished, the room burst out in applause. Many people came up to congratulate me and my manager even asked for a copy to be translated. I started thinking that maybe my husband’s death was not the end for us. I didn’t like to talk to people. But now I raise questions with my manager directly, and I can make friends very easily.'+
               '</p>'+
             '</div>'+
           '</div>');

	var harshaniStory = new Story(
		'<div class="popupContentLeft">'+
         '<img class="harshaniCarousel active-slide" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani1.jpg">'+
         '<img class="harshaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani2.jpg">'+
         '<img class="harshaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani3.jpg">'+
         '<img class="harshaniCarousel" src="PACE_1MW_WEB_release/POP_IMAGE_STORIES/PopFrame_Harshani4.jpg">'+
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

});