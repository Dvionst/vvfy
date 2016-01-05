<!-- owl carousel -->
<script src="<?php echo Yii::app()->request->baseurl; ?>/js/owlcarousel/owl.carousel.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/owlcarousel/owl.carousel.css">


<style type="text/css">

	#wrapper-appcomment *{
		font-family: 'Open Sans',sans-serif;
	}
	#wrapper-appcomment {
		display: none;
	}
	#wrapper-appcomment .modal-comment{
		width: 400px;
		height: 215px;
		position: fixed;
		top:0; 
		bottom: 0;
		left: 0;
		right:0;
		margin:auto; 
		background-color: white;
		border:5px solid black;
		z-index: 202;
		padding: 10px;
		display: none;
	}
	#wrapper-appcomment .full{
		display: none;
		width: 100vw;
		height: 100vh;
		position: fixed;
		z-index: 201;
		background-color: rgba(1,1,1,0.5);
	}
	#wrapper-appcomment h1{
		color: black;
		font-size: 14px;
	}
	#wrapper-appcomment textarea{
		width: 100%;
		height: 125px;
	}
	#wrapper-appcomment input[type='submit']{
		background-color: rgba(1,1,1,1);
	    color: white;
	    padding:5px 10px 5px 10px;
	    border: none;
	    line-height: 15px;
	    margin-top: 2px;
	}
	.wPaint-menu{
		position: fixed!important;
		top: 200px!important;
	}
	

	/* Let's get this party started */
	#image-editor::-webkit-scrollbar {
	    width: 12px;
	}
	 
	/* Track */
	#image-editor::-webkit-scrollbar-track {
	    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	}
	 
	/* Handle */
	#image-editor::-webkit-scrollbar-thumb {
	    -webkit-border-radius: 10px;
	    border-radius: 10px;
	    background: rgba(255,0,0,0.8); 
	    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}
	#image-editor::-webkit-scrollbar-thumb:window-inactive {
		background: rgba(255,0,0,0.4); 
	}
	#wrapper-appcomment #image-editor {
		border: 0.5px solid white;
	    float: left;
	    background-color: transparent;
	    position: relative;
	    top: 10px;
	    left: 60px;
	    background-size: cover;
	    /*padding: 10px;*/
	    
	    /*overflow: scroll;*/
	}
	#wrapper-appcomment .header {
		background-color: rgba(20,20,20,1);
		width: 100%;
		height: 120px;
	}
	#wrapper-appcomment .project-name{
		/*font-family: 'Open Sans',sans-serif;*/
		font-size: 20px;
		font-weight: 800;
		color: white;
		width: 200px;
		position: relative;
		float: left;
		margin-top: 25px;
		margin-right: 25px;
	}
	#wrapper-appcomment .project-name p{
		text-align: center;
		color: #E5E5E5;
		letter-spacing: 2px;
	}
	#wrapper-appcomment .decision{
		width: 200px;
		height: 100px;	
		float: left;
		margin-left: 30px;
		margin-top: 30px;
	}

	#wrapper-appcomment .decision .btn-dec{
		width: 60px;
		height: 60px;
		float: left;
		background-repeat: no-repeat;
	}
	#wrapper-appcomment .decision .approve{
		background-size: 60px 50px;
		background-image: url('<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/approve.PNG');
	}

	#wrapper-appcomment .decision .reject{
		background-size: 57px 54px;
		background-image: url('<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/reject.PNG');
	}

	#wrapper-appcomment .team-working{
		width: 330px;
	    float: left;
	    padding-left: 20px;
        margin-top: 30px;
	    padding-bottom: 20px;
	    padding-right: 10px;
	    border-left: 1px solid gray;
	    border-right: 1px solid gray;
        margin-left: 30px;
        position: relative;
	}
	#wrapper-appcomment .list-views {
	    width: 440px;
	    float: left;
	    overflow-y: hidden;
	    height: 50px;
	    padding-left: 30px;
	    padding-right: 30px;
	    position: relative;
	    margin-left: 30px;
	    /* margin-right: 10px; */
	    margin-top: 30px;
	    background-color: transparent;
    border-right: 1px solid gray;
	}
	#wrapper-appcomment .content-right .list-icon{
		width: 50px;
		height: auto;
		position: absolute;
		left: -100px;
	}
	#wrapper-appcomment .content-right .list-icon ul li{
		list-style: none;
	}
	#wrapper-appcomment .content-right .list-icon .icon{
		width: 45px;
		height: auto;
	}
	#wrapper-appcomment .list-views .items{
		width: 100px;
		height: 50px;
		overflow: hidden;
		float: left;
		margin-left: 15px;
	}
	#wrapper-appcomment .wrapper-listviews .nav-left{
		background-image: url('<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/left-btn-calendar.PNG');
		left: 30px;
	}
	#wrapper-appcomment .wrapper-listviews .nav-right{
		background-image: url('<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/right-btn-calendar.PNG');
		right: -19px;

	}
	#wrapper-appcomment .wrapper-listviews .nav{
		top: 45px;
		width: 20px;
		position: absolute;
		height: 20px;
		z-index: 201;
		background-size: 100% 100%;
		background-position: center center;
	}


	#wrapper-appcomment .list-views .items img{
		width: 100%;
	}
	#wrapper-appcomment .team-working .row{
		/*width: 200px;*/
		float: left;
		letter-spacing: 2px;
	}
	#wrapper-appcomment .team-working .pemisah{
		width: 10px;
		float: left;
		margin: 0 20px; 
	}
	#wrapper-appcomment .team-working .label{
		width: 125px;
	}
	#wrapper-appcomment .team-working .btn-editteam{
		width: auto;
		height: 25px;
		line-height: 10px;
		border: 1px solid #AF1B23;
		position: absolute;
		right: 20px;
		bottom: -20px;
		color: #AF1B23;
		font-size: 10px;
		padding-right: 15px;
		padding-left: 15px;
		padding-top: 5px;
		padding-bottom: 5px;
		cursor: pointer;
	}
	#wrapper-appcomment .team-working .btn-editteam:hover{
		background: white!important;
	}
	#wrapper-appcomment .team-working .pemisah,#wrapper-appcomment .team-working .label,#wrapper-appcomment .team-working .value{
		float: left;
		color: white;
		font-size: 12px;
	}

	#wrapper-appcomment .content-right::-webkit-scrollbar  {
		/*background-color: rgba(226,151,0,1)!important;	*/
	}
	#wrapper-appcomment .content-right {
		overflow-y:scroll; 
		background-color: rgba(26,26,26,1);
		width: 300px;
		position: relative;
		float: right;
		height: 100vh;
		padding-left: 15px;
		padding-left: 10px;
		font-family: 'Open Sans',sans-serif;
	}
	#wrapper-appcomment .content-right .box-comment {
		height: auto;
		background-color: transparent;
		color: #999999;
		font-weight: 100;
		margin-top: 20px;
	}
	.header-box{
		position: relative;
	}
	.header-box .wrapper-user{
		height: 50px;
		overflow:hidden;
		float: left;

	}
	.header-box .user{
		margin-left: 10px;
		width: 50px;
		height: auto;
		float: left;
	}

	.header-box .name{
		width: 200px;
		height: auto;
		font-size: 20px;
		float: left;
		margin-left: 10px;
		letter-spacing: 1px;
	}

	.header-box .date{
		margin-left: 10px;
		width: 200px;
		height: auto;
		float: left;
		font-style: italic;
		font-size:12px; 
	}

	.box-comment .content{
		color: #999999;
		margin-top:10px;
		line-height: 25px; 
	}
	.content-right .separator-horizontal{
		width: 120px;
		height: 3px;
		background-color: #303030;
		margin-top: 20px;
		float: right;
	}
	#appcomment-fullscreen{
		position: absolute;
		width: 100vw;
		height: 100vh;
		z-index: 205;
		display: none;
		background-color: black;
	}
	#appcomment-conversation{
		position: absolute;
		width: 100vw;
		height: 100vh;
		z-index: 204;
		display: none;
		background-color: black;
	}
	#appcomment-close{
		position: absolute;
		top: 10px;
		right: 10px;
	}
	#appcomment-close img{
		width: 20px;
		height: 20px;
		cursor: pointer;
	}
	#appcomment-fullscreen img{
		position: absolute;
		top: 0px;	
		left: 0px;	
		right: 0px;	
		bottom: 0px;	
		margin:auto;
	}
	.del-comment{
		position: absolute;
	    right: 10px;
	    top: 0px;
	}
	.del-comment img{
		width: 10px;
		height: auto;
		cursor: pointer;
	}
	#list-views .item{
	  margin: 3px;
	}
	#list-views .item img{
	  display: block;
	  width: 100%;
	  height: auto;
	}
	.wrapper-listviews{
		position: relative;
		width: 450px;
		float: left;
	}
	#list-views .item{
		cursor: pointer;
	}
	#list-views .item  img  {
		transition: border-radius 1s;
		-moz-transition: border-radius 1s;
		-webkit-transition: border-radius 1s;
	}
	#list-views .item:hover > img  {
		cursor: pointer;
		border-radius: 50%;
		-moz-border-radius: 50%;
		-webkit-border-radius: 50%;
	}
	
</style>

	 

	<div id="appcomment-fullscreen">
		<h3 style="color:white">Please don't close this page</h3>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/ajax-loader.gif">
	</div>

	<div id="appcomment-close">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png">		
	</div>
	<div id="appcomment-conversation">
		<?php 
		$this->renderPartial("conversation")
		?>
	</div>

	<div class="header">
		<div class="project-name">
			<p>PROJECTS NAME</p>
		</div>
		<div class="team-working">
			<div class="row name" >
				<div style="color:#CD9423" class="label">PROJECT NAME</div>
				<div class="pemisah">:</div>
				<div style="color:#CD9423" class="value"></div>
			</div>
			<div class="row phase">
				<div style="color:#A1A1A1" class="label">PHASE</div>
				<div class="pemisah">:</div>
				<div style="color:#A1A1A1" class="value">MARK FOE</div>
			</div>
			<div class="btn-editteam">
				SEE CONVERSATION THIS VIEWS
			</div>
		</div>

		<div class="wrapper-listviews"></div>

		<div class="decision">
			<div class="btn-dec approve"></div>
			<div class="btn-dec reject"></div>
		</div>

	<div class="content-right">
		<div class="list-icon">
			<ul>
				<li><img class="icon"  src="<?php echo Yii::app()->request->baseUrl ?>/img/baru/user/icon-print.PNG"></li>
				<li><img class="icon"  src="<?php echo Yii::app()->request->baseUrl ?>/img/baru/user/icon-download.PNG"></li>
				<li style="margin-top:30px;"><img class="icon"  src="<?php echo Yii::app()->request->baseUrl ?>/img/baru/user/red-fb.PNG"></li>
				<li><img class="icon"  src="<?php echo Yii::app()->request->baseUrl ?>/img/baru/user/red-tw.PNG"></li>
				<li><img class="icon"  src="<?php echo Yii::app()->request->baseUrl ?>/img/baru/user/red-ins.PNG"></li>
			</ul>
		</div>

		<div class="title uppercase">
			COMMENT
		</div>

	<!--  	<div class="box-comment">
			<div class="header-box">
				<div class="wrapper-user">
					<img class="user" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon-team/arif-new.png">
				</div>
				<div class="del-comment">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png">	
				</div>
				<div class="name">ABU ABDI</div>
				<div class="date">08-08-2015</div>
				<div style="clear:left"></div>
			</div>
			<div class="content">
				halo nama sayan adalasdas asd asd sadf asdf asdf  wallohu
				halo nama sayan adalasdas asd asd sadf asdf asdf  wallohusadf asdf asdf  wallohu
			</div>
			<div class="separator-horizontal"> </div>
		</div> 
 -->
	</div>
<!-- 	<canvas style="background-image: url('<?php echo Yii::app()->request->baseUrl ; ?>/images/1.jpg');" id="image-editor">
		
	</canvas> -->
		<center>
			<div id="image-editor">
				<img class="handle" style="width:20px;height:auto;position:absolute;right:-30px;" src="<?php echo Yii::app()->request->baseUrl ; ?>/img/baru/user/drag.png">
					<div style="clear:both"></div>
					<div id="wPaint" style="
						width:100%; 
						height:100%; 
						position:relative;
						margin:0px auto 0px auto;
						background-color:#7a7a7a; 
					">
					</div>
			</div>
		</center>
</div>
<style type="text/css">
	.content-right .title{
		font-size: 20px;
		margin-top: 15px;
		color: #999999;
		border-bottom: 1px solid #999999;
		padding-bottom: 20px;
	}

</style>
