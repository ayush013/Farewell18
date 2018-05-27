$(document).ready(function() {
  
    var scene1 = $('#parallaxstars').get(0);
    
    var parallax1 = new Parallax(scene1);
  
var elem = $('input[type="range"]');

elem.change(function () {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    $('.value').html($(this).val()+'%');

    $(this).css('background-image',
      '-webkit-gradient(linear, left top, right top, '
      +' color-stop(0, rgb(153, 0, 127)), '
      + 'color-stop(' + val + ', rgb(247, 51, 68)), '
      + 'color-stop(' + val + ', rgb(223, 223, 223))'
      + ')'
      );
});

});

var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    offset: 0, 
    easing: 'easeInOutCubic',
  });

window.sr = ScrollReveal();
sr.reveal('.container', { duration: 200,
    distance: '50px',
    origin: 'top',
    reset: true,
    duration: 500,
    delay: 200
});

$('.jarallax').jarallax({
    speed: 0.8
});

jQuery(document).ready(function ($) {
	// $(window).scroll(function(){
	// 	var scrollTop = 500;
	// 	if($(window).scrollTop() >= scrollTop){
	// 		$('nav').addClass('scrolled');
	// 		var logo = $("#logo")[0].contentDocument; 	
	// 		logo.getElementById('acc1').style.stroke="#000";     
	// 	  logo.getElementById('acc2').style.stroke="#000";     
	// 	  logo.getElementById('acc3').style.stroke="#000";     

	// 	}
	// 	if($(window).scrollTop() < scrollTop){
	// 		$('nav').removeClass('scrolled');	
  //     var logo = $("#logo")[0].contentDocument; 	
	// 		logo.getElementById('acc1').style.stroke="#FFF";     
	// 	  logo.getElementById('acc2').style.stroke="#FFF";     
	// 	  logo.getElementById('acc3').style.stroke="#FFF";     

	// 	}
	// });
$(window).scroll(function() {   
  if ($(this).scrollTop() <= $('#home').outerHeight()*0.8) {
    $('#colorOne').css("opacity", " 1");
    $('#colorTwo').css("opacity", " 0");
  } else if ($(this).scrollTop() <= ($('#about').outerHeight()*0.9 + $('#about').offset().top)) {
    $('#colorOne').css("opacity", " 0");
    $('#colorTwo').css("opacity", " 1");
    $('#colorThree').css("opacity", " 0");
  } else if ($(this).scrollTop() <= ($('#gallery').outerHeight()*0.9 + $('#gallery').offset().top)) {
    $('#colorTwo').css("opacity", " 0");
    $('#colorThree').css("opacity", " 1");
    $('#colorFour').css("opacity", " 0");
  } else if ($(this).scrollTop() <= ($('#poll').outerHeight()*0.9 + $('#poll').offset().top)) {
    $('#colorThree').css("opacity", " 0");
    $('#colorFour').css("opacity", " 1");
    $('#colorFive').css("opacity", " 0");
  }  else if ($(this).scrollTop() <= ($('#convenor').outerHeight()*0.9 + $('#convenor').offset().top)) {
    $('#colorFour').css("opacity", " 0");
    $('#colorFive').css("opacity", " 1");
    $('#colorSix').css("opacity", " 0");
  }  else if ($(this).scrollTop() <= ($('#webteam').outerHeight()*0.9 + $('#webteam').offset().top)) {
    $('#colorFive').css("opacity", " 0");
    $('#colorSix').css("opacity", " 1");
  } 
  else {
    $('#colorOne').css("opacity", " 1");
  }
});

});


$("#typequotes").typing({

  strings: [' "Nothing lasts forever. Forever is a lie. All we have is whats in between hello and goodbye "', 
  ' "Finding the good in goodbye."', 
  ' "For what we leave behind us is a part of ourselves; we must die to one life before we can enter another"',
  ' "What we call the beginning is often the end. And to make an end is to make a beginning. The end is where we start from."'],
  eraseDelay: 2000,
  typeDelay: 100,
  stringStartDelay: 5000,
  color: 'white',
  loopCount: 2000,
  typingColor: 'white',
  typingOpacity: '0.2',
  fade: true
});

