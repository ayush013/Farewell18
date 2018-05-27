<!DOCTYPE html>
<html>
<head>
  <title>Amantrya 2018</title>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta property="og:title" content="Amantrya 2018" />
  <meta property="og:type" content="Event" />
  <meta property="og:url" content="http://www.akgec.in/amantrya" />
  <meta name="theme-color" content="#333" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="description" content="Amantrya - Farewell Party 2018 - AKGEC">
  <meta name="author" content="Software Incubator">
  <link rel="icon" href="assets/logo_animated.svg" type="image/svg" sizes="16x16">
</head>
<body>

    <?php
    $maleErr = $femaleErr = "";
    $male = $female = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
      if (empty($_POST["male"])) {
        $maleErr = "* Please make a choice";
      } else {
        $male = test_input($_POST["male"]);
      }
      if (empty($_POST["female"])) {
        $femaleErr = "* Please make a choice";
      } else {
        $female = test_input($_POST["female"]);
      }
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

<style type="text/css">
  body {
    overflow: hidden;
  }

  #loader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
	background: url("./assets/prepattern.jpg");
	background-size: 200px;
    z-index: 10000;
  }
  #loaderoverlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
	background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0) 60%, rgba(0, 0, 0, 0.19) 100%);
    z-index: 10000;
  }

  #presvg {
    width: 200px;
    height: 200px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -100px 0 0 -100px;
  }

</style>  

<!-- Preloader -->
<div id="loader">
<div id="loaderoverlay">
  <div id="presvg">
   <img src="./assets/amant_loader.svg">
	</div>
  </div>
</div>  

<nav class="navbar navbar-expand-lg  navbar-dark fixed-top">
  
  <div class="container-fluid">
      <div class="row">
        <div class="col">
            <object id="logo" data="./assets/logo_animated.svg" style="height: 5vh;" type="image/svg+xml"></object>
        </div>
        <div class="col">
        </div>
        <div class="col">
        </div>    
      </div>
  </div>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active topBotomBordersOut">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item topBotomBordersOut">
        <a class="nav-link" href="#about">About</a>
      </li>
     <li class="nav-item topBotomBordersOut">
        <a class="nav-link" href="#gallery">Gallery</a>
      </li>
      <li class="nav-item topBotomBordersOut">
        <a class="nav-link" href="#poll">Finalists</a>
      </li>
      <li class="nav-item topBotomBordersOut">
        <a class="nav-link" href="#convenor">Convenor</a>
      </li>
      <li class="nav-item topBotomBordersOut">
          <a class="nav-link" href="#webteam"> Team</a>
        </li>
    </ul>
  </div>
</nav>


<div id="parallaxstars" data-scalar-x="5" data-scalar-y="5">
    <div class="bgwrapper" id="colorOne"></div>
    <div class="bgwrapper" id="colorTwo"></div>
    <div class="bgwrapper" id="colorThree"></div>
    <div class="bgwrapper" id="colorFour"></div>
    <div class="bgwrapper" id="colorFive"></div>
    <div class="bgwrapper" id="colorSix"></div>
    <div data-depth="0.40" class="layer"><div id='stars'></div></div>
    <div data-depth="0.60" class="layer"><div id='stars2'></div></div>
    <div data-depth="0.80" class="layer"><div id='stars3'></div></div>
  </div>

  

<div class="landing container" id="home">
	<h1 class="landingtitle" id="neon">AMANTRYA</h1>
	<h2 class="landingtitle" id="subtitle">FAREWELL 2018</h2>
  <h3 class="landingquotes" id="typequotes"></h3>
  <a href="#poll" class="btn" id="votebtn">
      VOTE NOW
    <span class="border-left"></span>
    <span class="border-top"></span>
    <span class="border-bottom"></span>
    <span class="border-right"></span>
    </a>
  <span class="scroll-btn">
    <a href="#about">
      <span class="mouse">
        <span>
        </span>
      </span>
    </a>
    <p>SCROLL DOWN</p>  
  </span>
  
</div>

<div class="container" id="about">

    <h1 class="abouttitle">About Amantrya</h1>
    <span>
      Lorem ipsum dolor sit amet, tacimates suavitate temporibus ea vis, eam cu aperiri omittam evertitur. Ea pri iisque fabulas. Soleat denique platonem te has. Ex eam errem referrentur.

        Ubique eirmod appetere eos te. Vitae postulant ei cum. Est no modo disputationi, eum facilisis repudiare accommodare id. Ne partem aliquam detraxit qui, ferri lucilius instructior usu in.
        
        Eos ne congue ornatus recteque, viris legendos iudicabit in qui, ut eruditi imperdiet scripserit sed. Mea ex deserunt sententiae, est ad noster dolorum maluisset, sit duis dicant in. Nam officiis forensibus ex. Porro debet appareat mea at.
        
        Ex qui illud ridens, dicunt tritani ius ex, qui ei fugit scriptorem. Perpetua signiferumque vim ea. An sensibus philosophia per, agam eruditi qui et. In aeterno signiferumque quo, utroque appetere constituam eu cum. Vitae praesent eum no, nam tollit omittam sapientem et, no fierent dignissim expetendis nam.
        
        Nisl offendit his ei. Veri facilisi mea et, cu vitae consetetur sea. Eu per case cibo, at sit zril aperiam mandamus. Vocent labores adversarium eum id. Nemore nonumes accusamus an vis, an mea fabulas philosophia signiferumque, animal pertinacia ne nam.
      </span>
</div>
<div class="container" id="gallery">
    <h1 class="abouttitle">Gallery</h1>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active jarallax" data-jarallax data-speed="0.2">
            <img class="d-block w-100 jarallax-img" src="./assets/caro.jpg" alt="First slide">
          </div>
          <div class="carousel-item jarallax" data-jarallax data-speed="0.2">
            <img class="d-block w-100 jarallax-img" src="./assets/caro.jpg" alt="Second slide">
          </div>
          <div class="carousel-item jarallax" data-jarallax data-speed="0.2">
            <img class="d-block w-100 jarallax-img" src="./assets/caro.jpg" alt="Third slide">
          </div>
          <div class="carousel-item jarallax" data-jarallax data-speed="0.2">
              <img class="d-block w-100 jarallax-img" src="./assets/caro.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item jarallax" data-jarallax data-speed="0.2">
                <img class="d-block w-100 jarallax-img" src="./assets/caro.jpg" alt="Fifth slide">
              </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <svg width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve">
                <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
              45.63,75.8 0.375,38.087 45.63,0.375 "/>
              </svg>  
              <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60px" height="80px" viewBox="0 0 50 80" xml:space="preserve">
              <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
            0.375,0.375 45.63,38.087 0.375,75.8 "/>
            </svg>
            <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<div class="container" id="poll">

    <h1 class="abouttitle">Mr/Ms Farewell Finalists</h1>
    
    <div class="row">
        <div class="col-12 col-md" data-tilt>
            <a data-toggle="modal" data-target="#voteModal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span class="dpvote"> VOTE NOW</span>
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
            <a data-toggle="modal" data-target="#voteModal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span class="dpvote"> VOTE NOW</span>
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a data-toggle="modal" data-target="#voteModal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a data-toggle="modal" data-target="#voteModal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a data-toggle="modal" data-target="#voteModal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
    </div>
    <div class="row">
        <div class="col-12 col-md" data-tilt>
            <a data-toggle="modal" data-target="#voteModal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span class="dpvote"> VOTE NOW</span>
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
            <a data-toggle="modal" data-target="#voteModal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span class="dpvote"> VOTE NOW</span>
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a data-toggle="modal" data-target="#voteModal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a data-toggle="modal" data-target="#voteModal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a data-toggle="modal" data-target="#voteModal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
    </div>
</div>
<div class="container" id="convenor">

    <h1 class="abouttitle">Convenors</h1>
    
    <div class="row">
        <div class="col-12 col-md" data-tilt>
            <a href="#votemodal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span class="dpvote"> VOTE NOW</span>
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a href="#votemodal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a href="#votemodal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a href="#votemodal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span class="dpvote"> VOTE NOW</span>
                  <span> AYUSH</span>
            </a>
            </div>
    </div>
</div>

<!-- Vote Modal -->
<div class="modal fade" id="voteModal" tabindex="-1" role="dialog" aria-labelledby="voteModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h2 class="abouttitle" id="modaltitle">Cast Your Vote</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h2 class="abouttitle" id="fwtitle">Mr. Farewell  
                  <span class="error"><?php echo $maleErr;?></span>
                </h2>
            <div class="row">
              <div class="col">
                  <input type="radio" name="male" id="m1" class="input-hidden" <?php if (isset($male) && $male=="m1") echo "checked";?> value="m1" />
                <label for="m1">
                  <img src="./assets/dp.jpg" class="img-fluid" data-tilt/>
                  <span> AYUSH</span>
                </label>
              </div>
              <div class="col">
                  <input type="radio" name="male" id="m2" class="input-hidden" <?php if (isset($male) && $male=="m2") echo "checked";?> value="m2"/>
                <label for="m2">
                  <img src="./assets/dp.jpg" class="img-fluid" data-tilt/>
                  <span> AYUSH</span>
                </label>
              </div>
              <div class="col">
                  <input type="radio" name="male" id="m3" class="input-hidden" <?php if (isset($male) && $male=="m3") echo "checked";?> value="m3" />
                <label for="m3">
                  <img src="./assets/dp.jpg" class="img-fluid" data-tilt/>
                  <span> AYUSH</span>
                </label>
              </div>
              <div class="col">
                  <input type="radio" name="male" id="m4" class="input-hidden" <?php if (isset($male) && $male=="m4") echo "checked";?> value="m4" />
                <label for="m4">
                  <img src="./assets/dp.jpg" class="img-fluid" data-tilt />
                  <span> AYUSH</span>
                </label>
              </div>
              <div class="col">
                  <input type="radio" name="male" id="m5" class="input-hidden" <?php if (isset($male) && $male=="m5") echo "checked";?> value="m5" />
                <label for="m5">
                  <img src="./assets/dp.jpg" class="img-fluid" data-tilt />
                  <span> AYUSH</span>
                </label>
              </div>
            </div>

            <h2 class="abouttitle" id="fwtitle">Ms. Farewell
              <span class="error"> <?php echo $femaleErr;?></span>
            </h2>
            <div class="row">
                <div class="col">
                    <input type="radio" name="female" id="f1" class="input-hidden"  <?php if (isset($female) && $female=="f1") echo "checked";?> value="f1" />
                  <label for="f1">
                    <img src="./assets/dp.jpg" class="img-fluid" data-tilt/>
                    <span> AYUSH</span>
                  </label>
                </div>
                <div class="col">
                    <input type="radio" name="female" id="f2" class="input-hidden"  <?php if (isset($female) && $female=="f2") echo "checked";?> value="f2" />
                  <label for="f2">
                    <img src="./assets/dp.jpg" class="img-fluid" data-tilt/>
                    <span> AYUSH</span>
                  </label>
                </div>
                <div class="col">
                    <input type="radio" name="female" id="f3" class="input-hidden"  <?php if (isset($female) && $female=="f3") echo "checked";?> value="f3" />
                  <label for="f3">
                    <img src="./assets/dp.jpg" class="img-fluid" data-tilt/>
                    <span> AYUSH</span>
                  </label>
                </div>
                <div class="col">
                    <input type="radio" name="female" id="f4" class="input-hidden"  <?php if (isset($female) && $female=="f4") echo "checked";?> value="f4" />
                  <label for="f4">
                    <img src="./assets/dp.jpg" class="img-fluid" data-tilt />
                    <span> AYUSH</span>
                  </label>
                </div>
                <div class="col">
                    <input type="radio" name="female" id="f5" class="input-hidden"  <?php if (isset($female) && $female=="f5") echo "checked";?> value="f5" />
                  <label for="f5">
                    <img src="./assets/dp.jpg" class="img-fluid" data-tilt />
                    <span> AYUSH</span>
                  </label>
                </div>
            </div>
            <input type="submit" class="btn" value="Verify">
          </form>
          <?php
              echo "<h2>Your Input:</h2>";
              echo $male;
              echo "<br>";
              echo $female;
            ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Result Modal -->
<!-- <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <h2 class="abouttitle" id="modaltitle">Polling Result</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <form style="padding-bottom: 0;">
                <div class="row">
                  <div class="col">
                    <div class="row" id="resultwrapper">
                        <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                        <div class="col">
                            <div class="value">0%</div>
                        </div>
                        <div class="col-8 rangewrapper">
                          <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                        </div>
                    </div>
                    <div class="row" id="resultwrapper">
                        <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                        <div class="col">
                            <div class="value">0%</div>
                        </div>
                        <div class="col-8 rangewrapper">
                          <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                        </div>
                    </div>
                    <div class="row" id="resultwrapper">
                        <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                        <div class="col">
                            <div class="value">0%</div>
                        </div>
                        <div class="col-8 rangewrapper">
                          <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                        </div>
                    </div>
                    <div class="row" id="resultwrapper">
                        <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                        <div class="col">
                            <div class="value">0%</div>
                        </div>
                        <div class="col-8 rangewrapper">
                          <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                        </div>
                    </div>
                    <div class="row" id="resultwrapper">
                        <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                        <div class="col">
                            <div class="value">0%</div>
                        </div>
                        <div class="col-8 rangewrapper">
                          <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                        </div>
                    </div>
                  </div>
                  <div class="col">
                      <div class="row" id="resultwrapper">
                          <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                          <div class="col">
                              <div class="value">0%</div>
                          </div>
                          <div class="col-8 rangewrapper">
                            <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                          </div>
                      </div>
                      <div class="row" id="resultwrapper">
                          <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                          <div class="col">
                              <div class="value">0%</div>
                          </div>
                          <div class="col-8 rangewrapper">
                            <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                          </div>
                      </div>
                      <div class="row" id="resultwrapper">
                          <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                          <div class="col">
                              <div class="value">0%</div>
                          </div>
                          <div class="col-8 rangewrapper">
                            <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                          </div>
                      </div>
                      <div class="row" id="resultwrapper">
                          <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                          <div class="col">
                              <div class="value">0%</div>
                          </div>
                          <div class="col-8 rangewrapper">
                            <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                          </div>
                      </div>
                      <div class="row" id="resultwrapper">
                          <div class="col-3"><img src="./assets/dp.jpg" class="img-fluid" id="resultdp"></div>
                          <div class="col">
                              <div class="value">0%</div>
                          </div>
                          <div class="col-8 rangewrapper">
                            <input type="range" name="maleresult" id="mres1" value="55" min="1" max="100" step="1">
                          </div>
                      </div>
                    </div>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->

<div class="container" id="webteam">

    <h1 class="abouttitle">Web Team</h1>
    
    <div class="row">
        <div class="col-12 col-md" data-tilt >
            <a href="#votemodal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
            <a href="#votemodal">
              <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
              <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a href="#votemodal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a href="#votemodal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span> AYUSH</span>
            </a>
            </div>
            <div class="col-12 col-md" data-tilt>
                <a href="#votemodal">
                  <img src="./assets/dp.jpg" alt="dp" class="img-fluid">
                  <span> AYUSH</span>
            </a>
            </div>
        </div>
</div>

<div class="container-fluid" id="footer">
   <div class="row">
     <div class="col-12 col-md-1">
        <a href="http://www.akgec.in/" target="_blank"><img src="./assets/AKGEC_animated.svg" class="img-fluid"></a></div>
     <div class="col-12 col-md-7">     <a href="http://www.akgec.in/" target="_blank">
      Ajay Kumar Garg Engineering College</a></div>
      
      <div class="col-12 col-md-1"><a href="http://www.silive.in/" target="_blank"><img src="./assets/SILogo.svg" class="img-fluid"></a></div>
      <div class="col-12 col-md-3">    <a href="http://www.silive.in/" target="_blank">
        Powered By Software Incubator</a></div>

      </div>
</div>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,100" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"  ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/jarallax.js"></script>
<script type="text/javascript" src="js/parallax.js" ></script>
<script type="text/javascript" src="js/flickneon.js" ></script>
<script type="text/javascript" src="js/tilt.js" ></script>
<script type="text/javascript" src="js/typingEffect.js"  ></script>
<script type="text/javascript" src="js/scrollreveal.min.js"  ></script>
<script type="text/javascript" src="js/smooth-scroll.js"  ></script>
<script type="text/javascript" src="js/custom.js"  ></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">


<script type="text/javascript">
$(window).on('load', function() { 
  $('#presvg').fadeOut(); 
  $('#loader').delay(700).fadeOut('slow'); 
  $('#loaderoverlay').delay(700).fadeOut('slow'); 
  $('body').delay(500).css({'overflow-y':'visible'});
})
</script>

</body>
</html>