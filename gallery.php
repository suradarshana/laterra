<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>LAterra Splendente</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body id="top" class="elepent">
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo delay-03s animated wow zoomIn"><a href="#"><img src="img/logo2.png" alt="logo"></a></div>
      <div class="container bagtr delay-03s animated wow fadeInLeft">
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"

                                    data-target="#main-nav"><span class="sr-only">Toggle navigation</span> <span

                                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li><a href="index.php" class="scroll-link">HOME</a></li>
              <li><a href="about.php" class="scroll-link">About Us</a></li>
              <li><a href="hotels.php" class="scroll-link">Hotels</a></li>
              <li><a href="index.php#tourid" class="scroll-link">Tour</a></li>
              <li class="active"><a href="gallery.php" class="scroll-link">Gallery</a></li>
              <li><a href="##" class="scroll-link">Contact Us</a></li>
              <li> <?php include "nav.php"; ?></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<section id="mobileslide" class="top_cont_outer mobile">
<div class="captiont">
<h1><span class="inline-block typed-text" data-typed-strings="Ayubowan, Ayubowan">Ayubowan </span></h1></div>
  <div id="mycarousel2" class="carousel slide carousel-fade" data-ride="carousel"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox"> 
      <div class="item active"> <img  width="100%" src="img/ms1.jpg" alt="LAterra Splendente"> </div>
      <div class="item"> <img src="img/ms2.jpg" width="100%" alt="LAterra Splendente"> </div>
      <div class="item"> <img src="img/ms3.jpg" width="100%" alt="LAterra Splendente"> </div>
      <div class="item"> <img src="img/ms4.jpg" width="100%" alt="LAterra Splendente"> </div>
    </div>
  </div>
</section>

<section id="hero_section" class="top_cont_outer destop">
<div class="captiont">
<h1><span class="inline-block typed-text" data-typed-strings="Ayubowan, Ayubowan">Ayubowan </span></h1></div>
  <div id="mycarousel" class="carousel slide carousel-fade" data-ride="carousel"> 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox"> 
      <div class="item active"> <img  width="100%" src="img/slider.jpg" alt="LAterra Splendente"> </div>
      <div class="item"> <img src="img/train.jpg" width="100%" alt="LAterra Splendente"> </div>
      <div class="item"> <img src="img/beach.jpg" width="100%" alt="LAterra Splendente"> </div>
      <div class="item"> <img src="img/kandy.jpg" width="100%" alt="LAterra Splendente"> </div>
    </div>
  </div>
</section>
<section class="middle_menu ">
  <nav class="navbar navbar-inverse" role="navigation">
 <!--    <div class="navbar-header">
      <button type="button" id="nav-toggle1" class="navbar-toggle" data-toggle="collapse"

                                    data-target="#main-nav1"><span class="sr-only">Toggle navigation</span> <span

                                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div> -->
    <div id="main-nav1" class="navStyle">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <span class="follow">Follow Us</span> <span class="social delay-03s animated wow zoomIn"> 
      
      <!-- Add font awesome icons --> 
      
      <a href="#" class="fa fa-facebook"></a> <a href="#" class="fa fa-twitter"></a> <!--<a href="#" class="fa fa-google"></a>--> <a href="#" class="fa fa-instagram"></a> </span> 
      
    
      
    </div>
  </nav>
</section>

<section class="gallary" id="gallary">
            <style>
                .portfolio.wild.clearfix {
                    clear: both
                }
                
                .portfolio.rel.clearfix {
                    clear: both
                }
                
                .portfolio.cliant.clearfix {
                    clear: both
                }

                #filters {

margin-top: 10px;

margin-bottom: 40px;

text-align: center;

display: block;

float: none;

z-index: 2;

position: relative;

}



#filters ul li {

display: inline-block;

margin: 0 5px;

}



#filters ul li a {

display: block;

}



#filters ul li a h5 {

background: none repeat scroll 0 0 #f7f7f7;

display: inline-block;



font-size: 12px;

line-height: 20px;

margin-bottom: 5px;

padding: 10px 22px;

/*text-transform: uppercase;*/

transition: all 0.3s ease-in-out 0s;

background: #fff;

border: #C2C2C2 solid 1px;

color: #7C7C7C;

}



#filters ul li a:hover h5,
#filters ul li a.active h5 {

background: #fff;

color: #AE2727;

text-decoration: none;

border: #AE2727 solid 1px;

}

#filters ul {

padding-left: 0px;

}



#filters {
  margin: 1%;
  padding: 0;
  list-style: none;
}

#filters li {
  float: left;
}


#filters li span {
  display: block;
  padding: 5px 20px;
  text-decoration: none;
  color: #666;
  cursor: pointer;
}

#filters li span.active {
  background: #e95a44;
  color: #fff;
}



#portfoliolist .portfolio {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  width: 23%;
  margin: 1%;
  display: none;
  float: left;
  overflow: hidden;
}

.portfolio-wrapper {
  overflow: hidden;
  position: relative !important;
  background: #666;
  cursor: pointer;
}

.portfolio img {
  max-width: 100%;
  position: relative;
  top: 0;
  -webkit-transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
}

.portfolio .label {
  position: absolute;
  width: 100%;
  height: 40px;
  bottom: -40px;
  -webkit-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
}

.portfolio .label-bg {
  background: #e95a44;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

.portfolio .label-text {
  color: #fff;
  position: relative;
  z-index: 500;
  padding: 5px 8px;
}

.portfolio .text-category {
  display: block;
  font-size: 9px;
}

.portfolio:hover .label {
  bottom: 0;
}

.portfolio:hover img {
  /*top:-30px;*/
  /*	transition: transform .2s;
	max-width:400px;
	width: 400px;
    height: 225px;*/
}

@media only screen and (max-width: 767px) {
  .container {
    width: 95%;
  }

  #portfoliolist .portfolio {
    width: 48%;
    margin: 1%;
  }
}
            </style>
            <div class="container">
                <br>
                <h2>Gallery</h2>
                <ul id="filters" class="clearfix">
                    <li><span class="filter" data-filter=".rel, .inter, .cliant, .wild">All</span></li>
                    <li><span class="filter active" data-filter=".rel">Religious places</span></li>
                    <li><span class="filter" data-filter=".inter">Interesting places</span></li>
                    <li><span class="filter" data-filter=".wild">Wild life</span></li>
                   <!--  <li><span class="filter" data-filter=".cliant">Our Happy Clients</span></li> -->
                </ul>
                <div id="portfoliolist">
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25201.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25202.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25203.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25204.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25205.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25206.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25207.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25208.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%25209.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252010.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252011.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252012.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252013.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252014.jpg" alt=""></div>
                    <div class="portfolio rel clearfix" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252015.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252016.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252017.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252018.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252019.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252020.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252021.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252022.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252023.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252024.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252025.jpg" alt=""></div>
                    <div class="portfolio rel" data-cat="rel" style="display: inline-block;" data-bound=""> <img src="img/gallary/p%252026.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25201.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25202.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25203.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25204.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25205.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25206.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25207.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25208.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%25209.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252010.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252011.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252012.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252013.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252014.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252015.jpg" alt=""></div>
                    <div class="portfolio inter" data-cat="inter"> <img src="img/gallary/i%252016.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25201.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25202.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25203.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25204.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25205.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25206.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25207.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%25208.jpg" alt=""></div>
                    <div class="portfolio wild clearfix" data-cat="wild"> <img src="img/gallary/w%25209.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%252010.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%252011.jpg" alt=""></div>
                    <div class="portfolio wild" data-cat="wild"> <img src="img/gallary/w%252012.jpg" alt=""></div>
                   <!--  <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25201.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25202.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25203.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25204.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25205.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25206.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25207.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25208.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%25209.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252010.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252011.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252012.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252013.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252014.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252015.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252016.jpg" alt=""></div>
                    <div class="portfolio cliant clearfix" data-cat="cliant"> <img src="img/gallary/c%252017.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252018.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252019.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252020.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252021.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252022.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252023.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252024.jpg" alt=""></div>
                    <div class="portfolio cliant clearfix" data-cat="cliant"> <img src="img/gallary/c%252025.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252026.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252027.jpg" alt=""></div>
                    <div class="portfolio cliant" data-cat="cliant"> <img src="img/gallary/c%252028.jpg" alt=""></div> -->
                </div>
            </div>
        </section>
  
<?php include 'footer.php';?>
<script  type="text/javascript"  src="./js/scripts.js"></script>
<script  type="text/javascript"  src="./js/typed.min.js"></script>

<script type="text/javascript" src="./js/jquery-1.js"></script> 
<script type="text/javascript" src="./js/jquery_004.js" class="containerScripts"></script>
<script type="text/javascript" class="containerScripts">
	$(function () {
		var filterList = {init: function () {
			$('#portfoliolist').mixItUp({selectors: {target: '.portfolio', filter: '.filter'}, load: {filter: '.rel'}});
		}};
		filterList.init();
	});
</script>