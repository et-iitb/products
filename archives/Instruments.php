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
	<link rel="stylesheet" type="text/css" href="css/responsive.css"><!-- style css --> 
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
																			<a href="et621tx.html"> <li>ET621Tx</li></a>
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

<!-- Overview Div -->
<div class="about_lab">
	<div class="width-container clearfix">
		<!-- <div class="overviewtab clearfix" id="Overview">
			<h5>OBJECTIVE</h5>
			<img src="img/downarrow.png">
		</div>
		<div class="width-container">
			<div class="about-div clearfix overviewdiv">
				<h4>Instruments for evaluating digital content</h4>
				<p>NextEd Research Lab has developed two types of instruments to evaluate quality of instructional products like multimedia teaching materials and textbooks for Science and Mathematics.</p>

				<ul>
					<li>Learning object evaluation instrument (LOBE) - a rubric to judge quality of multimedia learning products along the three dimensions of Content quality (C), Pedagogical alignment (P) and Technology integration (T)</li>
					<li>Textbook evaluation instrument (TEC) - a 3-scale 22-question checklist with illustrative examples for evaluation of quality of Science and Mathematics textbooks used in schools along  the three dimensions of Content quality (C), Pedagogical alignment (P) and Technology integration (T).</li>
				</ul>
			</div>
		</div> -->
	</div>
</div>
<!-- End Overview Div -->

<!-- LOBE Div -->
<div class="about_lab">
	<div class="width-container clearfix">
		<div class="lobetab clearfix" id="LOBE">
			<h5>LOBE</h5>
			<img src="img/downarrow.png">
		</div>
		<div class="width-container">
			<div class="about-div clearfix lobediv">
				<div class="LOBE-strt clearfix">
					<div class="LOBE-Text">
						<h2>Learning object evaluation instrument (LOBE)</h2>
						<h6>1) What is LOBE instrument ?</h6>
						<ul class="first-sub">
							<li>LOBE is a 4-scale rubric to evaluate the teaching-learning effectiveness of existing e-learning content i.e. learning objects</li>
							<li>A learning object is a multimedia teaching-learning resource that contains dynamic visualizations with voice-over (i.e. animations/simulations/videos) as its core component and either all or a subset of the following components :
								<ul>
									<li>dynamic visualizations with voice-over (i.e. animations/simulations/videos)</li>
									<li>activities</li>
									<li>set of assessment questions</li>
									<li>solved example</li>
									<li>stepwise lesson plans for teachers</li>
								</ul>
							</li>
							<li>LOBE measures the quality of the learning objects along four dimensions - Content quality (7 questions), Pedagogical alignment (16 questions), Design efficacy (10 questions) and Technology integration (5 questions).The output from the rubric are questionwise scores under each dimension, for a particular learning object.</li>
						</ul>
					</div>
					<div class="LOBE-diag">
						<img src="img/lobe_logo.jpg">
						<a href="./download.html?file=LOBE.pdf" target="_blank">Download the LOBE Instrument</a>
						<div class="counter-part download_count2">
							<span>Downloaded no:- <span>0<?php echo get_download_count('LOBE.pdf');?></span> of times</span>
						</div>
					</div>
				</div>
				<div class="LOBE-Text-2 clearfix">
					<h6>2) What is the structure of LOBE ?</h6>
					<img src="img/lobe_structure.jpg">
					<div class="hidden-content hidden-content-1">
						<h5>A. What quality dimensions are measured by LOBE ?</h5>
						<div class="child-content clearfix">
							<p>The three quality dimensions measured by LOBE are:</p>
							<ul>
								<li>Content quality (C) (6 questions)</li>
								<li>Pedagogical alignment (P) (16 questions)</li>
								<li>Technology integration (T) (8 questions) Quality dimensions measured by LOBE</li>
							</ul>
							<div class="diff-1 clearfix">
								<div class="header-diff clearfix">
									<span>Quality dimensions measured by LOBE</span>
									<span>Description of dimension</span>
								</div>
								<div class="content-diff clearfix">
									<div class="cont-1 clearfix">
										<span>1.Content Quality (C)</span>
										<span>Measures accuracy of content and assessment questions, how well these components connect to real-world scenarios, 
										how updated the content is with recent advances in the topic knowledge etc.</span>
									</div>
									<div class="cont-2 clearfix">
										<span>2.Pedagogical Alignment (P)</span>
										<span>Measures the extent to which the learning object is learner-centred and promotes higher-order thinking among the learners.</span>
									</div>
									<div class="cont-3 clearfix">
										<span>3.Technology Integration (T)</span>
										<span>Measures how well the learning object adheres to graphic design principles and how well the different components of the learning object have been integrated to create a meaningful teaching-learning experience.</span>
									</div>
								</div>
							</div>
						</div>
						<h5>B. What are the features of the questions in LOBE ?</h5>
						<div class="child-content clearfix">
							<ul>
								<li>Questions in LOBE are organized along the three dimensions</li>
								<li>Each question in LOBE rubric :
									<ul>
										<li>Measures a particular aspect of the specific dimension</li>
										<li>Specifies which components of the learning object need to be considered for evaluating this question</li>
										<li>Is accompanied by explanations on why this question is important for quality evaluation</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn">Read More</a>

				<div class="LOBE-Text-2">
					<h6>3) What is the scoring mechanism in LOBE ?</h6>
					<p>Each question can be scored along a 4-point scale : Score 0 (Missing); Score 1 (Inadequate); Score 2 (Almost) and Score 3 (Target)</p>
					<div class="hidden-content hidden-content-2">
						<div class="child-content clearfix">
							<div class="diff-1 clearfix">
								<div class="header-diff clearfix">
									<span>Score</span>
									<span>Means the quality aspect addressed by the question</span>
								</div>
								<div class="content-diff clearfix">
									<div class="cont-1 clearfix">
										<span>Score 0 (Missing)</span>
										<span>Is completely missing in the learning object</span>
									</div>
									<div class="cont-2 clearfix">
										<span>Score 1 (Inadequate)</span>
										<span>Has been inadequately implemented in the learning object, needs lot of improvement</span>
									</div>
									<div class="cont-3 clearfix">
										<span>Score 2 (Almost)</span>
										<span>Has almost been adequately implemented but there is still scope of improvement</span>
									</div>
									<div class="cont-3 clearfix">
										<span>Score 3 (Target)</span>
										<span>Has been implemented in the learning object in the ideal way i.e. as recommended by educational technology research</span>
									</div>
								</div>
							</div>
						</div>
						<div class="child-content clearfix">
							<ul>
								<li>The quality level corresponding to each score is described in detail by the descriptors</li>
								<li>Descriptors are often accompanied by examples. These examples are meant to further assist the evaluator in deciding the level of implementation quality for that question</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn-2">Read More</a>

				<div class="LOBE-Text-2" id="lobe-text-4">
					<h6>4) Who can use LOBE ?</h6>
					<ul class="first-sub indent">
						<li>Quality control team of e-learning companies to evaluate the quality of learning objects produced</li>
						<li>Subject matter experts, instructional designers and graphic designers to give meaningful feedback on quality of learning objects</li>
						<li>Educators (i.e. Teachers, principals and HODs) to select good-quality learning objects</li>
					</ul>
				</div>

				<div class="LOBE-Text-2">
					<h6>5) When to use LOBE ?</h6>
					<p>If you are an e-learning company, you can use LOBE when you want to :</p>
					<div class="hidden-content hidden-content-3">
						<div class="child-content clearfix">
							<ul>
								<li>Find the quality assessment scores for your learning objects in terms of content quality, pedagogical alignment and technology integration</li>
								<li>Do strength-weakness analysis for a set of learning objects i.e.
									<ul>
										<li>Identify the weak spots along each of the dimensions (content quality, pedagogical alignment, technology integration) in your learning objects that need to be addressed to improve quality</li>
										<li>Identify the strong points of your learning objects within each of the dimensions</li>
										<li>if your are an educator, you can use LOBE when you want to:</li>
									</ul>
								</li>
								<li>Select good quality learning objects to enhance the teaching of a topic.</li>
							</ul>
						</div>
						<p>If you are an e-learning company, you can use LOBE when you want to :</p>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn-3">Read More</a>
			
				<div class="LOBE-Text-2">
					<h6>6) What is the scope of LOBE ?</h6>
					<p>LOBE is scoped to learning objects which have dynamic visualizations (simulations/animations/videos) as their core component.
						<br/>Also,</p>
					<div class="hidden-content hidden-content-4">
						<div class="child-content clearfix">
							<ul>
								<li>LOBE evaluates learning objects after they have been created</li>
								<li>The granularity level of a learning object is taken as a single topic from a textbook chapter, that typically contains 4 – 6 topics</li>
								<li>LOBE is currently designed for topics in STEM domains</li>
								<li>It has currently been tested for various topics at primary, secondary and high school levels. It may be applicable for college-level STEM topics but has not been tested yet.</li>
								<li>LOBE does not evaluate criterion like 'metadata retrieval'.</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn-4">Read More</a>

				<div class="LOBE-Text-2">
					<h6>7) How to use LOBE ?</h6>
					<p>LOBE can be used in a stepwise manner to score the quality dimensions of a learning object and obtain the quality assessment for a set of learning objects created. The guiding steps are given below.</p>
					<p>Step 1 - Go through all the different components of the learning object and then answer the questions in LOBE.</p>
					<div class="hidden-content hidden-content-5">
						<div class="child-content clearfix">
							<ul>
								<li>You may have to revisit specific components multiple times while responding to the questions in LOBE.</li>
							</ul>
							<p>Step 2 - Give a score for each question based on the extent to which the level of implementation in the learning object matches the descriptors given for that question in LOBE.</p>
							<ul>
								<li>Certain questions can be marked 'Not Applicable' (NA), if :
									<ul>
										<li>the learning object does not have a certain component</li>
										<li>it can be justified that the component is not needed for that context (like lesson plans for student self-learning learning objects)</li>
									</ul>
								</li>
								<li>However, validity of this modified version cannot be vouched for.</li>
							</ul>
							<p>Step 3 - Compute average percentage scores for the three dimensions of content quality, Pedagogical alignment & Technology integration for a set of at least 30 learning objects.</p>
								<ul>
									<li>This will give you an overall picture of how well the learning objects, on an average, fare along the three dimensions on a quality scale of 0 -100.</li>
								</ul>
							<p>Step 4 – Do a further strength-weakness analysis for the set of learning objects</p>
								<ul>
									<li>This will help locate which specific quality aspects within each dimension needs to be looked into to improve quality</li>
									<li>Locate the quality aspects where the learning objects have reached target level they are strong in</li>
									<li>This can be done by computing a matrix of percentage of learning objects scoring 0,1,2,3 (in columns) for each question in LOBE (in rows)</li>
								</ul>
							<p>Apart from these, LOBE can be used to assess the quality of a specific learning object along the 3 dimensions</p>
						</div>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn-5">Read More</a>

				<div class="LOBE-Text-2">
					<h6>8) How was LOBE developed ?</h6>
					<p>LOBE was iteratively developed in three stages. Refer to Figure 2 below..</p>
					<div class="hidden-content hidden-content-6">
						<div class="child-content clearfix">
							<img src="img/howwaslobedeveloped.jpg">
							<ul>
								<li>Stage 1 - The dimensions & their aspects to be evaluated emerged from literature analysis of existing e-learning evaluation frameworks and instruments</li>
								<li>Stage 2 -
									<ul>
										<li>Questions were framed to measure each of the identified quality aspects</li>
										<li>Different levels of implementation for each question were described by writing the descriptors</li>
									</ul>
								</li>
								<li>Stage 3 - Finally pilot testing of the validity of LOBE was done with:
									<ul>
										<li>educational technology experts and</li>
										<li>target users of LOBE i.e. quality control team from an e-learning company</li>
									</ul>
								</li>
								<li>LOBE does not evaluate criterion like 'metadata retrieval' since ease of search of open-source resources does not tally with the objective of the learning objects being evaluated</li>
							</ul>
						</div>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn-6">Read More</a>

				<div class="LOBE-Text-2">
					<h6>9) How robust is LOBE ?</h6>
					<p>LOBE has been pilot tested for different forms of validity. This implies LOBE has been tested with educational technology experts, who used existing learning objects, to test if LOBE accurately measures what it intends to measure (validity) i.e. content quality, quality of pedagogical alignment & technology integration in learning objects.</p>
					<ul class="indent">
						<li>LOBE was tested for four types of validity (Fig. 3) :</li>
					</ul>
					<div class="hidden-content hidden-content-7">
						<div class="child-content clearfix">
							<img src="img/howrobustislobe.jpg" border="5">
						</div>
					</div>
				</div>
				<a href="javascript:void(0)" class="readbtn-7">Read More</a>			
			</div>
		</div>
	</div><br/>
</div>
<!-- End LOBE Div -->

<!-- TEC Div -->
<div class="about_lab TEC-div">
	<div class="width-container clearfix ">
		<div class="tectab clearfix" id="TEC">
			<h5>TEC</h5>
			<img src="img/downarrow.png">
		</div>
		<div class="width-container">
			<div class="about-div clearfix tecdiv">
				<div class="TEC">
					<h4 style="color: #000;">Textbook Evaluation Checklists for Science and Mathematics (TEC)</h4>
					<h6>About TEC:</h6><br/>
					<ul>
						<li>TEC for Science and Mathematics are meant to assist school principals and teachers choose high-quality textbooks for their students from the wide array of textbooks currently available.</li>
						<li>TEC takes Next Generation Science Standards (NGSS, USA) and National Curriculum Framework (NCF, India) as defining standards for evaluation of skills, knowledge and process in Science and Mathematics.</li>
					</ul>

					<h6 style="color: #000;">Why use TEC?</h6>
					<p>These are 3-scale checklists (Missing, Partially satisfied and Adequate) that measure quality of a textbook along three constructs:</p>
					<ul>
						<li>Content quality</li>
						<li>Pedagogical alignment</li>
						<li>Technology integration</li>
						
					</ul>
					
					<p>The criteria, under each construct in TEC, are sourced from two existing quality evaluation rubrics for science and mathematics instructional products:</p>
					<ul>
						<li>EQuIP (adapted to Indian context)</li>
						<li>LOBE to evaluate the digital support provided.</li>
					</ul>
					<p>Two separate checklists for evaluating quality of Science and Mathematics textbook for schools (TEC_Science & TEC_Mathematics) are given below.Each checklist contains subject-specific illustrative examples and explanations for easy use by teachers.</p>
				</div><br/>
				<div class="science-div LOBE-diag" style="text-align: left !important;">
					<span><a href="./download.html?file=TEC_Science.pdf" target="_blank"> TEC_Science</a></span><br>
					<div class="counter-part">
						<span style="padding-right: 60px;">Download Count:- <span style="background: black; color: #ffff; padding: 0px 1px 0px 1px; display: inline-block; text-align: center;">0<?php echo get_download_count('TEC_Science.pdf');?></span> times</span>
					</div>
				</div>
				<div class="mathe-div LOBE-diag" style="text-align: left !important;">
					<span><a href="./download.html?file=TEC_Maths_ver_2.2.pdf" target="_blank">TEC_Mathematics</a></span><br>
					<div class="counter-part">
						<span style="padding-right: 60px;">Download Count:- <span style="background: black; color: #ffff; padding: 0px 1px 0px 1px; display: inline-block; text-align: center;">0<?php echo get_download_count('TEC_Maths_ver_2.2.pdf');?></span> times</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br/><br/><br/>
</div>
<!-- End TEC Div -->

<!-- Footer Tab -->
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
			$(".lobediv").slideUp();
			$(".tecdiv").slideUp();
		});
	});
	$(document).ready(function () {
		$(".lobetab").click(function () {
			$(".lobediv").slideToggle();
			$(".overviewdiv").slideUp();
			$(".tecdiv").slideUp();
		});
	});
	$(document).ready(function () {
		$("#l_click").click(function () {
			$(".lobediv").slideToggle();
			$(".overviewdiv").slideUp();
			$(".tecdiv").slideUp();
		});
	});

	$(document).ready(function () {
		$(".tectab, #t_click").click(function () {
			$(".tecdiv").slideToggle();
			$(".lobediv").slideUp();
			$(".overviewdiv").slideUp();
		});
	});

	// $(document).ready(function () {
	// 	$("#t_click").click(function () {
	// 		alert("JSR");
	// 	});
	// });

	$(document).ready(function () {
	    if(window.location.href.indexOf("LOBE") > -1) {
	       $(".lobediv").slideToggle();
	       $(".tecdiv").slideUp();
	    }

	    else if(window.location.href.indexOf("TEC") > -1){
	    	$(".tecdiv").slideToggle();
	        $(".lobediv").slideUp();
	    }
	});

	$(document).ready(function () {
		$(".readbtn").click(function () {
			$(".hidden-content-1").slideToggle("slow");
			$(".hidden-content-2, .hidden-content-3, .hidden-content-4, .hidden-content-5, .hidden-content-6, .hidden-content-7").slideUp();
			
		});
	});
	$(document).ready(function () {
		$(".readbtn-2").click(function () {
			$(".hidden-content-2").slideToggle("slow");
			$(".hidden-content-1, .hidden-content-3, .hidden-content-4, .hidden-content-5, .hidden-content-6, .hidden-content-7").slideUp();
		});
	});
	$(document).ready(function () {
		$(".readbtn-3").click(function () {
			$(".hidden-content-3").slideToggle("slow");
			$(".hidden-content-2, .hidden-content-1, .hidden-content-4, .hidden-content-5, .hidden-content-6, .hidden-content-7").slideUp();
		});
	});
	$(document).ready(function () {
		$(".readbtn-4").click(function () {
			$(".hidden-content-4").slideToggle("slow");
			$(".hidden-content-2, .hidden-content-3, .hidden-content-1, .hidden-content-5, .hidden-content-6, .hidden-content-7").slideUp();
		});
	});
	$(document).ready(function () {
		$(".readbtn-5").click(function () {
			$(".hidden-content-5").slideToggle("slow");
			$(".hidden-content-2, .hidden-content-3, .hidden-content-4, .hidden-content-1, .hidden-content-6, .hidden-content-7").slideUp();
		});
	});
	$(document).ready(function () {
		$(".readbtn-6").click(function () {
			$(".hidden-content-6").slideToggle("slow");
			$(".hidden-content-2, .hidden-content-3, .hidden-content-4, .hidden-content-5, .hidden-content-1, .hidden-content-7").slideUp();
		});
	});
	$(document).ready(function () {
		$(".readbtn-7").click(function () {
			$(".hidden-content-7").slideToggle("slow");
			$(".hidden-content-2, .hidden-content-3, .hidden-content-4, .hidden-content-5, .hidden-content-6, .hidden-content-1").slideUp();
		});
	});
</script>
<!-- <script>
	function readLess() {
    document.getElementById("readMore").innerHTML = "Read less";
}
</script> -->
</html>