$(document).ready(function() {
  if ($(window).width() > 780) { 
    var scene = $('#parallaxstars').get(0);
    var parallax = new Parallax(scene);
  }

  jarallax(document.querySelectorAll('.jarallax'), {
    disableParallax: /iPad|iPhone|iPod|Android/,
    disableVideo: /iPad|iPhone|iPod|Android/
});

$('.jarallax').jarallax({
  speed: 0.2
});


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

  $("#submitpoll").on("click", function() {
    var vote_m = $("input[name=male]:checked").val();
    var vote_f = $("input[name=female]:checked").val();
    $("#presvg").show(),
    $("#loader").show(),
    $("#loaderoverlay").show(),
    $.ajax({
            type: "POST",
            url: "poll.php",
            data: {male: vote_m, female: vote_f},
            success: function(data) {
              console.log(data),
              $('#presvg').fadeOut(),
              $('#loader').delay(700).fadeOut('slow'),
              $('#loaderoverlay').delay(700).fadeOut('slow'),
              $('#voteModal').modal("hide"),
              Result(),
              $('#resultModal').modal("show")
          },
          error: function(data) {
            console.log(data)
          }
        })
})
});

function Result() {
    $.ajax({
            type: "POST",
            url: "result.php",
            success: function(data) {
              TransformResult(JSON.parse(data))
          },
          error: function(data) {
            console.log(data)
          }
        })
};

function TransformResult(data) {
  console.log(data);

  for (var i = 1; i <= 10; i++) {
    $('#res'+i).val(data[i]);
    
    $('#res'+i).css('background-image',
      '-webkit-gradient(linear, left top, right top, '
      +' color-stop(0, rgb(153, 0, 127)), '
      + 'color-stop(' + (data[i]+5)/99 + ', rgb(247, 51, 68)), '
      + 'color-stop(' + (data[i]+5)/99 + ', rgb(223, 223, 223))'
      + ')'
      );
  }
}

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
    mobile: false,
    duration: 500,
    delay: 200
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

