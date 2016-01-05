
<script src="<?php echo Yii::app()->request->baseurl; ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="//js.pusher.com/2.2/pusher.min.js"></script>
		<!-- Smooth Touch Scroll -->
<style type="text/css">
	
	
/*	*{
	::-webkit-scrollbar {
	width: 7px;
	height: 7px;
	background-color:transparent;
	}
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-o-user-select: none;
		user-select: none;
	}*/
	#menu{
    position: relative;
    right: 0px;
    display: block;
    top: 20px;
    float: right;	
	}
	#menu li a{
	letter-spacing: 0px;
	text-decoration:none;
	color:white;
	font-size:21px;
	font-family: "ebrima"!important;
	}
	#menu ul li{
	display:inline;
	color:white;
	margin-left:20px;
	}
	.logo-def,.logo_retina{
		display: block;
	}

	header .logo{
	/*width: 100px;*/
	right: 100px;
	top: 0px;
	display: none;
	position: absolute;
	}
	header .logo img{
		width: 150px;
	}
	.hide-menu{
		/*display: none!important;*/
		visibility: hidden;
	}

	#wrapper{
		top:0px;
		width: auto;
		padding: 0px;
	}
	.container{
		width:100%;
		margin:0 auto; 
	}
	.section{
		overflow: visible;
		height: auto;
		padding-top: 100px;
		padding-bottom: 100px;
	}

	#home{
		width:100%;
		background-color: rgba(20,20,20,1);
	}
	#calendar{
		width:100%;
		padding-bottom: 200px;
		/*height: 300px!important;*/
		/*background-color: red;*/
	}
	#project{
		width:100%;
		padding-top: 200px;
		position: relative;
		background-color: transparent;
		overflow-y:hidden; 
		background-color: rgba(20,20,20,1);
	}
	
	.content-calendar{
		/*width: 300px;*/
		/*width: 80%;*/
		border:1px solid white;
		padding: 5px;
		/*height: 80%;*/
		/*margin: 20px;*/
		/*border:1px solid white;*/
		/*width: 300px;*/
	}
	div.zabuto_calendar .table tr th, div.zabuto_calendar .table tr td {
     background-color: transparent!important; 
     color: white;
	}	
	.summary{
		color: white;
		/*width:40%;*/
		float: left;
		background-color: transparent; 

	}
	.upgrade{
		width: 200px;
		float: left;
		margin-left: 100px;
		margin-right: 20px;
		position: relative;
	}
	.img-invested{
		width: 200px;
		height: auto;
		float: left;
	}
	.number-invested{
		color: rgba(203,203,203,1);
		letter-spacing: 5px;
		font-size:55px;
		line-height: 70px;
		font-weight: 900; 
		margin-top: 0px;
		font-family: 'Open Sans', sans-serif;
		margin-bottom: 0px;
	}
	.lbl-invested{
		background-color: transparent;
		width: auto;
		font-size: 15px;
		letter-spacing: 3px;
		padding-bottom: 30px;
		overflow: visible;
		font-weight: 300;
		font-family: 'Open Sans', sans-serif;
	}
	.line-lbl-invested{
		width: 25px;
		height: 2px;
		content: "";	
		background-color: rgba(135,99,51,1);
	}
	.lbl-invested-detail{
		color: rgba(135,99,51,1);
		font-weight: 300;
		font-family: 'Open Sans', sans-serif;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-size: 11px;
	}
	.wrapper-total-invested{
		float: left;
		margin-left: 20px;
	}
	.detail-project{
		float: left;
		width: 100%;
	}
	.detail-project ul li{
		float: left;
		list-style: none;
		margin-left: 30px;
	}
	.wrapper-total-label p.number{
		font-size: 60px;
		line-height: 60px;
		font-weight:800; 
		color: rgba(203,203,203,1);
		text-align: center;
	    margin: auto 0px;
    	font-family: 'Open Sans', sans-serif;
	}
	.wrapper-total-label label{
		font-size:10px; 
	}
	.upgrade-label-bold{
		font-weight: 700;
		color: white;
		letter-spacing: 1px;
		font-size: 35px;
		line-height: 35px;
		font-family: 'Open Sans', sans-serif;
	}
	.upgrade-label-nobold{
		color: white;
		line-height: 30px;
		letter-spacing: 1px;
		font-size: 27px;
		margin-top: 10px;
		margin-bottom: 15px;
		font-weight: 100;
		font-family: 'Open Sans', sans-serif;
		
	}
	#wrapper-conversation .conv-loader{
		display: none!important;
	}
	.upgrade-btn{
		border:1px solid white;
		padding:10px;
		color: white;
		font-size: 12px;
		text-align: center; 
		float: left;
		width: 100%;
		letter-spacing: 1px;
	}
	.upgrade-new-project-btn:hover{
		border:1px solid white;
		/*text-decoration:underline; */
	}
	.upgrade-new-project-btn{
		border:1px solid transparent;
		margin-top: 30px;
		cursor: pointer;
		text-align: center; 
		font-size: 12px;
		width: 100%;	
		padding:10px;
		float: left;
		background-color: rgba(226,151,0,1);
		color: black;
		letter-spacing: 3px;
		webkit-transition:200ms border;
		moz-transition:200ms border;
		transition:200ms border;
	}
	.choice-project{
		/*width: 20%;*/
	     width: 250px;
  	 /* height: 200px;	*/
	    float: left;
	    color: white;
	    padding: 15px;
	}
	.choice-promo-project{
		border: 1px solid white;
	    padding: 10px;
	    width: 200px;
	    height: 200px;
	    margin-top: 20;
	    padding: 20px;
	    height: 140px;
	    font-family: 'Open Sans', sans-serif;
	}
	.head-choice-title{
	    font-family: 'Open Sans', sans-serif;
	    font-weight: 700;
	}
	.choice-valid{
		color: rgba(203,203,203,1);
		font-size: 10px;
		 font-family: 'Open Sans', sans-serif;
	    font-weight: 300;
	    text-transform: uppercase;
	}
	.real-calendar{
		width: 300px;
		margin-right: 100px;
		/*background-color: green;*/
		/*background-color: red;*/
		height: auto;
		float: left;
		position: relative;
	}
	.project-info{
		width: 400px;
		color: white;
		/*background-color: RED;*/
		height: 300px;
		float: left;
	}
	.project-list{
		float: left;
		color: white;
		margin-right: 50px;
		width: 200px;
		height: 300px;
		position: relative;
		background-color: transparent;

	}
	.project-list ul li{
		text-transform: uppercase;
		letter-spacing: 1px;
		list-style: none;
		line-height: 30px;
		font-weight: 600;
		font-size: 13px;
		font-family: 'Open Sans', sans-serif;
	}
	.project-list ul li:hover{
		list-style: circle;
		color: red;
		cursor: pointer;
	}
	.title-project{
		font-size: 30px;
		font-weight: 900;
		font-family: 'Open Sans', sans-serif;
		margin-bottom: 30px;
	}
	.project-info .row, .project-info .label,.project-info .value{
		float: left;
		padding:2px;
		font-size: 13px; 
		letter-spacing: 1px;
		font-weight: 600;
		/*border:1px solid white; */
	}
	.project-info .label{
		width: 50%;
		font-weight: 600;
		font-family: 'Open Sans', sans-serif;
	}
	.project-list ul {
		margin-left: -40px;
		height: 120px;
		overflow-y: scroll;
	}
	.project-list ul::-webkit-scrollbar {
	    width: 12px;
	}
	 
	/* Track */
	.project-list ul::-webkit-scrollbar-track {
	    -webkit-box-shadow: inset 0 0 6px transparent; 
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	}
	 
	/* Handle */
	.project-list ul::-webkit-scrollbar-thumb {
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	    background: red; 
	    -webkit-box-shadow: inset 0 0 6px red; 
	}
	.project-list ul::-webkit-scrollbar-thumb:window-inactive {
		background: red; 
	}


	.project-info .table{
		font-family: 'Open Sans', sans-serif;

	}
	.project-info .separator-table{
		width: 10px;
		margin:0px; 
		float: left;
		text-decoration: none;
		border: none;
	}
	.project-info .value{
		width: 40%;
		text-align: left;
    	margin-left: 20px;
    	font-family: 'Open Sans', sans-serif;
	}
	.project-info .table .row{
		width:100%;
		font-family: 'Open Sans', sans-serif;
	} 
	.img-reload{
		width: 30px;
		height: auto;
	}
	.lbl-load-more{
		display: inline;
	    position: relative;
	    top: -8px;
	    font-size: 12px;
	}
	.project-info-btn{
		border:1px solid white;
		color: white;
		background-color: black;
		text-align:center;
		text-transform: uppercase; 
		width: 200px;
		height: auto;
		float: left;
	    padding: 7px 0 7px 0;
	    margin-top: 25px;
	}
	.wrapper-project-timeline{
		width: 260px;

		float: left;
	}
	.reject{
		display: none!important;
	}
	#zabuto_calendar{

		font-family: 'Open Sans', sans-serif;
	}
	.project-description{
		float: left;
		position: relative;
		width: 340px;
		margin-left: 10px;
		font-family: 'Open Sans', sans-serif;
		/*background-color: red;		*/
	}
	
	.project-circle{
		background-color: rgba(203,172,118,1);
		background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/icon-img.PNG');
		background-size: 15px 10px;
		background-repeat: no-repeat;
		background-position: center center;

		position: relative;
		width: 35px;
		height: 35px;
		margin-left: -10px;
		border-radius:50%;
		background-color: rgba(203,172,118,1);
		-webkit-transition:background-size 1s, width 1s, height 1s,margin-left 1s; /* Safari */
		-moz-transition: background-size 1s,width 1s, height 1s,margin-left 1s; /* Safari */
		transition: background-size 1s,width 1s, height 1s,margin-left 1s;
		/*border-radius:50%;*/
		z-index: 30;
	}
	.menu-circle:hover{
		background-color: red;
		cursor: pointer;
	}
	.menu-circle{
		-webkit-transition: background-color 2s;
		-moz-transition: background-color 2s;
		transition: background-color 2s;
		background-color: rgba(204,204,204,1);
	    margin-right: -10px;
		position: relative;
		width: 20px;
		height: 20px;
		border-radius:50%;
		border:1px solid rgba(204,204,204,1);

	/*	-webkit-transition: width 1s, height 1s,margin-left 1s; /* Safari */
		-moz-transition: width 1s, height 1s,margin-left 1s; /* Safari */
		transition: width 1s, height 1s,margin-left 1s;
		/*border-radius:50%;*/
	}

	.project-circle:hover{
		width: 60px;
		height: 60px;
		border-radius:50%;
		cursor: pointer;
		margin-left: -20px;
		background-color: rgba(203,172,118,1);
		background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/icon-img.PNG');
		background-size: 30px 20px;
		background-repeat: no-repeat;
		border:2px solid white;
		background-position: center center;

		/*border-radius:50%;*/
	}
	.project-circle:hover > .project-circle-line{
		/*display: block;*/
		/*visibility: visible;*/
		opacity: 1;
		top: 30px;
	}
	.project-circle:hover > .date-project-circle {
		opacity: 1;
	}
	.project-timeline ul li{
		list-style: none;
		margin-bottom: 10px;
		margin-bottom: 55px;
		margin-left: -50px;
	}
	.project-timeline ul {
		border-left: 2px solid rgba(203,172,118,1);
	    margin-left: 85px;
	}
	.project-label{
		font-weight: bold;
		font-weight: 600;
		letter-spacing: 4px;
		color: rgba(203,172,118,1);
		/*margin-left: -20px;*/
		margin-bottom: 20px;

	}
	.project-add-comment{
		color: rgba(203,172,118,1);
		margin:15px 0 25px 0 ;
		font-style: italic;
		font-size:12px; 

	}
	.project-load-more:hover{
		color: red;
	}
	.project-load-more{
		/*margin-top: 50px;*/
		position: absolute;
		bottom: 30px;
		cursor: pointer;
	}
	.project-goproject-btn{
		padding: 10px;
	    width: 200px;
	    background-color: rgba(203,172,118,1);
	    color: black;
	    text-align: center;
	    font-size: 10px;
	    letter-spacing: 3px;
	    font-family: 'Open Sans',sans-serif;
	    cursor: pointer;
	    padding-top: 15px;
	    padding-bottom: 15px;
	}
	.project-comment-content{
		color: white;
		line-height: 35px;
		margin:0 0 30px 0;
		font-size: 12px;
	}
	.project-user{
		color: white;
		text-transform: uppercase;
		margin-top: 35px;
		font-size: 13px;
	}

	.choose-project{
		/*margin-bottom: 50px;*/
		position: absolute;
		top: 60px;
		z-index: 200;
	}
	.choose-project select{
		
		border: 1px solid rgba(135,135,135,1);
		text-transform: uppercase;
		font-size: 14px;
		padding: 8px;
		background-color: transparent;
		color: white;
		letter-spacing: 5px;
		padding-left: 15px;
		padding-right: 40px;

		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		background-position: right center;
		background-repeat: no-repeat;
		background-image:  url("<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/arrow-216-16.png") ;
	}
	.choose-project select option{
		background-color:black;
	}
	.project-circle-line{
		width: 130px;
	    z-index: 29;
	    border-bottom: 1px solid rgba(203,172,118,1);
	    position: absolute;
	    top: 10px;
	    margin-left: 50px;
	    /* display: none; */
	    /* visibility: hidden; */
	    opacity: 0;
	    -webkit-transition: opacity 2s,top 2s;
	    -moz-transition: opacity 2s,top 2s;
	    transition: opacity 2s,top 2s;
	}
	.circle-inside{
	    width: 10px;
	    height: 10px;
	    border-radius: 50%;
	    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    position: absolute;
	    background-color: rgba(203,172,118,1);
	    right: 0px;
	    top: -5px;
	}
	#usermenu-timeline{
		position: fixed;
		right: 50px;
		display: none;
		top: 20%;
		z-index: 100;
		color: rgba(204,204,204,1);
	}
	#usermenu-timeline ul{
		border-right:1px solid rgba(204,204,204,1); 
	}
	#usermenu-timeline ul li{
		list-style: none;
		position: relative;
	    margin-bottom: 50px;
	}
	.link-menu:active{
		background-color: red;
	}
	header{
		top: 0px;
	}
	header .control_toggle {
    background: url(<?php echo Yii::app()->request->baseUrl; ?>/img/diamond_sprite.png) no-repeat -60px -20px;
	top: 10px;
	}
	header .control_toggle {
	    width: 54px;
	    height: 50px;
	    display: block;
	    background: url(<?php echo Yii::app()->request->baseUrl; ?>/img/diamond_sprite.png) no-repeat -173px -20px;
	    /* background: url(../img/diamond_sprite.png) no-repeat -60px -20px; */
	    position: fixed;
	    /* left: 300px; */
	    left: 30px;
	    bottom: 46px;	
	    z-index: 100;
	    transition: opacity 250ms, left 300ms, bottom 300ms;
	}
	div.zabuto_calendar .table tr td.event div.day, div.zabuto_calendar ul.legend li.event {
     background-color: transparent!important; 
    color: red;
	}
	.legend{
		display: none;
	}
	.center-user{
		width: 1100px;
		margin: 0 auto;
	}
	.project-view:hover{
		color: white;
	}
	.project-view{
		cursor: pointer;
		float: left;
		width: 400px;
		height: 460px;	
		margin-left: 50px;
		background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/images/2.jpg');
		background-size: cover;		
	    background-position: center center;
	   
	}
	.project-view,.project-description{
		 transition:background-image 1s,opacity 2s ;
	    -moz-transition:background-image 1s,opacity 2s ;
	    -webkit-transition:background-image 1s,opacity 2s ;
	}
	#blog{
		width:100%;
		/*padding:0px;*/
		/*padding: 110px 0 50px 70px ;*/
		/*background-color: blue;*/
		background-color: white;
		overflow-y:visible; 
		padding-bottom: 200px;
	}
	.wrapper-latest-blog{
		width: 90%;
	    position: relative;

	}
	/*.wrapper-latest-blog{
		width: 100%;
	}*/
	#container-post-blog {
	    position: relative;
	    /*float: left;*/
	    margin: 0px;
	}
	.wrapper-rnd{
		width: 40%;
    /* background-color: red; */
	    float: left;
	    padding-left: 10px;
	    margin-left: 10px;
	    padding-top: -20px;
	    position: relative;
	    border-left: 1px solid black;
	    top: 0px;
	    padding-top: 70px;
	}
	.wrapper-rnd .box-rnd{
		background-size: cover;
	    width: 40%;
	    height: 220px;
	    background-color: blue;
	    float: left;
        margin: 5px;
        background-color: rgba(242,242,242,1);
        border:2px solid black;
        position: relative;
	}
	.line-rotate {
    width: 60px;
    right: 0px;
    position: absolute;
    top: 30px;
    height: 2px;
    background-color: black;
    -webkit-transform: rotate(310deg);
    transform: rotate(310deg);
    -moz-transform: rotate(310deg);
    -ms-transform: rotate(310deg);
    -o-transform: rotate(310deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
.title-rnd{
	color: black;
    font-weight: 900;
    font-size: 12px;
    margin-top: 60px;
    margin-left: 10px;
    letter-spacing: 2px;
    margin-right: 10px;
    position: absolute;
    bottom: 20px;
    /*letter-spacing: 1px;*/
    font-family: 'Open Sans',sans-serif;
}
.readmore-rnd{
	padding: 5px 10px 5px 10px;
    border: 1px solid black;
    font-size: 7px;
    width: 100px;
    text-align: center;
    text-transform: uppercase;
    /*margin-left: 10px;*/
    margin-top: 10px;
}
.blog-title{
	color: red;
	text-transform: uppercase;
	letter-spacing: 2px;
	/*border-bottom: 2px solid red;*/
	font-weight: bolder;
}
.latest-blog{
   width: 150px;
    padding-bottom: 15px;
    margin-bottom: 15px;
    letter-spacing: 4px;
}
.go-blog-btn{
    background-color: rgba(203,0,40,1);
    padding: 7px 10px 7px 10px;
    color: white!important;
    width: auto;
    width: 220px;
    text-align: center;
    letter-spacing: 2px;
    /* float: right; */
    top: 0px;
    right: 35px;
    position: absolute;
}
.wrapper-top-blog{
	width: 100%;
	position: relative;
}

.wrapper-top-blog2{
	width: 30%;
	position: absolute;
	top: 0px;
	right: 70px;
}
.rnd-label{
	width: 100px;
    padding-bottom: 15px;
    float: right;
    text-align: right;
}
.calendar-dow-header th{
	text-transform: uppercase;
}
.calendar-month-header th{
	font-size: 40px;
	text-transform: capitalize;

}
.date-project-circle{
	color: white;
    position: absolute;
    font-family: 'Open Sans',sans-serif;
    font-weight: 100;
    left: -55px;
    width: 60px;
    top: 7px;
    opacity: 0;
    transition:opacity 1s;
    -webkit-transition:opacity 1s;
    -moz-transition:opacity 1s;

}
#overlay {
	height: 100vh;
	width: 100vw;
	background: #000 none repeat scroll 0% 0%;
	position: fixed;
	resize: vertical;
	overflow: auto;
	z-index: 1000;
}
.loader{
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin:auto;
	width: 100px;
	height: 100px;
}
.icon-logo{
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin:auto;
	width: 100px;
	height: 100px;
}
.icon-loader{
	position: absolute;
	top: 120px;
	bottom: 0;
	left: 0;
	right: 0;
	margin:auto;
	width: 100px;
	height: 100px;
}
.wrapper-red-social ul li{
	width: 35px;
	height: 35px;
	background-color: red;
	float: left;	
	margin: 6px;
	background-size: 100% 100%;
	position: relative;
}
.wrapper-red-social ul{
    margin-left: -46px;
    margin-top: 30px;
}
.project-timeline{
	overflow-y:scroll;
	overflow-x:hidden;
	height:400px;
}
/* Let's get this party started */
.project-timeline::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
.project-timeline::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px transparent; 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
.project-timeline::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: transparent; 
    -webkit-box-shadow: inset 0 0 6px transparent; 
}
.project-timeline::-webkit-scrollbar-thumb:window-inactive {
	background: transparent; 
}
.post-blog{
	width: 300px;
}
.wrapper-latest-blog{
	width: 650px;
	float: left;
}
.blog-separator{
	background-color: red!important;
	border: 1px solid transparent!important;
	letter-spacing: 32px;
}
.rnd-separator{
    position: absolute;
    right: 0px;
    width: 40px;
}

#wrapper-appcomment{
	width: 100%;
	height: 100vh;
	position: fixed;
	top: 0px;
	left:0px;
	background-color: black;
	z-index: 200;
	display: none;
}

.uppercase{
	text-transform: uppercase;
}
.project-view,.project-description{
	opacity: 1;
}
/*#wrapper-employe{
	width: 120px;
	height: 150px;
	background-color: black;
	position: fixed;
	left: -60px;
	top: 200px;
	z-index: 200;
	border-top-right-radius: 20px;
	border-bottom-right-radius: 20px;
	border:1px solid white;
	cursor: pointer;
}

#wrapper-employe ul li .employe{
	width: 40px;
	height: auto;
	margin-top: 15px;
}
#wrapper-employe ul {
	float: right;
	margin-right: 10px;

}
*/
	
	/* phone */
	@media only screen and (max-width: 360px)  {
		.project-load-more{
			margin: 0 auto;
   			 width: 130px;
		}
		.upgrade-label-bold,.upgrade-label-nobold,.title-project{
			font-size: 25px;
			text-align: center;
		}
		.upgrade-label-bold  .separator{
			width: 100%;
		}
	
		.section{
			height: auto;
			/*border-bottom: 2px dashed  white;*/
		}
		.choose-project{
			top: 0px;
		}
		.summary,.project-info-btn,.center-user,.project-description,.project-view {
			width: 100%;
		}
		.upgrade{
			width: 100%;
			margin:0px;

		}
		.separator-vertikal{
			display: none;
		}
		.detail-project ul li{
			margin: 0px;
			padding: 0px;
		    display: inline-block;
		}
		.img-invested{
			width: 100px;
		}
		.lbl-invested-detail{
			width: 160px;
		}
		.section{
			margin-top: 50x;
		}
		.number-invested{
			letter-spacing: 0px;
			font-size: 40px;

		}
		.upgrade-label-bold br,.upgrade-label-nobold br{
			display: none;
		}
		.real-calendar{
			width:100%;
			margin-left: 10px;
		}
		.project-list{
			width:100%;
		    border: 1px solid white;
		    position: relative;
		}
		.project-list ul {
		    margin: 0 0 0 0 ;
		}
		#wrapper{
			width: 85vw;
		    /*margin-top: 50px;*/
		}
		.choice-project{
			width: auto;
		}
		#usermenu-timeline{
			right: 20px;
		}
		.detail-project {
		    float: left;
		    width: 85vw;
		}
		.upgrade-btn,.upgrade-new-project-btn{
			    width: 85vw;
			display: inline-block;
		}
		.choice-promo-project{
			width: 130px;
		    height: auto;
		    float: left;
		    margin-left: 5px;
		}
		.project-info{
			width: auto;
			margin-top: 20px;
		}
		.wrapper-total-label p.number {
			font-size: 25px;
		}
		.left-tp{
			margin-left: -20px;
		}
		#blog{
			padding: 0px;
		}
		.wrapper-latest-blog ,.wrapper-rnd,.box-rnd{
			width: 100%!important;
		}
		.wrapper-latest-blog,.go-blog-btn {
			position: relative;
		}

		.box-rnd{
			margin: 0px!important;
		    padding: 20px!important;
		}
		.title-rnd{
			margin-left: 0px;
			margin-right: 0px;

		}
		.wrapper-rnd{
			margin-left: 0px!important;
			padding-left: 0px!important;
		}


	}

</style>
<?php

?>

<div class="container">
<!-- 	<div id="wrapper-employe" class="hvr-buzz-out">
		<ul>
			<li>
				<img title="Invite new Employe" class="employe hvr-grow invite" src="<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/add-employe.ico">
			</li>
			<li>
				<img title="Invite new Employe" class="employe hvr-grow list" src="<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/list-employe.ico">	
			</li>
			<div style="clear:both"></div>
		</ul>
	</div> -->

	<div class="kontener"></div>
	<div id="overlay" >
		<div class="loader">
			 <img class="icon-logo" style="width:120px;height:70px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="Loading" />			 
			 <img class="icon-loader" style="width:40px;height:40px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="Loading" />
		</div>
	</div> 
	<?php 
	$baseurl = Yii::app()->request->baseUrl;
	$id = Yii::app()->user->id;
	if (Yii::app()->user->level()=='3'){		
		$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
	}else{
		$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;

	}
	$sql_timeline = "SELECT pdm.id idviews ,ph.datetime, ph.project_id, 
	pdm.name_file,
	SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
	FROM
	project as p 
	inner join 
	project_comment_head AS ph on p.id = ph.project_id
	INNER JOIN
	project_comment AS pdm
	ON pdm.head_project_id = ph.id
	where 
	p.id_member = '$id_member'

	and
	pdm.status = 1 
	and

	SUBSTRING_INDEX(pdm.name_file,'.',-1) in ('jpg','png','gif','PNG','JPG','GIF')
	";
	$redbox = Yii::app()->db->createCommand()
	->select("p.*,p.id project_id, pcm.phase")
	->from(' project p, project_comment_head pcm')
	->where("p.id = pcm.project_id and STATUS =1 and id_member = '$id_member' ")
	->group("p.id")
	->limit('4')
	->queryAll();
	?>
	<?php //$this->renderPartial('timeline'); ?>
	<?php

	$level = Yii::app()->user->level();
	if ($level==3){
		$this->renderPartial('home',
			array(
				'sql'=>$sql_timeline
			)
		); 
	}

	?>
	<?php $this->renderPartial('calendar',
		array(
			'redbox'=>$redbox,
			'id_member'=>$id_member
		)

	); ?>
	<?php $this->renderPartial('project',
		array(
			'sql'=>$sql_timeline,
			'id_member'=>$id_member,
			'baseurl'=>$baseurl,
			'redbox'=>$redbox
		)
	); ?>
	<?php $this->renderPartial('blog'); ?>
</div>
<?php 
	// $app_key = '06626efc2ad436f73364';
	// $app_secret = 'e434d8ce60e96058f3e8';
	// $app_id = '163881';
	// $pusher = new Pusher($app_key, $app_secret, $app_id);

	// $data['message'] = 'hello world';

	// $pusher->trigger('notifications', 'new_notification', $data);
	// echo "hahahakcuh";
?>
<script>
$(document).ready(function(){	


	// var pusher = new Pusher("06626efc2ad436f73364");
	// //subscribe to our notifications channel
	// var notificationsChannel = pusher.subscribe('notifications');

	// //do something with our new information
	// notificationsChannel.bind('new_notification', function(notification){
	//     // assign the notification's message to a <div></div>
	//     var message = notification.message;
	//     $('div.control_toggle').html(message);
	// });
	// var x = 0 ;
	// var counter = 0;
	// function reloadVariable(){
		// x = $.ajax({
		// 	dataType: "text", 
		// 	url : "<?php echo Yii::app()->createUrl('Notification/getcount') ?>",
		// 	async: false
		// }).responseText;
		// // return x;
		// return x;
	// }
	// function compareVariable(){
	// 	if (x>counter){
	// 		$().toastmessage('showSuccessToast', 'You have '+x+' new Notification ');			
	// 		counter = x;
	// 		alert(x);
	// 		alert(counter);
	// 	}
	// 	// alert('asd');
	// }
	// reloadVariable();
	// setInterval(function(){
	// 	x = $.ajax({
	// 		dataType: "text", 
	// 		url : "<?php echo Yii::app()->createUrl('Notification/getcount') ?>",
	// 		async: false
	// 	}).responseText;

	// 	if (x>counter){
	// 		$().toastmessage('showSuccessToast', 'You have '+x+' new Notification ');			
	// 		counter = x;
	// 	}
	// 	// console.log("get x : "+x);
	// }, 1000);

	// setTimeout(alert("123"), 100);
	// setInterval(function(){
	// 	if (x>counter){
	// 		$().toastmessage('showSuccessToast', 'You have '+x+' new Notification ');			
	// 		counter = x;
	// 		// console.log("post "+x);
	// 		// alert(x);
	// 		// alert(counter);
	// 	}
	// }, 200);

	// }
	$('body').imagesLoaded( function() {
	  	// alert("masuk");
		$('#overlay').fadeOut();
		$('.top-header').addClass('animated fadeInDown');
		$('.section').addClass('animated fadeInLeft');
		$('header').fadeIn();
	});

	// $('#overlay').fadeOut();
	// $('.top-header').hide();
	// $('.loader').addClass('fadeInUp');
	var eventData = [
	    {"date":"2015-12-01","badge":false,"title":"Example 1"},
	    {"date":"2015-12-02","badge":false,"title":"Example 2"}
	];
	$("#my-calendar").zabuto_calendar({
	  data: eventData,
      legend: [
        {type: "text", label: "Special event", badge: "00"},
        {type: "block", label: "Regular event", classname: "purple"},
        {type: "spacer"},
        {type: "text", label: "Bad"},
        {type: "list", list: ["grade-1", "grade-2", "grade-3", "grade-4"]},
        {type: "text", label: "Good"}
      ],
      // ajax: {
      //   url: "show_data.php?grade=1"
      // }
    });
	// $(document).on('mousemove','.project-circle',function(e){
	// 	$(this).find('.project-circle-line').toggleClass('project-circle-line-show');
	// 	// $(this).find('.project-circle-line').fadeIn();
	// });
	location.hash = "home";
	$('.upgrade-label-bold').on('click',function (e) {
		alert(reloadVariable());
	})
	$('.link-menu').on('click',function (e) {
		e.preventDefault();
		$('.link-menu').find('.menu-circle').css("background-color","rgba(204,204,204,1)");
		$(this).find('.menu-circle').css("background-color","rgba(201,0,39,1)");

		var target = this.hash;
		var $target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top+2
		}, 1000, 'swing', function () {
			window.location.hash = target;
		});
	});

	$(document).on("mousemove","#home > *",function(e){
		// alert('home');	
		$('.menu-circle').css("background-color","white");
		$('.link-menu').find('.menu-circle').eq(0).css("background-color","rgba(201,0,39,1)");
	});
	$(document).on("mousemove","#calendar > *",function(e){
		// alert('home');	
		$('.menu-circle').css("background-color","white");
		$('.link-menu').find('.menu-circle').eq(1).css("background-color","rgba(201,0,39,1)");
	});
	$(document).on("mousemove","#project > *",function(e){
		// alert('home');	
		$('.menu-circle').css("background-color","white");
		$('.link-menu').find('.menu-circle').eq(2).css("background-color","rgba(201,0,39,1)");
	});
	$(document).on("mousemove","#blog > *",function(e){
		// alert('home');	
		$('.menu-circle').css("background-color","white");
		$('.link-menu').find('.menu-circle').eq(3).css("background-color","rgba(201,0,39,1)");
	});



	//fungsi time line project views
	
	$('.link-menu').on('click',function (e) {
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top+2
		}, 1000, 'swing', function () {
			window.location.hash = target;
		});
	});
	$(document).on("click",".project-list ul .project",function(e){
		// alert('masuk');
		$('.project-list ul .project').css("color","white");
		$(this).css("color","red");
		var id = $(this).attr("pid");
		$.ajax({
			url : '<?php echo Yii::app()->createUrl('Project/getdetailproject') ?>',
			data : 'id='+id,
			success : function(data){
				// alert(data);
				var data = jQuery.parseJSON(data);
				// alert(JSON.stringify(data));
				// $('.value[column="due_date"]').html(data.);
				$('.value[column="due_date"]').html(data.due_date);
				$('.value[column="latest-upload"]').html(data.latest_upload);
				$('.value[column="budget"]').html(data.budget);
				$('.value[column="number_views"]').html(data.number_views);
				$('.value[column="team"]').html(data.team);
				$('.value[column="status"]').html(data.status);
				// alert(JSON.stringify(data));	
				// $('.project-view').css("background-image","url(<?php echo $baseurl ?>/img/comment/"+data.name_file+")");
				// if (data.alias_name!='')
				// 	$('.project-label').html(data.alias_name);
				// else
				// 	$('.project-label').html(data.name_file);

				// alert(data);
			}
		});


	});



});
</script>
<img src="" id="sky" style="display:none" width="250" alt="Cloudy Sky">
