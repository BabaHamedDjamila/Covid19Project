<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Je M'informe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
    <style >
body {
  font: normal normal 400 1rem/1.5 "Segoe UI", "Helvetica Neue", "DejaVu Sans", Helvetica, Arial, sans-serif;
}
aside {
  float: left;
  margin-right: 100px;
}
.chart {
  margin-bottom:0;
  margin-top:0;
}
.vert > canvas, .vert > ol {
  display:inline-block
}
.horiz > li {
  display: inline;
  padding-right: 20px;
}
.legend {
  vertical-align:top;
  padding-left:15px;
  list-style: none;
}
.key {
  position:relative;
}
.key:before {
  content:"";
  position:absolute;
  top:35%;
  left:-15px;
  width:10px;
  height:10px;
}
.one:before{background:rgb(236, 208, 120)}
.two:before{background:rgba(217, 91, 67, 0.7)}
.three:before{background:rgba(192, 41, 66, 0.7)}
.four:before{background:rgba(84, 36, 55, 0.7)}
.five:before{background:rgba(83, 119, 122, 0.7)}
.six:before{background:rgba(119, 146, 174, 0.7)}
</style>
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Acceuille.html">Acceuille</a></li>
          <li><a href="idée.html">J'ai une idée</a></li>
          <li><a href="informer.html">informer</a></li>
          <li><a href="s'inscrire.html">inscrire</a></li>
          <li><a href="je dénonce.html">Je Dénonce</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h1 id="colorlib-logo" class="mb-5"><a href="index.html" style="background-image: url(images/bg_1.jpg);">Je M' <span>Informe</span></a></h1>
				<p class="pfooter"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
	    	<div class="container-fluid px-0">

	    <aside class="chart vert">
  <canvas id="canPie" width="300" height="200" data-values='40, 30, 20, 60, 10, 50'>
    This browser does not support HTML5 Canvas.
  </canvas>
  <ol class="legend">
    <li class="key one">One</li>
    <li class="key two">Two</li>
    <li class="key three">Three</li>
    <li class="key four">Four</li>
    <li class="key five">Five</li>
    <li class="key six">Six</li>
  </ol>
</aside>
<aside class="chart">
  <canvas id="canPeak" width="300" height="200" data-values='40, 30, 20, 60, 10, 50'>
    This browser does not support HTML5 Canvas.
  </canvas>
  <ol class="legend horiz">
    <li class="key one">One</li>
    <li class="key two">Two</li>
    <li class="key three">Three</li>
    <li class="key four">Four</li>
    <li class="key five">Five</li>
    <li class="key six">Six</li>
  </ol>
</aside>
<aside class="chart">
  <canvas id="canBar" width="300" height="200" data-values='40, 30, 20, 60, 10, 50'>
    This browser does not support HTML5 Canvas.
  </canvas>
  <ol class="legend horiz">
    <li class="key one">One</li>
    <li class="key two">Two</li>
    <li class="key three">Three</li>
    <li class="key four">Four</li>
    <li class="key five">Five</li>
    <li class="key six">Six</li>
  </ol>
</aside>
	    
</div>
	    </section>
	   
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
<script src="//www.amcharts.com/lib/3/ammap.js"></script>
<script src="//www.amcharts.com/lib/3/maps/js/continentsLow.js"></script>
<script src="//www.amcharts.com/lib/3/themes/black.js"></script>
<script src="//www.amcharts.com/lib/box2d/Box2dWeb-2.1.a.3.min.js"></script>
<script>
  
 /* Pie Chart Javascript
=====================================================================*/
var pieColors = ['rgb(236, 208, 120)', 'rgba(217, 91, 67, 0.7)', 'rgba(192, 41, 66, 0.7)', 'rgba(84, 36, 55, 0.7)', 'rgba(83, 119, 122, 0.7)', 'rgba(119, 146, 174, 0.7)'];

function getTotal( arr ){
    var j,
        myTotal = 0;
    
    for( j = 0; j < arr.length; j++) {
        myTotal += ( typeof arr[j] === 'number' ) ? arr[j] : 0;
    }
    
    return myTotal;
}

function drawPieChart( canvasId ) {
    var i,
        canvas = document.getElementById( canvasId ),
        pieData = canvas.dataset.values.split(',').map( function(x){ return parseInt( x, 10 )}),
        halfWidth = canvas.width * .5,
        halfHeight = canvas.height * .5,
        ctx = canvas.getContext( '2d' ),
        lastend = 0,
        myTotal = getTotal(pieData);

    ctx.clearRect( 0, 0, canvas.width, canvas.height );

    for( i = 0; i < pieData.length; i++) {
        ctx.fillStyle = pieColors[i];
        ctx.beginPath();
        ctx.moveTo( halfWidth, halfHeight );
        ctx.arc( halfWidth, halfHeight, halfHeight, lastend, lastend + ( Math.PI * 2 * ( pieData[i] / myTotal )), false );
        ctx.lineTo( halfWidth, halfHeight );
        ctx.fill();
        lastend += Math.PI * 2 * ( pieData[i] / myTotal );
    }
}

drawPieChart('canPie');

/* Peak Chart Javascript
=====================================================================*/
var peakColors = ['rgb(236, 208, 120)', 'rgba(217, 91, 67, 0.7)', 'rgba(192, 41, 66, 0.7)', 'rgba(84, 36, 55, 0.7)', 'rgba(83, 119, 122, 0.7)', 'rgba(119, 146, 174, 0.7)'];

function drawPeakChart( canvasId ) {
    var i, start, peakPoint,
        canvas = document.getElementById( canvasId ),
        peakData = canvas.dataset.values.split(',').map( function(x){ return parseInt( x, 10 )}),
        ctx = canvas.getContext( '2d' ),
        max = Math.max.apply( Math, peakData ),
        plotBase = canvas.width / peakData.length,
        overlap = plotBase * .4;
        plotBase += canvas.width * .05;
    
    ctx.clearRect( 0, 0, canvas.width, canvas.height );
    
    for( i = 0; i < peakData.length; i++) {
        start = i === 0 ? 0 : i * plotBase - i * overlap;
        peakPoint = canvas.height - Math.round( canvas.height * ( peakData[i] / max ) );
        ctx.fillStyle = peakColors[i];
        ctx.beginPath();
        ctx.moveTo( start, canvas.height );
        ctx.lineTo( start + plotBase * .5, peakPoint );
        ctx.lineTo( start + plotBase, canvas.height );
        ctx.lineTo( start, canvas.height );
        ctx.fill();
    }
}

drawPeakChart('canPeak');

/* Bar Chart Javascript
=====================================================================*/
var barColors = ['rgb(236, 208, 120)', 'rgba(217, 91, 67, 0.7)', 'rgba(192, 41, 66, 0.7)', 'rgba(84, 36, 55, 0.7)', 'rgba(83, 119, 122, 0.7)', 'rgba(119, 146, 174, 0.7)'];

function drawBarChart( canvasId ) {
    var i, start, top,
        canvas = document.getElementById( canvasId ),
        barData = canvas.dataset.values.split(',').map( function(x){ return parseInt( x, 10 )}),
        ctx = canvas.getContext( '2d' ),
        max = Math.max.apply( Math, barData ),
        padding = 20,
        plotWidth = canvas.width / barData.length - padding;
    
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    for( i = 0; i < barData.length; i++) {
        start = i === 0 ? 0 : i * ( plotWidth + padding );
        top = canvas.height - Math.round( canvas.height * ( barData[i] / max ) );
        ctx.fillStyle = peakColors[i];
        ctx.fillRect( start, top, plotWidth, canvas.height - top);
    }
}

drawBarChart('canBar');

</script>


    
  </body>
</html>