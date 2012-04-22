<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Bio-Diversity Portal</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />


<script src="<?php echo base_url();?>/js/ajax.js"></script>
	<script src="<?php echo base_url();?>/js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '<?php echo base_url();?>/imges/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
</head>

<body>
	<div id="header">
		<div id="menu">																																																													<div class="inner_copy"><a href="http://www.greatdirectories.org/" >web directories</a><a href="http://www.bestfreetemplates.info/">free CSS templates</a></div>
			<ul>
                            <li><a href="<?php echo base_url()."/index.php/common_user/common_user/";?>" class="but6">Home</a></li>
                            <li><a href="<?php echo base_url()."/bio/Search.php"?>" class="but6">Browsing</a> </li>
                            <li><a href="<?php echo base_url()."/index.php/campaign/campaign/"?>" class="but6">Campaign</a></li>
                            <li><a href="<?php echo base_url().'/index.php/researcher/researcher/all_projects'?>" class="but6">Project</a></li>
                            <li> <a href="<?php echo base_url()."/index.php/student/student/";?>" class="but6">Student</a> </li>
                            <li> <a href="<?php echo base_url()."/index.php/instructor/instructor/" ;?>" class="but6">Instructor</a> </li>
                            <li><a href="<?php echo base_url()."/index.php/common_user/common_user/about_us"?>" class="but6">AboutUs</a></li>
                            <li><a href="<?php echo base_url()."/index.php/common_user/common_user/contact_us"?>" class="but6" >ContactUs</a></li>
                           

			</ul>
			<div id="search">
                            <?php echo form_open('campaign/campaign/search_campaign');?>
					<span>Search</span>
					<input type="text" name="title"/>
                                        <input type="submit" name="submit" style="background-imaage:<?php echo base_url().'/images/search.jpg'?>"/>
                            <?php echo form_close();?>
			</div>
           <ul>
                 <?php
                
                    if(isset($_SESSION['userid']))
                    {
                        echo "</ul>
                              <li class='but6'><a href= '".  base_url().'/index.php/common_user/common_user/log_out'."'> Log Out</a></li>
                             ";
                    }
                    else
                    {
                        echo "
                               </ul>
                               <li class='but6'><a href='".  base_url().'/index.php/common_user/common_user/sign_in'."'> Sign In</a></li>
                               <li class='but6'><a href='".  base_url().'/index.php/common_user/common_user/registration'."'>Register</a></li>
                             "."</ul>
                              <li class='but6'><a href= '".  base_url().'/index.php/common_user/common_user/log_out'."'> Log Out</a></li>
                             ";
                    }
                 ?>
            <marquee direction="left" class="project_list">
                The first Release of Bio-Diversity Information portal has been published. The Catagories of services provided are Student,Instructor,Researcher,campaigner
            </marquee>
           
            </div>
           
        <!--</div>-->