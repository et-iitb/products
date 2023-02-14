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
	</head>
	<style>
		*{text-align: justify!important;}
	</style>
	<body>
		<!-- Nav Menu Div -->
		<nav class="navbar navbar-expand-lg navbar-light main_menu mainmenu2" >
      <div class="container-fluid" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="align-items: center;">
          <ul class="navbar-nav">
			<!-- <div class="top_logo"><a href="index.html"><img src="img/et_logo.png"></a></div> -->
			<!-- <li class="nav-item">
				<a href="index.html"><img src="img/et_logo.png" width="50%" height="20%"></a>
			  </li> -->
			  <li class="nav-item">
				
			  </li>
			  <li class="nav-item">
				
			  </li>
			  <li class="nav-item">
				
			  </li>
			  <li class="nav-item">
				
			  </li>
			  <li class="nav-item">
				
			  </li>
			  <li class="nav-item">
				
			  </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">About Us</a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="index.html">Projects</a></li> -->
            <li>
              <a href="#" class="projects dropdown-toggle" data-toggle="dropdown">Projects
              </a>
              <div class="dropdown-menu sub-menu clearfix">
                <div class="col-1" style="max-width: 100%;">
                  <ul class="sub-menu1">
                    <li>Emerging Technologies <img src="img/play-arrow1.png">
                      <ul class="dropdown-menu">
                        <li>Leap Motion <img src="img/play-arrow1.png">
                          <ul class="dropdown-menu">
                            <a href="GVG.html">
                              <li>G-v-G</li>
                            </a>
                          </ul>
                        </li>
                        <li>Myo Band <img src="img/play-arrow1.png">
                          <ul class="dropdown-menu">
                            <a href="combat.html">
                              <li>CoMBaT</li>
                            </a>
                          </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"> Augmented Reality <img src="img/play-arrow1.png">
                          <ul class="list-group">
                            <a href="geosolvar.html">
                              <li class="list-group-item">GeoSolVAR</li>
                            </a>
                            <a href="stereochem.html">
                              <li class="list-group-item">StereoChem</li>
                            </a>
                            <a href="augmath.html">
                              <li class="list-group-item">Augmented Maths</li>
                            </a>
                            <a href="think-before-throw.html">
                              <li class="list-group-item">Think b4u Throw</li>
                            </a>
                          </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Virtual Reality <img src="img/play-arrow1.png">
                          <ul class="list-group">
                            <a href="speakup.html">
                              <li class="list-group-item">Speak Up</li>
                            </a>
                          </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Smartphone Colorimetry <img src="img/play-arrow1.png">
                          <ul class="list-group">
                            <a href="tcd.html">
                              <li class="list-group-item">Titration ColorDarts</li>
                            </a>
                          </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Combination Technology <img src="img/play-arrow1.png">
                          <ul class="list-group">
                            <a href="roadethos.html">
                              <li class="list-group-item">RoadEthos</li>
                            </a>
                            <a href="dist-tutor.html">
                              <li class="list-group-item">DiST Tutor</li>
                            </a>
                          </ul>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Web based <img src="img/play-arrow1.png">
                          <ul class="list-group">
                            <a href="geo-maps.html">
                              <li class="list-group-item">GeoMaps</li>
                            </a>
                          </ul>
                        </li>
                      </ul>
                    </li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						Teacher Capacity Building
						<img src="img/play-arrow1.png">
						<ul class="list-group">
						  <a href="et611tx.html">
							<li class="list-group-item">ET611Tx</li>
						  </a>
						  <a href="et621tx.html">
							<li class="list-group-item">ET621Tx</li>
						  </a>
						  <a href="cep-2019.html">
							<li class="list-group-item">CEP Course</li>
						  </a>
						</ul>
					  </li>
					  
					  <li class="list-group-item d-flex justify-content-between align-items-center">
						Evaluation Instruments
						<img src="img/play-arrow1.png">
						<ul class="list-group">
						  <a href="lobe.html">
							<li class="list-group-item">LOBE</li>
						  </a>
						  <a href="tec.html">
							<li class="list-group-item">TEC</li>
						  </a>
						</ul>
					  </li>
                  </ul>
                </div>
              </div>
            <li class="nav-item">
              <a class="nav-link" href="teachervoices.html">Teacher Voices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Resources.html">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Publications.html">Publications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact-Us.html">Contact Us</a>
            </li>
            <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Projects <img src="img/downarrow.png"></a><div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><div class="container"><div class="row"><div class="col-sm-3"><h5>Emerging Technologies</h5><a class="dropdown-item" href="#">Leap Motion</a><a class="dropdown-item" href="#">Myo Band</a><a class="dropdown-item" href="#">Augmented Reality</a><a class="dropdown-item" href="#">Virtual Reality</a><a class="dropdown-item" href="#">Smartphone Colorimetry</a><a class="dropdown-item" href="#">Combination Technology</a><div class="col-1"><ul class="sub-menu1"><li class="dropdown-submenu">
								Emerging Technologies <img src="img/play-arrow1.png"><ul class="dropdown-menu"><li class="dropdown-submenu">
									Leap Motion <img src="img/play-arrow1.png"><ul class="dropdown-menu"><a href="GVG.html"><li>G-v-G</li></a></ul></li><li class="dropdown-submenu">
									Myo Band <img src="img/play-arrow1.png"><ul class="dropdown-menu"></ul></li></ul></li></ul></div></div></div></div></div></li> -->
          </ul>
        </div>
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
	<!-- Overview Div -->
	<div class="about_lab">
		<div class="width-container clearfix">
			<!-- <div class="overviewtab clearfix" id="Overview">
					<h5>OBJECTIVE</h5>
					<img src="img/downarrow.png">
			</div>
			<div class="width-container">
					<div class="about-div clearfix overviewdiv">
							<h4>Overview of MOOC courses</h4>
							<p>The lab has created multiple learner-centred Massive Open Online Courses (MOOCs) for school teachers on the topic of  pedagogy for effective use of ICT  in teaching and learning. The ET611Tx course is targeted at all school teachers whereas ET621Tx course is targeted at Computer Science (CS) teachers in schools and focused on effective teaching of CS.  These bi-annual courses are running successfully on the <a href="https://www.iitbombayx.in/" target="_blank">IITBombayX</a> platform. The courses have already trained 8000+ school teachers. Honor code certificate from IITBombayX is awarded to teachers who successfully pass the course. </p>
				</div>
			</div> -->
		</div>
	</div>
	<!-- End Overview Div -->
	<!-- ET611Tx Div -->
	<div class="about_lab">
		<div class="width-container clearfix">
			<div class="et61tab clearfix" id="ET611Tx">
				<h5>ET611Tx</h5>
				<img src="img/downarrow.png">
			</div>
			<div class="width-container">
				<div class="about-div clearfix et61div">
					<h4>ET611Tx: 'Pedagogy for effective use of ICT for school teachers'</h4>
					<div class="img-et">
						<img src="img/et611tx.png">
						
						<p>Facebook Link :- <a href="https://www.facebook.com/et611tx/">https://www.facebook.com/et611tx/</a></p>
						<br/>
						<span><a href="./download.html?file=et611.pdf">Course handout </a></a></span>
						<div class="counter-part" class ="download_count1">
							<p>Download count:- <span style="background: black; color: #ffff; padding: 0px 1px 0px 1px; display: inline-block; text-align: center;">0<?php echo get_download_count('et611.pdf');?></span> times</p>
						</div>
					</div>
					<div class="et-course-div">
						<h6>About the course</h6>
						<p id="justify1">There exists research-based evidence which shows that lecturing or mere demonstrations with Information & Communication Technology (ICT) tools are not effective for student learning, especially for higher order thinking skills. Instead, students learn effectively when they do carefully designed activities in class with the technologies get feedback on their work immediately, and when the assessment is aligned to these activities.<br><br>In this context, the goals of this 4-week course are:</p>
						<ul>
							<li>Facilitate transition from teacher-centric to student-centric while teaching with ICT.</li>
							<li>Identify relevant ICT tools for teaching-learning goals.</li>
							<li>Design student-centric activities and aligned assessment using ICT tools.</li>
							<li>Develop a collaborative community of teachers to share best-practices and experiences.</li>
							
						</ul><br/>
						<div class="et-course-div1">
							<h6>Publications</h6>
							<ol>
								<li>Shah V., Banerjee G., Murthy S. & Iyer S. (2018), "Learner-centric MOOC for teachers on effective ICT integration: Perceptions and experiences", Proceedings of IEEE Ninth International Conference on Technology for Education (T4E) (In press)</li>
								<li>Banerjee G., Warriem J. , and Mishra S. (2018), “Learning experience interaction (LxI): Pedagogy for peer-connect in MOOCs,” in Yang, J. C. et al. (Eds.). Proceedings of the 26th International Conference on Computers in	Education. Philippines: Asia-Pacific Society for Computers in Education </li>
							</ol>
						</div>
						
						
						
					</div>
					
					<div>
						
					</div>
					
				</div>
			</div>
		</div><br/>
	</div>
	<!-- End ET611Tx Div -->
	<!-- ET621Tx Div -->
	<div class="about_lab">
		<div class="width-container clearfix ">
			<div class="et62tab clearfix" id="ET621Tx">
				<h5>ET621Tx</h5>
				<img src="img/downarrow.png">
			</div>
			<div class="width-container">
				<div class="about-div clearfix et62div">
					<h4>ET621Tx: 'Pedagogy for effective teaching-learning of CS in schools'</h4>
					<div class="img-et">
						<img src="img/et611tx.png">
						<br>
						<br>
						
						<span><a href="./download.html?file=et621.pdf" >Course handout</a></span>
						<div class="counter-part download_count1">
							<p>Download count:- <span style="background: black; color: #ffff; padding: 0px 1px 0px 1px; display: inline-block; text-align: center;">0<?php echo get_download_count('et621.pdf');?> </span> times</p>
						</div>
					</div>
					<div class="et-course-div">
						<h6>About the course:</h6>
						<p>The goals of this course are:</p>
						<ul>
							<li>Give a hands-on experience of CS concepts like safety and integrating CS with other subjects in the curriculum. </li>
							<li>Apply effective pedagogical techniques for teaching-learning of Computer Science Concepts .</li>
							<li>Develop a collaborative community of CS teachers to share their experiences and best practices </li>
							
						</ul>
						
						
					</div>
					
				</div>
			</div>
		</div>
		<br/><br/><br/>
	</div>
	<!-- End ET621Tx Div -->
	<!-- Footer Tab -->
	<div class="count-tab">
		<div class="width-container clearfix">
			<div class="visit-div">
				<span><strong>Visitors Count</strong> <img border="0" src="http://cc.amazingcounters.com/counter.html?i=3220904&c=9663025" alt="visitors"> Since 2018</span>
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
	</footer>
	<!-- End Footer Tab -->
</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script><!-- Jquery File -->
<script type="text/javascript" src="js/smoothscroll.js"></script><!--Smoothscroll file-->
<script>
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
		$(".overviewtab").click(function () {
			$(".overviewdiv").slideToggle();
			$(".et61div").slideUp();
			$(".et62div").slideUp();
		});
	});
	$(document).ready(function () {
		$(".et61tab").click(function () {
			$(".et61div").slideToggle();
			$(".overviewdiv").slideUp();
			$(".et62div").slideUp();
		});
		$("#et61").click(function (){
			$(".et61div").slideToggle();
			$(".overviewdiv").slideUp();
			$(".et62div").slideUp();
		});
	});
	$(document).ready(function () {
		$(".et62tab").click(function () {
			$(".et62div").slideToggle();
			$(".et61div").slideUp();
			$(".overviewdiv").slideUp();
		});
		$("#et612").click(function (){
			$(".et62div").slideToggle();
			$(".et61div").slideUp();
			$(".overviewdiv").slideUp();
		});
	});
	$(document).ready(function () {
	if(window.location.href.indexOf("ET611Tx") > -1) {
	$(".et61div").slideToggle();
	$(".et62div").slideUp();
	}
	else if(window.location.href.indexOf("ET621Tx") > -1){
		$(".et62div").slideToggle();
	$(".et61div").slideUp();
	}
	// if(window.location.href.indexOf("ET621Tx") > -1) {
	//    $(".et62div").slideDown();
	//    $(".et61div").slideUp();
	// }
	});
	$(document).ready(function () {
		$(".readbtn").click(function () {
			$(".hidden-content").slideToggle("slow");
		});
	});
</script>
</html>