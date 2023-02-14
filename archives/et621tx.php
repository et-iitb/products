<?php 
function get_download_count($file=null){
	$counters = './counters/';
	if($file == null) return 0;
	$count = 0;
	if(file_exists($counters.md5($file).'_counter.txt')){
		$fp = fopen($counters.md5($file).'_counter.txt', "r");
		$count = fread($fp, 1024);
		fclose($fp);
	}else{
		$fp = fopen($counters.md5($file).'_counter.txt', "w+");
		fwrite($fp, $count);
		fclose($fp);
	}
	return $count;
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130108276-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-130108276-1');
	</script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>NextEducation Research Lab</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"><!-- Font Awesome css -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet"> <!-- Roboto Font css --> 
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"><!-- Owl Carousel css -->
	<link rel="stylesheet" type="text/css" href="css/style.css"><!-- style css --> 
	 <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- style css --> 
	<style type="text/css">

</style>
</head>
<body>
	<!-- Nav Menu Div -->
	<nav class="main_menu">
		<div class="width-container clearfix">
			<div id="mob-menu">MENU &nbsp;<img src="img/menu.png"></div>
			<!-- <div class="top_logo"><a href="index.html"><img src="img/IIT_Bombay_Logo.png"></a></div> -->
			<ul class="top-menu">
				<li><a href="index.html">About Us</a></li>
				<li><a href="javascript:void(0)" class="projects">Projects <img src="img/downarrow.png"></a>
					<div class="sub-menu clearfix">
						<div class="col-1">
							<ul class="sub-menu1">
								<li>Emerging Technologies <img src="img/play-arrow1.png"> 
									
									<ul>
										<li>Leap Motion <img src="img/play-arrow1.png">
											<ul>
												<a href="GVG.html"> <li>G-v-G</li></a>
												</ul>	
											</li>
											<li>Myo Band <img src="img/play-arrow1.png">
												<ul>
													<a href="combat.html"> <li>CoMBaT</li></a>
													</ul>
												</li>
												<li>Augmented Reality <img src="img/play-arrow1.png">
													<ul>
														<a href="geosolvar.html"> <li>GeoSolVAR</li></a>
															<a href="stereochem.html"> <li>StereoChem</li></a>
																<a href="augmath.html"> <li>Augmented Maths</li></a>
																</ul>	
															</li>
															<li>Virtual Reality <img src="img/play-arrow1.png">
																<ul>
																	<a href="speakup.html"> <li>Speak Up</li></a>
																	</ul>	
																</li>
																<li>Smartphone Colorimetry<img src="img/play-arrow1.png">
																	<ul>
																		<a href="tcd.html"> <li>Titration ColorDarts</li></a>
																		</ul>
																	</li>
																	<li>Combination Technology <img src="img/play-arrow1.png">
																		<ul>
																			<a href="roadethos.html"> <li>RoadEthos</li></a>
																			</ul>
																		</li>

																	</ul>
																	</li>
																	<li>Teacher Capacity Building <img src="img/play-arrow1.png">
																		<ul>
																			<a href="et611tx.html"> <li>ET611Tx</li></a>
																			<a href="javascript:void(0)"> <li>ET621Tx</li></a>
																		</ul>
																	</li>
																	<li>Evaluation Instruments <img src="img/play-arrow1.png">
																		<ul>
																			<a href="lobe.html"> <li>LOBE</li></a>
																			<a href="tec.html"> <li>TEC</li></a>
																		</ul>
																	</li>

																</ul>
															</div>

														</div>
													</li>
													<li><a href="teachervoices.html">Teacher Voices</a></li>
													<li><a href="Resources.html">Resources</a></li>
													
													<li><a href="Publications.html">Publications</a></li>

													<li><a href="Contact-Us.html">Contact Us</a></li>
												</ul>
											</div>
										</nav>
	<!-- End Nav Menu Div -->

	<!-- Main Header Image -->
	<div class="Main_image">
		<div class="width-container clearfix">
			<div class="et-logo">
				<a href="http://www.et.iitb.ac.in/" target="_blank"><img src="img/et_logo(1).png"></a>
			</div>
			<div class="nerl">
				<img src="img/NERL.jpg">
			</div>
			<div class="nxt-logo">
				<a href="https://www.nexteducation.in/" target="_blank"><img src="img/next_logo-new.png"></a>
			</div>
		</div>
	</div>
	<!-- End Main Header Image -->

	<!-- About Lab Div -->
	<div class="fullblk clearfix">
		<div class="side-panel">
			<ul>
				<li class="side-learn slidepanelactive"><a href="#Learning" class="Learning">About the course</a></li>
				<!-- <li class="side-purp"><a href="#Purpose" class="Purpose">Purpose of using G-v-G</a></li> -->
				<!-- <li class="side-res"><a href="#Resources" class="Resources" style="font-size:1.2vw;">Publications</a></li> -->
				<li class="sideget"><a href="#Getting" class="Getting" >Further information</a></li>
			</ul>
		</div>
		<div class="about_lab GVG-block">
			<div class="width-container">
				<div class="about-div clearfix gvg-div">
					<div id="Learning">
						<h3>ET621Tx: 'Pedagogy for effective teaching-learning of CS in schools'</h3><br/>

					<!-- <h4 style="padding-bottom: 0px;">Purpose of using G-v-G</h4>
						<p style="padding-top: 15px;">The purpose of G-v-G is to enable learners to build 3D Geometric abilities. G-v-G is based on the idea that students learn 3D Geometry when they connect it to their prior knowledge of 2D.</p><br/>


						<h4>Learning 3D geometry using gestures</h4> -->
						<div >
							<img width="546" height="307" src="img/et611tx.png">
							<!-- <iframe width="546" height="307" src="https://www.youtube.com/embed/rOQibY2Vynw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
						</div>
						<h4 style="padding-bottom: 0px;">About the course</h4>
						<p style="padding-top: 15px; text-align: justify">The goals of this course are:</p>
						<div class="about-usp">
						<ul>
							<li>Give a hands-on experience of CS concepts like safety and integrating CS with other subjects in the curriculum.</li>
							<li>Apply effective pedagogical techniques for teaching-learning of Computer Science Concepts .</li>
							<li>Develop a collaborative community of CS teachers to share their experiences and best practices</li>
							<!-- <li>Develop a collaborative community of teachers to share best-practices and experiences.</li> -->

						</ul>
					</div>

					</div>	
					<div class="gvg-content">
						<div class="gvg-cont-div">
							<!-- <div id="Resources" class="bottom">
								<h4>Publications</h4>
								<ol>
									<li>Shah V., Banerjee G., Murthy S. & Iyer S. (2018), "Learner-centric MOOC for teachers on effective ICT integration: Perceptions and experiences", Proceedings of IEEE Ninth International Conference on Technology for Education (T4E) (In press)</li>

									<li>Banerjee G., Warriem J. , and Mishra S. (2018), “Learning experience interaction (LxI): Pedagogy for peer-connect in MOOCs,” in Yang, J. C. et al. (Eds.). Proceedings of the 26th International Conference on Computers in	Education. Philippines: Asia-Pacific Society for Computers in Education </li>
								</ol>
								<br>

							</div> -->

							<div id="Getting" class="bottom">
								<h4>Further information</h4>
									<ul>
										<!-- <li>Facebook Link :- <a href="https://www.facebook.com/et611tx/">https://www.facebook.com/et611tx/</a></li> -->
										<li>Download course handout</li>
									</ul>
								<div id="dch">	
										<span class="dch"><a href="./download.html?file=et621.pdf" >Course handout</a></span>
								<div class="counter-part download_count1">
									<p>Download count:- <span style="background: black; color: #ffff; padding: 0px 1px 0px 1px; display: inline-block; text-align: center;">0<?php echo get_download_count('et621.pdf');?> </span> times</p>
								</div>
							</div>
									
								
							<!-- <ul class="guid-ul">
								<li>If you wish to use G-v-G online, without downloading the software, then click on:
									<ul>
										<li>Teacher's corner: If you are a teacher.</li>
										<li>Researcher's corner: If you are a researcher.</li>
										<li>Developer's corner: If you are a developer.</li>
									</ul>
								</li>
							</ul> -->

							

							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End About Lab Div -->

<!-- Footer Tab -->

<!-- <div class="footer" id="footer"> -->
<div class="count-tab">
	<div class="width-container clearfix">
		<div class="visit-div">
			<span><strong>Visitors Count</strong>  <img border="0" src="http://cc.amazingcounters.com/counter.html?i=3220904&c=9663025" alt="visitors"> Since 2018</span>
		</div>
		<div class="sponsor-div">
			<span><strong>Sponsor: </strong>NextEducation India Private Ltd.</span>
		</div>
	</div>
</div>
<footer>
	<div class="width-container clearfix">
		<div class="et-div">
			<img src="img/IIT_Bombay_Logo.png">
		</div>
		<div class="creative-div">
			<p>Contents in this page are licensed under <b>Creative Commons-Attribution 4.0 International License</b>. You are free to use, distribute and modify it,including for commercial purposes, provided you acknowledge the source.</p>
		</div>
	</div>
</footer><!-- </div> -->

<!-- End Footer Tab -->
</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script><!-- Jquery File --> 
<script type="text/javascript" src="js/owl.carousel.js"></script><!-- Owl Carousel File --> 
<!-- <script type="text/javascript" src="js/smoothscroll.js"></script> --><!--Smoothscroll file-->
<script>
	$(document).ready(function(){
		$(".link-1").click(function(){
			$("#second, #third").hide();
			$("#first").show();
			$(".link-1").addClass("active-tab");
			$(".link-2, .link-3").removeClass("active-tab");
		});

		$(".link-2").click(function(){
			$("#first, #third").hide();
			$("#second").show();
			$(".link-2").addClass("active-tab");
			$(".link-1, .link-3").removeClass("active-tab");
		});

		$(".link-3").click(function(){
			$("#second, #first").hide();
			$("#third").show();
			$(".link-3").addClass("active-tab");
			$(".link-1, .link-2").removeClass("active-tab");
		});



	    // for Teacher/Researcher/Developer Corner 

	    $(".teacher-corner").click(function () {
	    	$(this).addClass("Onclick-corner");
	    	$(".researcher-corner, .developer-corner").removeClass("Onclick-corner");
	    	$(".teacher-tab").fadeIn();
	    	$(".researcher-tab, .developer-tab").fadeOut();
	    })

	    $(".researcher-corner").click(function () {
	    	$(this).addClass("Onclick-corner");
	    	$(".teacher-corner, .developer-corner").removeClass("Onclick-corner");
	    	$(".researcher-tab").fadeIn();
	    	$(".teacher-tab, .developer-tab").fadeOut();
	    })

	    $(".developer-corner").click(function () {
	    	$(this).addClass("Onclick-corner");
	    	$(".teacher-corner, .researcher-corner").removeClass("Onclick-corner");
	    	$(".developer-tab").fadeIn();
	    	$(".teacher-tab, .researcher-tab").fadeOut();
	    })
	});

	$(document).ready(function () {
		$(".projects").click(function () {
			$(".sub-menu").slideToggle();
		});
	});

	$(document).ready(function () {
		$(".People-heading").click(function () {
			$(".People-slide").slideToggle();
		});
	});

	$(document).ready(function () {
		$("#mob-menu").click(function () {
			$(".top-menu").slideToggle();
		});
	});

	$(document).ready(function () {
		$(".Learning").click(function() {
			$("#Learning").fadeIn();
			$("#Purpose, #Getting, #Resources").fadeOut();
			$(".side-learn").addClass('slidepanelactive');
			$(".side-purp, .side-res, .sideget").removeClass('slidepanelactive');

		});

		$(".Purpose").click(function() {
			$("#Purpose").fadeIn();
			$("#Learning, #Getting, #Resources").fadeOut();
			$(".side-purp").addClass('slidepanelactive');
			$(".side-learn, .side-res, .sideget").removeClass('slidepanelactive');
		});

		$(".Resources").click(function () {
			$("#Resources").fadeIn();
			$("#Purpose, #Getting, #Learning").fadeOut();
			$(".side-res").addClass('slidepanelactive');
			$(".side-learn, .side-purp, .sideget").removeClass('slidepanelactive');
		});

		$(".Getting").click(function () {
			$("#Getting").fadeIn();
			$("#Purpose, #Learning, #Resources").fadeOut();
			$(".sideget").addClass('slidepanelactive');
			$(".side-learn, .side-purp, .side-res").removeClass('slidepanelactive');
		});
	});
</script>
<!-- color white on click -->
<!-- <script>
	<script>

    document.getElementById('tcdiv').onclick = changeColor; 


    function changeColor() {
         document.getElementById("tc").style.color = "#ff0000 !important";
          document.getElementById("rc").style.color = "magenta !important";
           document.getElementById("dc").style.color = "magenta !important";
        return false;
    }   

</script> -->
</script>
<script src="js/preventDefault.js"></script>
</html>