<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>VVFY - USER PAGE</title>
	<!--  plugin for calendar-->
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar/lib/jquery.min.js'></script>
	<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar/fullcalendar.css' rel='stylesheet' />
	<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar/lib/moment.min.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar/fullcalendar.min.js'></script>
	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>

	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/progress-circle.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style1.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/computer.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/backend.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/circle.css" />

	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/prelude.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/rainbow.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress.css">
	
	<!-- masonry 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.swipebox.js"></script>	
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/swipebox.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>
	-->

	
	<!-- plugin for gamma gallery 
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/gamma/jquery.masonry.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/gamma/jquery.history.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/gamma/js-url.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/gamma/jquerypp.custom.js"></script>
	-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.gridster.js"></script>
	
	    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-asPieProgress.js"></script>
	    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS 
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	-->

    <!-- Timeline CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
		
	<style>
	.panel {
	  margin-bottom: 20px;
	  background-color: black;
	  border: 1px solid transparent; 
	  border-radius: 4px;
	  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
	  box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
	.title-section{
		margin-top:-25px;
		margin-left:25px;
		font-size:21px;
		
	}
	.panel-body {
		  padding: 15px;
		  background-color: black;
	}
	#page-wrapper {
		position: inherit;
		margin: 0 0 0 0px;
		/*padding: 0 30px;*/
		border-left: 1px solid transparent;
		background:black;
	}
	.blink_me {
		-webkit-animation-name: blinker;
		-webkit-animation-duration: 1s;
		-webkit-animation-timing-function: linear;
		-webkit-animation-iteration-count: infinite;

		-moz-animation-name: blinker;
		-moz-animation-duration: 1s;
		-moz-animation-timing-function: linear;
		-moz-animation-iteration-count: infinite;

		animation-name: blinker;
		animation-duration: 1s;
		animation-timing-function: linear;
		animation-iteration-count: infinite;
	}

	@-moz-keyframes blinker {  
		0% { opacity: 1.0; }
		50% { opacity: 0.0; }
		100% { opacity: 1.0; }
	}

	@-webkit-keyframes blinker {  
		0% { opacity: 1.0; }
		50% { opacity: 0.0; }
		100% { opacity: 1.0; }
	}

	@keyframes blinker {  
		0% { opacity: 1.0; }
		50% { opacity: 0.0; }
		100% { opacity: 1.0; }
	}
	.panel-default>.panel-heading {
	  color: white;
	  background-color: black;
	  border-color: black;
	}
	#draggable{
		width:200px;
		height:300px;
		border:2px solid black;
	}
	</style>	
</head>
<body>
		<?php $this->renderPartial('js'); ?>
		
		<style>
		#new-project-btn{
			width:40px;
			height:190px;
			background:black;
			position:fixed;
			top:36%;
			margin-left:-2px;
			
		}
		#new-project-btn img{
			width:30px;
			height:auto;
			margin-left:5px;
		
		}
		#new-project-btn .text{
			font-size:15px;
			width:180px;
			font-family:arial;
			transform: rotate(-90deg);
			font-weight:bold;
			position:relative;
			margin: 75px 0 0 -70px;
			color:#92773D;
		}
		.user-icon{
			cursor:pointer;
		}
		.user-icon{
			cursor:pointer;
		}
		.add-prj{
			cursor:pointer;
		}
		#form-add-prj{
			width:700px;
			display:none;
			position:fixed;
			z-index:93;
			left: 50%;
		}
		#form-add-prj .title img{
			width:30px;
			height:30px;
			margin-top:-44px;
			margin-right:-18px;
			float:right;
			cursor:pointer;
		}
		#form-add-prj .title p {
			margin-top:-10px;
		}
		#form-add-prj .title{
			width:100%;
			color:white;
			padding: 18px 20px 20px 20px ;
			background:#C38123;
			height:20px;
			border-top-left-radius:10px;
			border-top-right-radius:10px;
			font-size:20px;
		}
		#form-add-prj .content{
			border-radius:10px;
			top:30px;
			background:black;
			height:400px;
			position: relative; left: -50%; 
			color:white;
		}
		
		</style>
		<div id="new-project-btn">
			<img style="margin-bottom:20px;" class="user-icon"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/user.ico" >
			<img class="add-prj"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/plus-proj-user.png" >
			<div class="text">
				POST NEW PROJECT 
			</div>
		</div>
		<div id="form-add-prj">
			 <div class="content">
			 <div class="title">
				<p>ADD THE PROJECT</p>
				<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/delete.ico" >
			 </div>
           
			</div>
		</div>

		<div class="kontener" ></div>
        <div id="page-wrapper">
		
		<a href="javascript:void(0)" style="" class="control_toggle blink_me" title="menu"> </a>
		<div class="about" >
			<div class="content-left">
				<div class="content-text">
					<div class="header signin">
						<?php echo "company code : ".Member::model()->findByAttributes(array('email'=>Yii::app()->user->name))->code?>
					</div>
				</div>	
				<div class="content-primary">
					
				</div>
					<img style="margin-top:-300px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
			</div>
			<div class="content-center">
				<div class="content-text">
					<div class="header signin">
						USER INFORMATION
					</div>
				</div>	
				<!--<div class="line">&nbsp;</div>-->
				<div class="tengah">
				    <li class="fa-boot"><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo Yii::app()->user->name;?></a></li>
					<li class="fa-boot"><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
					<li class="fa-boot" ><a href="<?php echo Yii::app()->createAbsoluteUrl("site/logout"); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout </a></li>
				</div>
			</div>
			<!-- service and icon -->
			
			<div class="right">
		
				<div class="content-rigth">
							<div class="content-text" >
								<div class="header">
									NOTIFICATION
								</div>
							</div>	
						<div style="margin-top:40px;margin-left:20px">	
                        <li class="fa-boot">
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="fa-boot">
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="fa-boot">
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="fa-boot">
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="fa-boot">
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>   
				</div>
			</div>
		</div>
			<!-- end service and icon -->
			
</div>
		<style>
		#promotion{
			width:100%;
			height:200px;
			background:#161616;
			position relative;
			 margin: 0 auto;
			padding:20px 50px 20px 60px;
			box-sizing:border-box;
		}
		#promotion .wrapper-promo{
			background:red;
		}
		.ads .slogan{
			position relative;
			width:300px;
			margin-left:auto;
			margin-right:auto;
			color:white;
		}
		.ads .slogan li h2{
			margin-top:-1px;
			margin-bottom:20px;
		}
		.ads .slogan li{
			text-align:center;
			list-style:none;
		}
		.ads .ad{
			position relative;
			width:200px;
			margin-left:auto;
			margin-right:auto;
		}
		.ads .ad li{
			color:white;
			text-transform:uppercase;
			list-style:none;
			font-weight:bold;
			line-height:35px;
		}
		
		.ads .html{
			width:100px;
			height:170px;
			border:1px solid white;
			text-align:center;
			color:white;
			background:black;
		}
		.ads .html .title{
			background:#C38123;
			height:60%;
		}
		.ads .html .content{
			height:40%;
			color:white;
			font-size:30px;
			position:relative;
			top:10px;
		}
		 .feed {
			background:transparent;
			border:0px;
		}
		.ads .www{
			margin-left:auto;
			margin-right:auto;
			width:200px;
			height:150px;
			border:1px solid white;
			text-align:center;
			color:white;
		}
		.ads .www .title{
			font-weight:bold;
			background:#6B9042;
			height:50%;
			font-size:40px;
		}
		.ads .www .content{
			height:50%;
			background:black;
			position:relative;
			padding-top:20px;
		}
		.ads .feed{
			background:transparent!important;
			border:0px;
			margin-left:auto;
			margin-right:auto;
		}
		</style>
		<div class="container-iso ads"  style="background:#161616;margin-bottom:20px;" >
							<center>
							<?php $rand =  rand(70,490);  ?> 
							<div class="feed" style="float:left;height:200px;width:25%" >	
								<div class="www">
									<div class="title">www</div> 
									<div class="content	">RESPONSIVE: BUILT FOR DESKTOP, PHONE & TAB </div> 
								</div>
							
							</div>
							<div class="feed" style="float:left;height:150px;width:25%" >	
								<div class="html">
									<div class="title">&nbsp;</div> 
									<div class="content"> < / > </div> 
								</div>
							</div>
							<div class="feed" style="float:left;height:150px;width:25%" >	
									<div class="ad">
										<ul>	
											<li>creative content</li>
											<li>in-browser apps</li>
											<li>management solutions</li>
											<li>custom platforms</li>
										</ul>
									</div>
							</div>
							<div class="feed" style="float:left;height:150px;width:25%" >	
								<div class="slogan">
									<ul>	
										<li>VVFY LAB - NOW OFFERING</li>
										<li><h2>WEB DEVELOPMENT</h2></li>
										<li>LETS US BUILD IT NOW</li>
									</ul>
								</div>
							</div>
						
							</center>
						</div>
					
		<div id="promotion" style="display:none">
			<div class="wrapper-promo">
				<div class="www">
					<div class="title">www</div> 
					<div class="content	">RESPONSIVE: BUILT FOR DESKTOP, PHONE & TAB </div> 
				</div>
				<div class="html">
					<div class="title">&nbsp;</div> 
					<div class="content"> < / > </div> 
				</div>
				<div class="ad">
					<ul>	
						<li>creative content</li>
						<li>in-browser apps</li>
						<li>management solutions</li>
						<li>custom platforms</li>
					</ul>
				</div>
				<div class="slogan">
					<ul>	
						<li>VVFY LAB - NOW OFFERING</li>
						<li><h2>WEB DEVELOPMENT</h2></li>
						<li>LETS US BUILD IT NOW</li>
					</ul>
				</div>
			</div>
		</div>
		<div  style="display:none;margin-bottom:120px;" id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators"  style="display:none">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>
	
		  <div class="carousel-inner" style="color:white" role="listbox">
			<div class="item active">

				<h1 style="text-align:center;">VVFY NEWS</h1>
					<p class="desc-slide">
						VVFY.me is a tech studio dedicated to incorporate the latest 3D inventions to the architects and designers. 
						Our team is located in Beirut and Indonesia. We offer a wide range of service.
					</p>
			</div>
			<div class="item">
				<h1 style="text-align:center;">VVFY PROMOTION</h1>
				<p class="desc-slide">
						VVFY.me is a tech studio dedicated to incorporate the latest 3D inventions to the architects and designers. 
						Our team is located in Beirut and Indonesia. We offer a wide range of service.
					</p>
			</div>
		  </div>

		  <a class="left carousel-control set" style="color:black" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon fs_slider_prev" aria-hidden=""></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control set " style="color:black;  background-image:''" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon fs_slider_next" aria-hidden=""></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>

       <div class="panel panel-default" id="feed">
					<div class="panel-heading">
						<!--<i class="fa fa-bar-chart-o fa-fw progres-proj">LIST PROJECT</i> -->

						<div class="pull-right">				
							<ul id="menu-right" style="margin-left:120px;;margin-right:-155px;position:relative;margin-top:-10px" class="mr-feed">
								<li><a   style="margin-right:10px;" id="mn-prem" href="#feed"><img class="img-up" src="<?php echo Yii::app()->request->baseUrl; ?>/img/up.png" ></a> </li>
								<li><a  style="margin-right:50px;" id="mn-prem" href="#feed">NEWS FEED</a> </li>
								<li><a  id="mn-our" style="margin-right:50px;" href="#project">PROJECT   </a></li>
								<li><a  id="mn-team" style="margin-right:50px;" href="#calndr">CALENDAR</a></li>
							</ul>		
						</div>
						<div class="pull-left">
						NEWS FEED
						</div>
					</div>
					<div class="panel-body">
					<div class="main">
					 
							<style>
							.feed{
								padding:10px;
								width:25%!important;
								height:auto;
								background:#DFDFDF;
								border:10px solid black;
								float:left
								color:black;
							}
							.feed .title {
								font-size:17px;
								padding: 2px 0 0 10px;
								width:100%;
								height:30px;
								text-transform:uppercase;
							}
							.feed .desc {
								font-size:14px;
								padding:2px;
							}
							.feed .title .close {
								float:right;
								margin-right:10px;
								color:white;
							}
							select{
								color:white;
								height:30px;
								font-size:17px;
								background:black;
								border:none;
								content: " ";
							}
							select option{
								color:white;
							}
							#seleksi{
								display:inline;
							}
							/*
							img.project-image{ -webkit-filter: grayscale(100%); filter: grayscale(100%); }
							*/
	

							</style>
						<div class="container-iso " style="margin-left:20px;" id="container-dragable">
							<?php $rand =  rand(70,490);  ?> 
							<div class="feed note" style="float:left;height:200px;width:25%" >	
								<div class="title">Projek <?php echo $v+1 ?><a class="close">x</a></div>
								<div class="desc">
								<div id="form-add-prj">
									 <div class="content">
									 <div class="title">
										<p>ADD THE PROJECT</p>
										<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/delete.ico" >
									 </div>
								   
									</div>
								</div>
									hai kamu test ajas
									<?php if ($rand>150):?>
									<br><br><input type="button" style="color:black;width:100px" value="READ MORE" />
									<?php endif; ?>
								</div>
							</div>
							<div class="feed note" style="float:left;height:150px;width:25%" >	
								<div class="title">Projek <?php echo $v+1 ?><a class="close">x</a></div>
								<div class="desc">
									hai kamu test aja
									<?php if ($rand>150):?>
									<br><br><input type="button" style="color:black;width:100px" value="READ MORE" />
									<?php endif; ?>
								</div>
							</div>
							<div class="feed note" style="float:left;height:150px;width:25%" >	
								<div class="title">Projek <?php echo $v+1 ?><a class="close">x</a></div>
								<div class="desc">
									hai kamu test aja
									<?php if ($rand>150):?>
									<br><br><input type="button" style="color:black;width:100px" value="READ MORE" />
									<?php endif; ?>
								</div>
							</div>
							<div class="feed note" style="float:left;height:150px;width:25%" >	
								<div class="title">Projek <?php echo $v+1 ?><a class="close">x</a></div>
								<div class="desc">
									hai kamu test aja
									<?php if ($rand>150):?>
									<br><br><input type="button" style="color:black;width:100px" value="READ MORE" />
									<?php endif; ?>
								</div>
							</div>
						<div class="feed note" style="float:left;height:150px;width:25%" >	
								<div class="title">Projek <?php echo $v+1 ?><a class="close">x</a></div>
								<div class="desc">
									hai kamu test aja
									<?php if ($rand>150):?>
									<br><br><input type="button" style="color:black;width:100px" value="READ MORE" />
									<?php endif; ?>
								</div>
							</div>
							<div class="feed note" style="float:left;height:150px;width:50%!important;" >	
								<div class="title">Projek <?php echo $v+1 ?><a class="close">x</a></div>
								<div class="desc">
									hai kamu test aja
									<?php if ($rand>150):?>
									<br><br><input type="button" style="color:black;width:100px" value="READ MORE" />
									<?php endif; ?>
								</div>
							</div>
						</div>
					
					</div>  
				</div>
			
		</div>
	   
		<div class="panel panel-default" id="project">
				<div class="panel-heading">
					<!--<i class="fa fa-bar-chart-o fa-fw progres-proj">LIST PROJECT</i> -->
					<style>
					.pull-left {
					  float: left!important;
					  font-size:36px;
					  margin-top:-25px;
					  margin-left:25px;
					}
					</style>
					<script>
					
					</script>
					<div class="pull-left">
					PROJECT<a style="margin-top:10px;left:200px" href="#myCarousel" class="up-btn-back"></a>
					<div style="font-size:21px;display:inline;margin-left:100px">FILTER BY 
						<select id="filter-by" >
							<option>Choose</option>
							<option option="type">Type</option>
							<option option="date">Date</option>
							<option option="status">Status</option>
						</select>
						<div class="caret" style="margin-left:-20px;"></div>
					
					<div id="seleksi">
						<select>
							<option>Choose</option>
							<option>Done</option>
							<option>In Progess</option>
						</select>
						<div class="caret" style="margin-left:-20px;"></div>
					</div>
					
					</div>
					</div>
					<div class="pull-right">				
						<ul id="menu-right" style="margin-left:120px;;margin-right:-155px;position:relative;margin-top:-10px" class="mr-pr">
							<li><a   style="margin-right:10px;" id="mn-prem" href="#feed"><img class="img-up" src="<?php echo Yii::app()->request->baseUrl; ?>/img/up.png" ></a> </li>
							<li><a  style="margin-right:50px;" id="mn-prem" href="#feed">NEWS FEED</a> </li>
							<li><a  id="mn-our" style="margin-right:50px;" href="#project">PROJECT   </a></li>
							<li><a  id="mn-team" style="margin-right:50px;" href="#calndr">CALENDAR</a></li>
						</ul>		
					</div>
				</div>
			<div class="panel-body">
				<div class="main">	
					<div class="container-iso" style="margin-left:20px;">
						<?php for ($v=0;$v<=6;$v++){ ?>
						<div class="view view-first">
						 <img class="project-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/14.jpg" />
							<!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" />-->
							<div class="mask">
								<div style="margin-top:10px;" class="pie_progress" role="progressbar" data-goal="33">
									<div class="pie_progress__number"></div>
								</div>					
								<h2 style="margin-top:-6px">Lebanon - Tower</h2>
							</div>
						</div>  
						<?php }?>
						<div class="view view-first">
					 <img class="project-image" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/4.jpg" />
						<!--<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" />-->
						<div class="mask">
							<div style="margin-top:10px;" class="pie_progress" role="progressbar" data-goal="33">
								<div class="pie_progress__number"></div>
							</div>					
							<h2 style="margin-top:-6px">Lebanon - Tower</h2>
						</div>
					</div>  
					</div>  
				
				</div>  
			<script>
			
			
			</script>
		</div>
	</div>	
	
		<div class="panel panel-default" id="calndr">
			<div class="panel-heading" >
				<div class="pull-left" style="color:white">
					CALENDAR <a style="margin-top:-40px;left:250px" href="#myCarousel" class="up-btn-back"></a>
				</div>
				<div class="pull-right">
				<ul id="menu-right" style="margin-right:-155px;position:relative" class="mr-cal">
											<li><a   style="margin-right:10px;" id="mn-prem" href="#feed"><img class="img-up" src="<?php echo Yii::app()->request->baseUrl; ?>/img/up.png" ></a> </li>
					<li><a  style="margin-right:50px;" id="mn-prem" href="#feed">NEWS FEED</a> </li>
					<li><a  id="mn-our" style="margin-right:50px;" href="#project">PROJECT</a></li>
					<li><a  id="mn-team" style="margin-right:50px;" href="#calndr">CALENDAR</a></li>
				</ul>	
					
				</div>
			</div>			
			<div class="panel-body">
				<div style="margin-left:20px;" id='calendar'></div>
			</div>
		</div>
		
	
	
	
	   </div>
        
		<!-- /#page-wrapper -->

	

    <!-- /#wrapper -->

    <!-- jQuery 
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/jquery/dist/jquery.min.js"></script>
	-->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/raphael/raphael-min.js"></script>
    <!--
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/bower_components/morrisjs/morris.min.js"></script>
    -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/sbadmin/dist/js/sb-admin-2.js"></script>

</body>

</html>
