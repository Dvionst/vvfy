<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
	<link rel="SHORTCUT ICON" href="<?php echo Yii::app()->request->baseUrl;?>/images/home.ico"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/land.css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/normalize.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/progress/pro-bars.min.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/smoothscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/appear.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/pro-bars.min.js" type="text/javascript"></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/msdropdown/jquery.dd.min.js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/te/jquery-te-1.4.0.css" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/te/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/sumo/jquery.sumoselect.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/ckeditor/ckeditor.js'></script>

	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/adapter.js'></script>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>

	<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/sumo/sumoselect.css" />

	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/tag-editor/jquery.caret.min.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/tag-editor/jquery.tag-editor.min.js'></script>
	 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/tag-editor/jquery.tag-editor.css" /> -->

	<!-- plugin slick  -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slick/slick.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slick/slick.css" />
	<!-- plugin slide -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.min.js"></script>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/slipry/dist/slippry.css" type="text/css" />



		<!--
	<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.css' rel='stylesheet' />
	<link  href='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/lib/moment.min.js'></script>
	<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/originalfc/fullcalendar.min.js'></script>
	-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/dd.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/sprite.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/skin2.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/msdropdown/sprite.css" />
	
	
	<title><?php echo "VVFY user page " ?></title>
	<style>
	body{
		background-color: black;
	}
	.add-blog{
	position:relative;
	top:-10px;
	color:black;
	text-decoration:none;
	}
	.table-project{
	}
	#blog-loader{
		width:100%;
		display: none
	}
	#blog-loader img{
		width:180px;
		margin:0 auto;
	}
	#box-add-blog{
		/*display:none; */
		/*position:absolute;*/
		z-index:100;
		background:white;
		width:100%;
		height:100%;
		left:0;
		padding:20px;
		box-sizing:border-box;
		top:0;
	}
	#box-add-blog input,select{
		padding:5px;
	}
	#box-add-blog legend{
		background:white;
	}
		#loader{
			display:none;
		}
		#project-calendar #body{
		margin-top:20px;
		}
		#project-calendar #header{
		font-size:30px;
		color:white;
		font-weight:bolder;
		margin: 5px 0 0 5px;
		}
		.wrapper-month{
			display:block;
			/*width:100%;*/
			float:left;
		}
		#project-calendar{
		margin-top:50px;
		width:100%;
		height:900px;
		background:black;
		padding-top:40px;
		padding-left:70px;
		box-sizing:border-box;
		}
		#project-calendar .group-box{
		background:black;
		float:left;
		margin:10px;
		width:250px;
		}
		
		.group-box .head{
		background:#CCCCCC;
		font-weight:bold;
		padding:5px;
		box-sizing:border-box;
		height:40px;
		width:100%;
		}
		::-webkit-scrollbar {
		}
		.group-box .content{
			padding:5px;
			box-sizing:border-box;
			width:100%;
			color:white;
			border: 1px solid #FFF;
			height:auto;
			overflow-y:auto;

		}
		.group-box .content .ceklis{
		width:20px;
		margin-top:3px;
		}
		#project-calendar .month-name{
			box-sizing:border-box;
			width:200px;
			padding:5px;
			background:#FB3131;
			color:white;
			font-weight:bolder;
			text-align:center;
			margin-left:10px;
			margin-bottom:10px;
			text-transform:uppercase;
		}
		.hide-content{
			display:inline;
			width:25px;
			float:right;
			cursor:pointer;
		}
		.icon-add{
			width:30px;
			height:30px;
			background-image:url('<?php echo Yii::app()->request->baseUrl;?>/img/remove.ico');
			background-size:100% 100%;
			margin:-2.5px 0 0 -3px;
		}
		.icon-remove{
		background-image:url('<?php echo Yii::app()->request->baseUrl;?>/img/add.ico');
		}
		.same-size{
		width:30px;	
		}
		.content-hide{
			visibility:hidden;
		}
		
		
		/*  masuk */
		
		#form-progres,#form-comment,#form-project{
	display:none;
	}
	#tbl-task,#tbl-calendar,#tbl-client,#tbl-user,#tbl-team{
	display:none;
	}
	#third table,.table-project{
	width:100%;
	margin-top:-10px;
	}
	
	#third table .head,.table-project .head{
	
	background:transparent;
	
	border:none;
	color:black;
	font-weight:bold;
	text-transform:uppercase;
	border-bottom:1px solid black;
	}
	#third table tr,.table-project{
	transition:background 1000ms;
	}
	#third .table-project tr:hover{
	cursor:pointer;
	
	}
	#third .table-project td:hover{
	cursor:pointer;
	color:red;
	
	}
	
	.table-project tr td{
		border:none!important;
	
	}
	#third table, td,.table-project td{
	border:none;
	}
	#third table td,.table-project td{
	padding:3px;
	}
	.radius-left{
	border-top-left-radius:20px;
	}
	.radius-right{
	border-top-right-radius:20px;
	}
	.project-name{
	font-size:17px;
	font-weight:900;
	
	}
	
	.project-btn-wrapper .sub{
	display: inline;
	padding: 2px;
	font-weight: bold;
	cursor: pointer;
	transition: background 400ms;
	margin-top: 10px;
	height: 12px;
	font-size: 11px;
	}
	
	.project-btn-wrapper .sub:hover{
	background:black;
	color:white;
	}
	.project-btn-wrapper .sub-tasks{
	background:red;
	display:none;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	}
	.project-btn-wrapper .sub-comment{
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	border:1px solid black;
	border-radius:10px;
	
	}
	.project-btn-wrapper .sub-progress{
	border:1px solid black;
	border-radius:10px;
	
	}
	.project-btn-wrapper .sub-render{
	background:blue;
	}
	
	.filter-data li{
	display:inline;
	border-top:1px solid black;
	border-left:1px solid black;
	border-right:1px solid black;
	padding:10px;
	border-top-right-radius:10px;
	border-top-left-radius:10px;
	}
	.filter-data li:hover{
	background: rgb(96,108,136); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(96,108,136,1) 0%, rgba(48,58,81,1) 57%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(96,108,136,1)), color-stop(57%,rgba(48,58,81,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(96,108,136,1) 0%,rgba(48,58,81,1) 57%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#606c88', endColorstr='#303a51',GradientType=0 ); /* IE6-9 */
	
	cursor:pointer;
	color:white;
	}
	.filter{
	float:right;
	}
	.total{
	font-weight:bold;
	}
	.editable-progress{
	width:50px;
	position:absolute;
	display:none;
	}
	.editable-user{
	width:50px;
	}
	.editable-name{
	margin-bottom:10px;
	}
	#overlay{
	width:100%;
	height:100%;
	position:fixed;
	display:none;
	}
	#loader-row,.loader-row-form{
	display:none;
	}
	#form-add-schedule{
		display:none;
		border-radius:10px;
		webkit-border-radius:10px;
		moz-border-radius:10px;
		border:1px solid black;
		background:white;
		width:300px;
		position:fixed;
		z-index:99;
		top: 20%;
		left: 50%;
		margin-top: -100px;
		margin-left: -250px;
		padding:20px;
	}
	#form-add-schedule textarea,#form-add-schedule input,#form-add-schedule select{
		border:1px solid gray;
	}
	input[type="date"]{
		border-radius:8px;
	}
	.img-action{
		cursor:pointer;
	}
	.mintop{
		top:-70px;
		position:relative;
	}
	.nav-up {	
   	 display: none;
	}
	.nav-down {	
   	 display: block;
	}
	header .hamburger{
		position: absolute;
		top: 40px;
		margin-left: 210px;
		cursor: pointer;
		z-index: 99;
        width: 30px;
	}
	header .logo{	
		width:200px;
		height:auto;
		z-index:99
		cursor:pointer;
	}
	
	.hide_header, .without_thmb .control_toggle, .hide_controls .control_toggle {
        background: url(../img/diamond_sprite.png) no-repeat -60px -20px!important;
	}
	.hide_controls {
        left: 250px!important;
        position: relative;
	}
	#full-black {
	    width: 100%;
	    height: 100%;
	    z-index: 150;
	    background: black;
	    /*opacity: 0.6;*/
	    display: none;
	    position: fixed;
	}
	</style>
	

</head>
<body>
<script type="text/javascript">
var id_log ;
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

 

$(document).ready(function(){
	// menu_toggler
	// $('.project-upload').slick({
	//   dots: true,
	//   infinite: true,
	//   speed: 300,
	//   slidesToShow: 1,
	//   centerMode: true,
	//   variableWidth: true
	// });
	//  $('.menu_toggler').click(function () {
	//  	alert('masyk');
	// 	// alert('masuk');
	// 	// demo1.goToNextSlide();
	// 	// return false;
	// });
	$(document).on('click', '.a-show-user-information', function(e) {
		// alert('masuk');
		$('.user-information').fadeToggle();
	});
	$(document).on('change', '.input-info', function(e) {
		// alert('masuk');
		var atr = $(this).attr('attr');
		var value = $(this).val();
		$.ajax({
	        url: "<?php echo Yii::app()->createUrl("member/editable")?>",
	        data : "atr="+atr+"&value="+value,
	        cache: false,
	        beforeSend:function(){
				$(this).hide();
				$('.editable-loadera').show();

	        },
	        success: function(msg){
				$('.input-info').show();
				$('.editable-loadera').hide();
	        	// alert(msg);
	        	// $('#name_member').html()
	        	// id_log = msg;
	        },
	        // error : function(msg){
	        // 	alert('eror');
	        // }
    	});
		// alert(atr);
	});
	$(document).on('click', '.control_toggle ', function(e) {
		// alert('masuk');
		$('.control_toggle').toggleClass('hide_controls');
		$('.about').toggleClass("aboutshow");
		$('.full-screen').toggleClass("invisible");
		// $(this).hide();
		// // var i = $(this).closest('.editable-name').index(this);
		// var index = $(".p-project-name").index(this);
		// $('.editable-name').eq(index).show();
		// alert(index);

	});
	

	<?php 
	$action = $this->action->Id;
	$idp =  Page::model()->find("name = '$action'")->id;
	?>
	$.ajax({
        url: "<?php echo Yii::app()->createUrl("logs/create")?>",
        data : "page_id=<?php echo $idp; ?>",
        cache: false,
        success: function(msg){
        	// alert(msg);
        	id_log = msg;
        },
        error : function(msg){
        	alert('eror');
        }
    });
});
$(window).bind('beforeunload', function() {
	// alert('masuk');
 	$.ajax({
        url: "<?php echo Yii::app()->createUrl("logs/update")?>",
        cache: false,
        data : "id="+id_log,   
        success: function(msg){
        	id_log = msg;
        }
   	 });
} );
// window.onbeforeunload = function() {
//     // return id_log;
//     $.ajax({
//         url: "<?php echo Yii::app()->createUrl("logs/update")?>",
//         cache: false,
//         data : "id="+id_log,   
//         success: function(msg){
//         	id_log = msg;
//         }
//     });
//     return false;
// };
</script>

<div id="full-screen" class="full-screen"></div>
<div id="full-black" ></div>
<?php //include('jquery.php') ?>
	<div id="wrapper" style="margin-left:auto;margin-right:auto">
		<header style="margin-bottom:20px">
			<div class="title">
			<a href="javascript:void(0)" class="control_toggle "></a>	
			</div>
			<div class="categori-tab">
				<ul class="main-tab" style="margin-top: 25px;">
					<li class="btn-all-projects" style="color:white;margin-left:700px;position:relative;top:25px;">
						ALL PROJECTS
					</li>
						
					<style>
						.logout-user{
							display:inline;
							position:absolute;
							right: 0px;
							/*margin-left:530px;*/
							/*margin-top:-25px;*/
						}
						.user-information td{
							padding: 3px;
						}
						.user-information{
							display: none;
							background-color: white;
							position: absolute;
							left: -200px;
							padding: 10px;
							z-index: 50;
							width: 300px;
							top:45px;
						}
						.top-arrow{
							width: 0;
							height: 0;
							border-left:15px solid transparent;
							border-right:15px solid transparent;
							border-bottom:15px solid white;
							top: -10px;
							position: absolute;
							right: 30px;
						}
						.editable-loader{
							width: 20px;
							height: auto;
							display: none;
						}
					</style>
					<div class="logout-user">
						<li >
							<a id="name_member" class="a-show-user-information" style="color:white;font-size:20px" href="#">Hi  
								<?php
									$user = Yii::app()->user->id;
									$name_member =  Member::model()->find("email = '$user'")->name; 
									$company =  Member::model()->find("email = '$user'")->company_name; 
									echo $name_member;
								?>
							</a>
							<ul class="user-information">
								<li>
									<div class="top-arrow"></div>	
									<table>
										<tr>
											<td>Name </td>
											<td>
												<img class="editable-loader" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">
												<input maxlength="18" class="input-info" attr="name" type="text" value="<?php echo $name_member ?>" > </td>
										</tr>
										<tr>
											<td>Company Name </td>
											<td><input maxlength="18" class="input-info" attr="company" type="text"  value="<?php echo $company ?>"  > </td>
										</tr>
									</table>

								</li>								
							</ul>
						</li>
						<li style="" >
							<a href="<?php echo Yii::app()->createAbsoluteUrl("site/logout"); ?>">LOGOUT</a>
						</li>
					</div>
				</ul>
			</div>
		</header>
		<?php echo $content; ?>
	</div>
	</body>
</html>
