<style type="text/css">
	#full-loader{
		width: 100vw;
		height: 100vh;
		background-color: black;
		position: fixed;
		z-index: 1000;
		display: none;
	}
	#full-loader img{
		margin: 0 auto;
		/*width: 100px;*/
	}
</style>
<div id="full-loader">
	<center>
		<img style="width:150px;height:auto" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">	
	</center>
</div>
<!-- news -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.swipebox.js"></script>	
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/swipebox.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bjqs/js/bjqs-1.3.min.js"></script>	
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/bjqs/bjqs.css">


<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/brush/jquery.jqscribble.js"></script>	
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/brush/jqscribble.extrabrushes.js"></script>	


<style>
html, body {
  width:  100%!important;
  height: 100%!important;
  margin: 0px;
}
.icon-comment{
	cursor: pointer;
}
a{
	cursor:pointer;
	color:white;
	text-decoration: none;
}
a:hover{
	text-decoration:underline;
}
a:visit{
	color: red;
}
.option{background:red;}
#sp{ /* status page*/
background:rgba(237,28,36,1);
margin-left:30px;
position:relative;
width:60%;
float:left;
height:210px;
color:white;
font-weight:bold;
text-align:center;
padding: 25px;
box-sizing:border-box;
/*-webkit-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
-moz-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);*/
}
#term table{font-weight:bold;width:100%}
#term table tr td{font-size:20px;}
#term{
top:-17px;
font-weight:bold;
margin-top:60px;
margin-left:30px;
position:relative;
width:95%;
float:left;
/*height:550px;*/
color:white;
font-weight:bold;
text-align:center;
/*overflow: scroll;*/
/*-webkit-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
-moz-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);*/
}
#term .img-upload{
	display: inline-block;	
	height: 92%;
	float: left;
	margin:10px;
}

#term .right{width:50%;float:left;height:100%;}
#term .left{width:50%;float:left;height:100%;}


#sp .right{width:50%;float:left;height:100%;}
#sp .left{width:50%;float:left;height:100%;}

#sp .top{background:#ff3019;}
#sp .bottom{background:white;}
#title-ap{
float:left;
font-weight:bold;
color:gray;
position:relative;
top:180px;
margin-left:40px;
margin-right:90px;
width:30%;
text-align:center;
border:2px solid transparent;
}
#title-h1{
float:left;
font-weight:bold;
color:gray;
position:relative;
top:180px;
margin-left:40px;
margin-right:90px;
width:30%;
text-align:center;
border:2px solid transparent;
}
#ap{
margin-left:10px;
margin-right:30px;
margin-bottom:100px;
position:relative;
width:60%;
float:right;
height:300px;
color:white;
font-weight:bold;
text-align:center;
/*-webkit-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
-moz-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);*/

}
#wrapper-log{
	margin-left:10px;
	margin-right:30px;
	margin-bottom:70px;
	position:relative;
	width:90%;
	float:right;
	height:auto;
	color:white;
	font-weight:bold;
	text-align:center;
	/*-webkit-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
	-moz-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
	box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);*/
}


/* calendar page*/
#cp{
box-sizing:border-box;
text-transform: uppercase;
float:left;
padding:20px;
position:relative;
width:30%;
margin-left:60px;
height:310px;
background:black;
color:white;
font-weight:bold;
text-align:center;
/*-webkit-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
-moz-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);*/
}
#cp table{
border:1px solid transparent;
color:white;
font-weight:bold;
padding:10px;
margin-left:auto;
margin-right:auto;
width:100%;
}
#cp table thead{
font-size:20px;
}
#sp table{
border:1px solid transparent;
color:black;
font-weight:bold;
margin-left:auto;
margin-right:auto;
width:100%;
font-size: 15px;


}
#sp table thead{
font-size:20px;
}
#wrapper-dashboard-first{
position:relative;
}
.btn{
font-size:20px;
height30px;
text-align:center;
margin:0 auto;
}
.view-calendar{
background:black;
width:90%;
position:absolute;
bottom:0px;
box-sizing:border-box;
}
.view-calendar a{
color:white!important;
text-decoration:none;
}
.view-calendar a:hover{
	color:red;
}
.view-project{
bottom:0px;
text-align:center;
position:relative;
margin-top:-10px;

}
.project-name{
font-size:15px;
width:230px;
border-bottom:1px dotted white;
margin:0 auto;
margin-top:30px;
}
.separator{
height:80%;
margin-top:30px;
left:46%;
position:absolute;
border-left:3px solid gray;
}
.status-work{
font-size:15px;
display:inline;
margin-top:-20px;
}
.size-15{
font-size:15px;
text-transform:uppercase;
border-bottom: :1px solid white;
}
.size-15 td{
margin-top:20px;
padding-top:20px;
}

.shadow{
/*-webkit-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
-moz-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);*/
}


#blog{
	width:550px;
	height: 400px;
	background-color: black;
	float:left;
	overflow: hidden;
}
.h2-white{
	color: white;
	margin-left: 10px;
	margin-top: 2px;
	/*border-bottom:2px solid white;*/
	text-decoration: underline;
}
#rnd{
	width:550px;
	height: 400px;
	background-color: red;s
	float:left!important;
}
.box{
	margin-top:60px;
	margin-left:30px;
}
.container-box{
	color: white;
}
.filter-proses{
	float: left;
	margin: 10px;
}
.filter-proses select{
	color: white;
	background-color: #ED1C24;
	border-color:1px solid black;
	display: inline;
	cursor: pointer;
}
.filter-proses select option:hover{
	cursor: pointer;

}
.view-projects{
	position: absolute;
	bottom: 3px;
	right: 35px;
	font-size: 20px;

}
.dashboard-project{
	text-transform: uppercase;
	margin-left: 10px;
	text-align:center;
	color:white!important;
	width:90%!important;
	font-size:17px!important;
}

.about{
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		left: -330px;
		/* display:none; */
		/* transition: opacity 300ms, left 300ms;  */
		transition: opacity 200ms, left 200ms; 
		/* transition: opacity 500ms, left 75ms;  */
		background:black;
		z-index:99;
		/* width:95%; */
		width:100%;
		/* width:1000px; */
		/* height:70%; */
		height:510px;
		position:fixed;
		top:143px;
		 visibility:hidden; 
	 
}
.aboutshow{
		/* display:block; */
		visibility:visible;
		opacity: 1;
		left: 0px;
	}
.about .content-left{
	float:left;
	width:20%;
	height:100%;
	padding-left:15px;
}
.about .content-center{
	float:left;
	width:22%;
	height:85%;
	margin-left:55px;
}
.line{
	border-left:2px white solid;
	height:90%;
	position:absolute;
	margin-top:20px;
	
}


.about .content-left .content-primary{
	
	background-color:transparent;
	width:100%;
	height:auto;
	background-size:60% 100%;
	margin:20px;
	text-align:center;
	
}

.control_toggle{
	top:10px;
	left:35px;
	

}

.content-text{
	color:white;
	text-align:left;
	line-height:30px;
	margin:10px;
}
.content-text .header{
	font-size:24px;
	color:#F5B800;
	margin:10px;
	width:100%;
	height:10%;
}
.right2{
	/* width:40%; */
	/* background:Red; */
	/* display:none; */
}

.showright{
	display:block;
}

.about .content-rigth1{
	width:20%;
	height:100%;
	/* overflow:scroll; */
	float:left;
	/* margin-left:0px; */
}

.right2 .content-rigth1{
	width:40%;
	height:100%;
	/* overflow:scroll; */
	float:left;
	/* margin-left:0px; */
}
.right3 .content-rigth1{
	width:40%;
	height:100%;
	/* overflow:scroll; */
	float:left;
	/* margin-left:0px; */
}
.right3,.right2{
	display:none;
}
.about .content-rigth{
	width:50%;
	height:100%;
	/* overflow:scroll; */
	float:left;
}

.about .content-rigth .content-text{
	color:white;
	text-align:left;
	line-height:30px;
	margin:10px;
}
.hide_controls .control_toggle {
        left: 250px;
        background: url(../img/diamond_sprite.png) no-repeat -60px -20px;
}
.control_toggle, .hide_header {
    width: 54px;
    height: 50px;
    display: block;
    background: url(../img/diamond_sprite.png) no-repeat -173px -20px;
    /* background: url(../img/diamond_sprite.png) no-repeat -60px -20px; */
    position: fixed;
    /* left: 300px; */
    left: 30px;
    bottom: 46px;
    z-index: 100;
    top: 30px;
    transition: opacity 250ms, left 300ms, bottom 300ms;
}
</style>
<!-- <a href="javascript:void(0)" style="" class="control_toggle blink_me" title="menu"> </a> -->
<div class="about" >
			<div class="content-left">
				<div class="content-text">
					<div class="header signin">
						<?php //echo "company code : ".Member::model()->findByAttributes(array('email'=>Yii::app()->user->name))->code?>
					</div>
				</div>	
				<div class="content-primary">
					
				</div>
					<img style="margin-top:-230px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="" class="logo_def">
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
					<li class="fa-boot"><a id="btn-setting" href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
					<li class="fa-boot" ><a href="<?php echo Yii::app()->createAbsoluteUrl("site/logout"); ?>"><i class="fa fa-sign-out fa-fw"></i>Logout </a></li>
				</div>
			</div>
			<!-- service and icon -->
			
			<div class="right">
		
				<div

				<?php
				if (Yii::app()->user->level()=='4')
					echo "style='visibility:hidden'";
				?>

				 class="content-rigth">
							<div class="content-text" >
								<div class="header">
									EMPLOYEES
								</div>
							</div>	
						<div style="margin-left:20px">	
	                        <li class="fa-boot">
	                            <a href="#" id="invite-employee">
	                                <div>
	                                    <i class="fa fa-comment fa-fw"></i>
	                                     invite employee
	                                   <!--  <span class="pull-right text-muted small">4 minutes ago</span> -->
	                                </div>
	                            </a>
	                        </li>
	                          <li class="fa-boot">
	                            <a href="#"  id="btn-list-employee">
	                                <div>
	                                    <i class="fa fa-comment fa-fw"></i>
	                                     List employee
	                                   <!--  <span class="pull-right text-muted small">4 minutes ago</span> -->
	                                </div>
	                            </a>
	                        </li>
                      
						</div>
				</div>
		</div>
</div>
		
		<div  id="wrapper-dashboard-first" >
			<div id="sp" style="height:310px;" >
				<div class="filter-proses">					
					CURRENT PROJECTS
				</div>
				<?php 
					$id = Yii::app()->user->id;
					if (Yii::app()->user->level()=='3'){		
						$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
					}else{
						$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;

					}
					$redbox = Yii::app()->db->createCommand()
					->select("*")
					->from('project')
					->where("STATUS =1 and id_member = '$id_member' ")
					->limit('4')
					->queryAll();

				?>
				<table class="dashboard-project" 
				style="
					" 
				>

					<thead style="margin-bottom:15px;">						
						<tr>
							<th style="text-align:left;font-size:15px;padding-bottom:15px;">NAME</th>
							<th style="padding-bottom: 15px;font-size:15px;">DUE DATE</tdh>
							<th style="font-size:15px;padding-bottom: 15px;">UPCOMING</th>
						</tr>
					</thead>
					<?php
						foreach($redbox as $b):
					?>
					<tr>
						<td style="text-align:left"><?php echo $b['project_name'];?></td>
						<td><?php echo date('d-m-y',strtotime($b['due_date']));?></td>
						<td>TEST RENDER</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<div class="view-projects"><a href="#">VIEW ALL</a></div>	
			</div>
 		<?php if (User::model()->findByPk(Yii::app()->user->id)->level==1): ?>
  		<H1
			style="
			position: absolute;
			bottom: -400px;
			text-align: center;
			color:gray;
			font-weight:bold;
			margin-left:30px;
			font-size:33px;
			display:none;
			"
			>Latest sUpload</H1>
		<?php endif; ?>
		<div id="cp">
			<table cellpadding="10">
				<thead><tr><td>PROJECTS</td><td align="">DUE</td></tr ></thead>
				<tbody>
					<?php 
					// $id = Yii::app()->user->id;
					// $id_member = Member::model()->find("email = '$id'")->id;
					$black = Yii::app()->db->createCommand()
					->select("*")
					->from('project')
					->where("STATUS =1 and id_member = '$id_member' ")
					->limit('3')
					->queryAll();
					// print_r($black);
					foreach($black as $b):
					?>
					<tr>
						<td><?php echo $b['project_name'];?></td>
						<td><?php echo $b['due_date'];?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn view-calendar"><a href="#">VIEW CALENDAR</a></div>
		</div>
		
	
		

		<style type="text/css">
		.project-upload  .tri{
			color: black;
			background: red;
			height: 200px;
		}
		.project-upload li{
			float: left;
		}
		.project-upload .slick-active button{
			background-color: red;
			color: white;
		}
		.project-upload .slick-prev{
			left: 0px;
			position: absolute;
			z-index: 10;
			/*position: absolute;*/
		}
		.project-upload .slick-next{
			right: 0px;
			position: absolute;
			z-index: 10;
			top: 0px;
			/*position: absolute;*/
		}
		.project-upload .slick-current{
			width: 350px!important;
		}
		.iso{
/*			min-width: 30%;
			max-width: 33%;
			width: auto;
    		height: auto;
    		display: inline-block!important;
*/
			/*width: 100%;*/

		}
		.bjqs-markers{
			display: none!important;
		}
		li.bjqs-prev a{
			 content: ""!important;
	        width: 35px;
	        background: url('../img/arrow-left-white.png');
	        height: 50px;
	        background-size: 100% 100%;
		}
		li.bjqs-next a{
	        content: ""!important;
	        width: 35px;
	        background: url('../img/arrow-right-white.png');
	        height: 50px;
	        background-size: 100% 100%;
		}
		.swipebox img{
			zoom: 150%;
		}
		.invisible{
			display: block!important;
		}
		</style>
		<script type="text/javascript">
		  jQuery(document).ready(function($) {
		  $('#term').bjqs({
		    animtype      : 'slide',
		    height        : "570",
		    width         : '1100',
		    responsive    : true,
		    randomstart   : true
		  });
		  $('li.bjqs-next a').html(' ');
		  $('li.bjqs-prev a').html(' ');
		});


		$(document).ready(function(){
			$( '.swipebox' ).swipebox();

  
			
		$container = $('.container')
		$container.imagesLoaded( function(){
		$container.isotope({
			// filter:'.one',
			itemSelector : '.img-progres',
			// itemSelector : '.alltabs',
			masonry: {
				columnWidth: 1,
				layoutMode: 'masonry'
			}
		 });
		});
		

		$(document).on('change', '.filter-progres-select', function(e) {
			// $('.about').toggleClass("aboutshow");
			// alert('masuk');
			$('#form-filter-progres').submit();
		 });
		$(document).on('click', '.hamburger', function(e) {
			// alert('masuk');
			

			// alert('masuk');
			// al
		 });
		$(document).on('click', '.full-screen', function(e) {
			// alert('masuk');
			$('.control_toggle').toggleClass('hide_controls');
			$('.about').toggleClass("aboutshow");
			$('.full-screen').toggleClass("invisible");
			// $('.full-screen').hide();

			// alert('masuk');
			// al
		 });

				// $(document).on('click', '.arrow-right', function(e) {
				// 	$container.isotope({
				// 		filter:'.one',
				// 	 });
				//  });


			 

});
		

	
		</script>
        
			
			<!-- <img class="img-upload" src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg" > -->
			<!-- <img class="img-upload" src="<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg" > -->
		


		<style type="text/css">
			
		.arrow-iso{
			width:50;
			height: auto;
			position: absolute;
			cursor: pointer;
		}
		.arrow-left{
			left: -55px;
			margin-top: 180px;
		}
		.arrow-right{
			right: -43px;
			margin-top: 180px;
		}
		.img-progres{
			width:32.5%;
			/*height: 180px;*/
			overflow: hidden;
			border:4px solid black;
			/*background-color: red;*/
			/*display: inline-block;*/
			float: left;
			/*background-repeat:no-repeat; */
		}

		.hint-progres{
			width:100%;
			text-transform: uppercase;
			height: 100%;
			/*background-color: red;*/
				/*background-color: red;*/
			background-color: rgba(1,1,1,0.6);
			position: absolute;
			opacity: 0;
			text-align: center;
		}
		.hint-progres:hover{
			opacity: 1;
			font-size: 20px;

		}
		.filter-progres{
			/*position: absolute;*/
			/*top: -50px;*/

			/*background-color: red;*/
		}
		.filter-progres select{
			width: 150px;
			font-weight: bolder;
			background-color: black;
			color: white;
			border:1px solid black;
			margin-left: 10px;
			cursor: pointer;
			-webkit-appearance: none;
			background: url("<?php echo Yii::app()->baseurl; ?>/img/arrow-down.png") no-repeat right black;
			background-size:20px 20px;

		}
		.filter-progres input{
			background-color: black;
			color: white;
			border:1px solid black;
			margin-left: 10px;
			cursor: pointer;
			/*padding: 6px;*/
		}
		.circle-select{
			width: 230px;
			height: 20px;
			background-color: red;
			display: inline;
			content: " ";
		}
		.img-pick-select{
			width: 20px;
			position: absolute;
			top: 8px;
			right: 5px;
			/*margin-left: -26px;*/	
}
		}
		.label{
			display: inline;
		}
		.upload{
			display: inline;
			font-size: 30px;
			color:white;
			margin-left: 28px;
			font-weight: bolder;

		}

		</style>
		<form id="form-filter-progres">
				<div style="
					position: relative;
	        		top: 50px;
	        		" 
        		class="filter-progres">

					<label>
						<?php if (isset($_REQUEST['project_id']) && $_REQUEST['project_id']!='PROJECT NAME'){?>
						<div class="label upload"><?php echo Project::model()->findByPk($_REQUEST['project_id'])->project_name;  ?></div>
						<?php }else{ ?>
						<div class="label upload">LATEST UPLOAD</div>

						<?php } ?>
							<input type="hidden" name="r" value="land/userme">
							<select name="project_id" class="filter-progres-select">
								<option>PROJECT NAME</option>
								<?php foreach ($redbox as $key) {?>
									<option  <?php if ($_REQUEST['project_id']==$key['id']) echo "selected"    ?> value="<?php echo $key['id']; ?>" ><?php echo $key['project_name']; ?></option>
								<?php 
								} 
								?>
								<!-- <option>saya</option> -->
							</select>
							<select name="date" class="filter-progres-select">
							<option>DATE</option>
							<option>OLD TO NEW</option>
							<option>NEW TO OLD</option>
							
							</select>
						<!-- <img class="img-pick-select" src="<?php echo Yii::app()->request->baseUrl; ?>/img/down.png"> -->
					</label>
					<!-- <input type="text" name="try" value="cinta"> -->

				</div>
		</form>

 		<div id="term" 	style="">
 		<?php //if (User::model()->findByPk(Yii::app()->user->id)->level==1){echo "style='margin-top:80px'";} 
 		?> 
			<!-- <button class="next">baru</button> -->			
			<ul class="bjqs" >
					<?php

					$a=1; 
					if (isset($_REQUEST['project_id']) and $_REQUEST['project_id']!='PROJECT NAME' )
						$filter = "and ph.project_id = '$_REQUEST[project_id]' ";
					else
						$filter = "  ";

					$sqls = "SELECT ph.datetime, ph.project_id, 
 	          		pdm.name_file,
 	          		SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
                    FROM
                    project  as p                    
                    inner join 
                    project_comment_head AS ph on p.id = ph.project_id
                    INNER JOIN
                    project_comment AS pdm
                    ON pdm.head_project_id = ph.id
                    where 

                    p.id_member = $id_member
                    and
                    pdm.status = 1 
                    and
                    SUBSTRING_INDEX(pdm.name_file,'.',-1) in ('jpg','png','gif','PNG','JPG','GIF')
					$filter                   
                    ";
                    // echo $sqls;
            	    $jumlah = Yii::app()->db->createCommand($sqls)->queryAll();
            	    // echo "<h1>count($jumlah)</h1>";
            	    $jumlah = ceil(count($jumlah)/6);
            	    // echo "<h1>$jumlah</h1>";

					$limit = 0;

					for ($a=1;$a<=$jumlah;$a++):
					?>
					<li class="container">
<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/1.jpg"  > -->
					<?php
 	 	           $sql = "SELECT 
 	 	            pdm.id phid,
 	 	            alias_name,
 	 	           	ph.datetime, ph.project_id, 
 	          		pdm.name_file,
 	          		SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
                    FROM
                    project  as p                    
                    inner join 
                    project_comment_head AS ph on p.id = ph.project_id
                    INNER JOIN
                    project_comment AS pdm
                    ON pdm.head_project_id = ph.id
                    where 
                    p.id_member = $id_member
                    and
                    pdm.status = 1 
                    and
                    SUBSTRING_INDEX(pdm.name_file,'.',-1) in ('jpg','png','gif','PNG','JPG','GIF')
					$filter
					limit 6 OFFSET $limit                    
                    ";
                    // echo $sql;
            	    $comment = Yii::app()->db->createCommand($sql)->queryAll();

					foreach($comment as $kom){ 
						// $path = Yii::app()->baseurl."/img/comment/$kom[name_file]";
						// $ext = pathinfo($path, PATHINFO_EXTENSION);
						// $allow = array('png','jpg','gif');
 		   //            		if (in_array($ext,$allow )){

              			?>
							<div class="img-progres">
								<div class="hint-progres">
									<h3>
										<?php 


										// echo  Project::model()->findByPk($kom['project_id'])->project_name; 
										if ($kom['alias_name']!='')
											echo  $kom['alias_name']; 
										else
											echo "NO NAME";

										?>

									</h3>									
									<?php echo "Uploaded at ".date('d M Y H:i',strtotime($kom['datetime']))?>
								<br>
								<img id_comment="<?php echo $kom['phid']?>" phid="<?php echo $kom['name_file']?>" class="icon-comment" style="width:20px;margin-top:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/comment.ico" >
								</div>
								<a class="" href="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">
									<img style="width:100%" class="" src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">		
								</a>
							</div>
						<?php 

						
					} ?>	
					</li>
					<?php 
					$limit = $limit + 6;
					endfor;?>
		
 			</ul>

						
		</div>

		<div id="rnd" class="box" style="float:left">
			<h2 class="h2-white position-rnd">Perks + R & D</h2>
		</div>

		<style type="text/css">
		.position-rnd{
			position: absolute;
			margin-top: -50px;
			text-transform: uppercase;
			text-decoration: none!important;
	        margin-left: -5px;
		}
		#news .container {
			margin: 0;
			/*width: */
			padding: 0;
		}
		#news .container li {
			/*width: 100%;*/
			margin: 0 0 0 5px;
			padding: 5px 0 5px 0;
			border-bottom: 1px dotted #999
		}
		.sy-pager{
			display: none;
		}
		#wrap-invite{
			overflow: visible;
			width: 400px;
		    height: 100px;
		    background-color: white;
		    position: fixed;
		    top: -200px;
		    padding: 0px 10px 10px 10px;
		    right: 0px;
		    display: none;
		    z-index: 200;
		    margin: auto;
		    left: 0;
		    bottom: 0;
		    border-radius:10px;
		    webkit-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
			-moz-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
			box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);

		}
		.close-dialog,.loader{
			width: 20px;
			position: absolute;
			top:5px;
			right: 5px;
			cursor: pointer;
		}
		/*.close-dialog*/
		#wrap-invite input[type="email"]{
			width: 70%;
		}
		#wrap-list-employee{
			width: 750px;
		    height: 600px;
		    background-color: white;
		    position: fixed;
		    top: 0;
		    padding: 0px 10px 10px 10px;
		
		    display: none;
		    z-index: 200;
		    margin: auto;  
		    left: 0;
		    bottom: 0;
		    right: 0;
		    border-radius:10px;
		    webkit-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
			-moz-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
			box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		}

		#wrap-list-employee table{
			width: 100%;
		}
		#wrap-list-employee table  tr th{
			border-top:1px solid black;
			border-bottom:1px solid black;
			text-transform: uppercase;
			text-align: left;
		}
		#wrap-list-employee table  tr td{
			text-align: left;
			/*border-top:1px solid black;
			border-bottom:1px solid black;
			text-transform: uppercase;*/
		}
		.delete,.action,.resend,.loader{
			width: 20px;
			height: auto;
			cursor: pointer;
		}
		.loader{
			display: none;
			/*[]*/
		}
		.error-invite{
			margin-top:40px;
			color:red;
		}
		.succes-invite{
			margin-top:40px;
			color:green;
		}
		input#email{
			width: 270px;
		}
		input#submit-invite{
			background:#F5B800;
			border-collapse: collapse;
			border:none;
			padding: 3px;
			padding-left: 5px;
			padding-right: 5px;
		}
		#wrap-setting{
			width: 750px;
		    height: 600px;
		    background-color: white;
		    position: fixed;
		    top: 0;
		    padding: 0px 10px 10px 10px;
		
		    display: none;
		    z-index: 200;
		    margin: auto;  
		    left: 0;
		    bottom: 0;
		    right: 0;
		    border-radius:10px;
		    webkit-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
			-moz-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
			box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		}
		#tabs {
		  top:10px;
		  position: relative;
		  overflow: hidden;
		  width: 100%;
		  margin: 0;
		  padding: 0;
		  list-style: none;
		}

		#tabs li {
		  float: left;
		  margin: 0 -15px 0 0;
		}

		#tabs a {
		  float: left;
		  position: relative;
		  padding: 0 40px;
		  height: 0; 
		  line-height: 30px;
		  text-transform: uppercase;
		  text-decoration: none;
		  color: #fff;
		  border-right: 30px solid transparent;
		  border-bottom: 30px solid #3D3D3D;
		  border-bottom-color: #7779;
		  opacity: .3;
		  filter: alpha(opacity=30);    
		}

		#tabs a:hover,
		#tabs a:focus {
		  border-bottom-color: #F5B800;
		  opacity: 1;
		  filter: alpha(opacity=100);
		}

		#tabs a:focus {
		  outline: 0;
		}

		#tabs #current {
		  z-index: 3;
		  border-bottom-color: #3d3d3d;
		  opacity: 1;
		  filter: alpha(opacity=100);   
		}
		#tabs a {
		  height: 0; 
		  line-height: 30px;
		  border-right: 30px solid transparent;
		  border-bottom: 30px solid #3D3D3D;    
		}
		</style>
		<script type="text/javascript">
			var number = 0;

			  function reloadTab(){ 	
			    $("#content-tab > div").hide(); // Initially hide all content
			    $("#tabs li:first a").attr("id","current"); // Activate first tab
			    $("#content-tab > div:first").fadeIn(); // Show first tab content 
		    }
		    function resetTabs(){
			    $("#content-tab > div").hide(); //Hide all content
			    $("#tabs a").attr("id",""); //Reset id's      
			    // alert('reset OK');


			}

			$(document).ready(function(){
				var id_pcm = 0;
				var elem = document.getElementById('image-comment'),
				elemLeft = elem.offsetLeft,
				elemTop = elem.offsetTop,
				context = elem.getContext('2d'),
				elements = [];
				var warna = 'black';
				var no = 1;

			    function gantiWarna(){
			    	alert('masuk');
			    	// alert(warna);
			    }
// 

				// $("#news").smartmarquee();
				$(document).on('click','.gantiwarna',function(){
					// alert($(this).attr('warna'));
					warna = $(this).attr('warna');
			    	$("#image-comment").data("jqScribble").update({brushColor: warna});
					// alert(warna);
				});
				$(document).on('click','.icon-comment',function(){
					id_pcm = $(this).attr('id_comment');

					// alert(id_pcm);
					// alert(id_pcm);
					$('#wrap-image-desc').show();
					$('#tools-brush').show();
					var index = $('.icon-comment').index(this);
					var id =  $(this).attr('phid');
					var url = '../img/comment/'+id+'';
					// alert(url);  
					$('#sky').attr('src',url);
					var imk = $("#sky");
					var  realWidth;
					var  realHeight;
			        // Create dummy image to get real size
			        $("<img>").attr("src", $(imk).attr("src")).load(function(){
			            realWidth = this.width;
			            realHeight = this.height;
						$('#image-comment').attr('width',realWidth);
		            	$('#image-comment').attr('height',realHeight);
				
			            // alert("Original width=" + realWidth + ", " + "Original height=" + realHeight);
					// alert(realHeight);	
			        });

					// alert(realHeight);
					// var img = $(".img-progres")[index]; // Get my img elem
					// var pic_real_width, pic_real_height;
					// $("<img/>") // Make in memory copy of image to avoid css issues
					// 	.attr("src", $(img).attr("src"))
					// 	.load(function() {
					// 	pic_real_width = this.width;   // Note: $(this).width() will not
					// 	pic_real_height = this.height; // work for in memory images.
					// });
					// 	alert(pic_real_height);
					// 	alert(pic_real_width);
					// $('#image-comment').attr('height',realHeight);
					$('#full-black').show();
					$('#wrap-comment').show();
					$('#image-comment').css('background-image','url(../img/comment/'+id+')');
					window.scrollTo(0, 0);


					// $('image-comment').css('background-image','<?php echo  Yii::app()->request->baseUrl; ?>/img/comment/?>id');
					// $('.image-comment').css('background-image','url(images/satu.jpg)');
					// $('.image-comment').css('background','yellow');
					// $('#image-comment').css('background-image','url(../img/comment/'+id+')');
					// alert(id);

				});

						
			elem.addEventListener('dblclick', function(event) {
				var x = event.pageX - elemLeft,
				y = event.pageY - elemTop;
				console.log(x, y);
				context.font = '28pt Calibri';

				context.fillStyle = warna;
				// alert(warna);
				context.fillText(no,x,y);
		        no++;
		        $('#btn-add-comment').trigger('click');

					// alert('hahha');
			}, false);
			$(document).on('click','#btn-save-comment',function(e){
				var jumlah  = $('.description').length;
				// alert(jum(lah);
			    			
				


					// alert(dataUrl);
				
				

				var id_comment = $(this).attr('id_comment');
				// alert(id_pcm);
				// exit;
				var des;

				var des_no;
				var myarray = [];
				for(var a=0;a<jumlah;a++){
					nilai = $('.description').eq(a).val();
					des_no = $('.description-number').eq(a).html();
					// alert(a);
					// myarray['cinta'] = des_no; 
					// myarray.push(des_no);
					myarray.push({"no":""+des_no+"","value":""+nilai+""});

				}
				$.ajax({
					url:'<?php echo Yii::app()->createUrl('comment/send') ?>',
					type : "GET",
					data :{
						id_pcm : id_pcm,
						data : myarray
					},
					success:function(data){
						// alert(data);
						UploadPic(data);
					}
				});
			});
			
				$(document).on('click','.resend-invitation',function(){
					if (confirm('resend email invitation ? ')){
					// e.preventDefault();
					// alert('submit ');
						var email = $(this).attr('email');
						// alert(email);
						$.ajax({
							url : '<?php echo Yii::app()->createUrl('member/resendinvite'); ?>',
							data: 'email='+email,
							type: 'GET',
							beforeSend: function(){
								$('.close-dialog').hide();
								$('.loader').show();

								// $('.close').hide();
								// $('#submit-invite').attr('disabled',true);

							},
							success: function(datas){
								$('.loader').hide();
								$('.close-dialog').show();

								alert('email invitation has been sent');
								reloadList();
								// alert(datas);
								// if (datas=='succes'){
								// 	$('.succes-invite').html('succes invited');								
								// }else{
								// 	$('.error-invite').html(datas);
								// }
								// $('.loader').hide();
								// $('.close').show();
								// $('#submit-invite').attr('disabled',false);
							},
							error: function(data){
								alert('connection timeout please recheck internet connection');
								closeDialog();
								// $('.loader').hide();
								// $('.close').show();
								// $('#email').focus();
								// $('#submit-invite').attr('disabled',false);
							}

						});
					}
				});

				$(document).on('click','#invite-employee',function(){
					// alert('masuk');
					$('#full-black').show();
					$('#wrap-invite').show();
					$('#email').focus();


				});

				$(document).on('click','#btn-setting',function(){
					$('#full-black').show();
					$('#wrap-setting').show();
					// resetTabs();
					reloadSetting();

					reloadTab();
					// $('#email').focus();
				});
				$(document).on('click','#btn-list-employee',function(){
					// alert('masuk');
					$('#full-black').show();
					$('#wrap-list-employee').show();
					reloadList();

				});

				function reloadList(){
					$("#wrap-list-employee").load('<?php echo Yii::app()->createUrl('member/listsubmember'); ?>');
				}
				function reloadSetting(){
					$("#wrap-setting").load('<?php echo Yii::app()->createUrl('member/membersetting'); ?>');
				}


				$(document).on('submit','#form-invite-employee',function(e){
					e.preventDefault();
					// alert('submit ');
					$.ajax({
						url : '<?php echo Yii::app()->createUrl('member/sendinvite'); ?>',
						data: 'email='+$('#email').val(),
						type: 'GET',
						beforeSend: function(){
							$('.loader').show();
							$('.close').hide();
							$('#submit-invite').attr('disabled',true);

						},
						success: function(datas){
							// alert(datas);
							if (datas=='succes'){
								$('.succes-invite').html('succes invited');								
							}else{
								$('.error-invite').html(datas);
							}
							$('.loader').hide();
							$('.close').show();
							$('#submit-invite').attr('disabled',false);
						},
						error: function(data){
							alert('connection timeout');
							closeDialog();
						}
						// error
					});
				});
				function closeDialog(){
					$('#wrap-image-desc').hide();
					$('#full-black').hide();
					$('.loader').hide();
					$('.close').show();
					$('#wrap-list-employee').hide();
					$('#wrap-invite').hide();
					$('#wrap-setting').hide();
					$('#wrap-comment').hide();
					$('.error-invite').html(' ');
					$('.succes-invite').html(' ');
					$('#email').val(' ');
					$('#submit-invite').attr('disabled',false);
					$('#wrap-text-comment').html(" ");
					$('#tools-brush').hide();
					number = 0;
					
				}
				function UploadPic(id_head) {
					var canvas = document.getElementById('image-comment');
					var context = canvas.getContext('2d');
					var dataUrl = canvas.toDataURL();
					$.ajax({
					url:'<?php echo Yii::app()->createUrl('comment/saveimage') ?>',
					type : "POST",
					beforeSend : function(){
						$('	#full-loader').show();
					},
					data :{
						imgBase64 : dataUrl,
						id : id_head
						
					},
					// success:function(data){
					// 	UploadPic();
					// }
					}).done(function(o){
						// close();
						alert('comment has sent')
						closeDialog();
						$('	#full-loader').hide();
						// alert(o);
					});
				}
				$(document).on('click','.close-dialog',function(){
					closeDialog();

					// $('#wrap-invite').hide();
					
				});

			var myUrl = window.location.href; //get URL
			var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For mywebsite.com/tabs.html#tab2, myUrlTab = #tab2     
			var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab
		  
			reloadTab();
		    $(document).on("click","#tabs a",function(e) {
		    // alert('hahah');	 
			   if ($(this).attr("id") == "current"){ //detection for current tab
		           // alert('asdas');
		            return       
		        }
		        else{             
		  	        resetTabs();
		  	        $(this).attr("id","current"); // Activate this
		  	        $($(this).attr('name')).fadeIn(); // Show content for current tab
		        }
		    });

		       for (i = 1; i <= $("#tabs li").length; i++) {
			      if (myUrlTab == myUrlTabName + i) {
			          resetTabs();
			          $("a[name='"+myUrlTab+"']").attr("id","current"); // Activate url tab
			          $(myUrlTab).fadeIn(); // Show url tab content        
			      }
			    }
   			
			   

			});
		</script>
	
		<div id="blog" class="box">
			<h2 class="h2-white">Lastest Blog</h2>
			<div class="container-box" id="news">
				<ul class="container" >
					<?php foreach (Blog::model()->findAll() as $key) { ?>
					<li >
						<a href="<?php echo Yii::app()->createUrl("blog/index") ?>" style=""><?php echo substr($key->title,0,40).".. - ".date('d M Y, H:i:s',strtotime($key->datetime)) ?> </a>
						<br>

						<a></a>
						
					</li>
					<?php } ?>
					
				</ul>	
				
			</div>
		</div>	
</div>

<div id="wrap-invite">
	<h3>Input Employee's Email</h3>
	<img class="action  loader"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="" >		
	<img class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png" alt="" >
	<!-- <form id="form-invite-employee" action="<?php echo Yii::app()->createUrl('member/sendinvite'); ?>" > -->
	<?php 
	$model  = new MemberSub;
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'form-invite-employee',
		'enableAjaxValidation'=>false,
		'action'=>Yii::app()->createUrl('member/sendinvite'),
	)); 
	?>	
		Email  : <?php echo $form->textfield($model,'email',array('name'=>'email')) ?> 
		<!-- <input type="email" name="email" required > -->
		<!-- <input type="submit" value="Send"> -->
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send' : 'Save',array('id'=>'submit-invite')); ?>
		<div class="error-invite"></div>
		<div class="succes-invite"></div>
	<?php $this->endWidget(); ?>
</div>	
<div id="wrap-list-employee"></div>
<div id="wrap-setting"></div>
<div id="wrap-comment">
	<!-- <div class="tools">
		 <a href="#image-comment" data-tool="marker">Marker</a>
		 <a href="#image-comment" data-tool="eraser">Eraser</a>
	</div> -->
	<img style="position:fixed" class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" alt="" >
	<!-- <h2 style="text-decoration:underline">New Comment</h2> -->
	<center>
		<canvas  id="image-comment" ></canvas>
	</center>
</div>
<script type="text/javascript">
	  $(function() {
 			// $('#image-comment').sketch({defaultColor: "#FFCC33"});
 			$("#image-comment").jqScribble();
	  });
</script>
<!--
<div class="tools">
  <a href="#tools_sketch" data-tool="marker">Marker</a>
  <a href="#tools_sketch" data-tool="eraser">Eraser</a>
</div>
<canvas id="tools_sketch" width="800" height="300" style="background: url(http://farm1.static.flickr.com/91/239595759_3c3626b24a_b.jpg) no-repeat center center;"></canvas>
-->
<style type="text/css">	
	#image-comment{
		/*display: inline-block;*/
		/*max-height: 100%;
		max-width: 100%;*/
		margin: 0;
		padding: 0;
/*		width: 800px!important;
		height: 600px!important;
*/		vertical-align: middle;
		background-color: transparent;
		 /*background-size: cover;*/
	    background-repeat: no-repeat;
	}
	#wrap-comment{
		cursor: pointer;
		width: 100%;
	    height: 100%;
	    top:0px;
	    background-color: black;
	    position: absolute;
	    display: none;
	    z-index: 200;
	    margin: auto;  
	    left: 0;
	    bottom: 0;
	    right: 0;

	    /*border-radius:10px;*/
	   /* webkit-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		-moz-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);*/
	}

	#wrap-image-desc{
		display: none;
		overflow-y: auto;
		overflow-x: hidden;
		border:1px solid white;
		padding: 20px;
		width: 400px;
		height: 400px;
		color: white;
		background-color:black;
		position: fixed;
		right: -400px;
		z-index: 250;
		margin-top:-410px;
		  transition: right 500ms;
		/*transition:all 20ms;*/
	}	
	#wrap-image-desc:hover{
		right: 0px;
	}
	#wrap-image-desc tr td{
		padding: 5px;
		color: white;
	}
	#wrap-image-desc textarea{
		width: 300px;
	}
	.toggle-show{
		position: absolute;
		left: 0px;
		top: 0px;
		display: none;
	}
	.delete-desc-comment{
		width: 20px;
		height: auto;
		cursor: pointer;
	}
</style>
<script type="text/javascript">	
$(document).ready(function(){

	$(document).on('click','#btn-add-comment',function(e){
		number = number + 1;
		var row = "<tr class='row-comment'>"+
		"<td class='description-number' style='width:30px;'>"+number+"</td>"+
		"<td><textarea class='description'>"
		+"</textarea></td>"+
		// '<td>'+
		// '<img class="delete-desc-comment" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/delete.ico">'+
		// '</td>'+
		'</tr>'; 
		$('#wrap-text-comment').append(row);
	});
	
	$(document).on('click','.delete-desc-comment',function(e){
		// alert(number);
		var index = $('.delete-desc-comment').index(this);
		$('.row-comment').eq(index).remove();
		number = $('.row-comment').length;
	});

});

</script>
<img src="" id="sky" style="display:none" width="250" alt="Cloudy Sky">

<div id="wrap-image-desc">
	<img class="toggle-show" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch White/compose-3.ico">
	<div style="margin-left:44px;">
		<button style="display:none" id="btn-add-comment">Add Comment</button>
		<button id="btn-save-comment" >Save & Send Comment </button>
	</div>
	
	<table id="wrap-text-comment" ></table>
</div>
<style type="text/css">
#tools-brush{
	z-index:400;
	overflow: hidden;
	 margin-bottom: 5px;
	 position:fixed;
	 left:0px;
	 /*margin-top:100px;*/
	 background-color: white;
	 padding: 10px;
	 left: -200px;
	 display: none;
	 transition: left 500ms;
}
#tools-brush:hover{
	 left:0px;

}
#tools-brush a{
	 color: black;	
}
</style>
<!-- tes brush -->
	<div id="tools-brush" style="">
		<!--
		<div class="column-left links">
			<strong>BRUSHES:</strong>
			<a href="#" onclick='$("#image-comment").data("jqScribble").update({brush: BasicBrush});'>Basic</a>
			<a href="#" onclick='$("#image-comment").data("jqScribble").update({brush: LineBrush});'>Line</a>
			<a href="#" onclick='$("#image-comment").data("jqScribble").update({brush: CrossBrush});'>Cross</a>
		</div>
		-->
		<div class="column-right links">
			<strong>COLORS:</strong>
			<a href="#" class="gantiwarna" warna="rgba(0,0,0,1)">Black</a>
			<a href="#" class="gantiwarna" warna="rgba(255,0,0,1)" >Red</a>
			<a href="#" class="gantiwarna" warna="rgba(0,255,0,1)" onclick='gantiWarna("rgba(0,0,255,1)")'>Green</a>
			<a href="#" class="gantiwarna" warna="rgba(0,0,255,1)">Blue</a>
		</div>
		<div class="links" style="display:none;margin-top: 5px;">
			<strong>OPTIONS:</strong>
			<a href="#" onclick='$("#image-comment").data("jqScribble").clear();'>Clear</a>
			<!--<a href="#" onclick='addImage();'>Add Image</a>
			<a href="#" onclick='$("#image-comment").data("jqScribble").save();'>Save</a>
			<a href="#" onclick='save();'>Custom Save</a>-->
		</div>
	</div>
	<!-- <canvas id="test" style="border: 1px solid red;"></canvas> -->




