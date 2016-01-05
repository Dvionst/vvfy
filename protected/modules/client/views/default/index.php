<style type="text/css">
	*{
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;

	}
	.container{
		width:950px;
		margin:0 auto; 
	}
	.section{

		height: 100vh; 
		margin-top: 20px;
	}

	#home{
		width:100%;
		background-color: black;
	}
	#calendar{
		width:100%;
		background-color: black;
	}
	#project{
		width:100%;
		background-color: black;
	}
	#blog{
		width:100%;
		background-color: blue;
	}
	.summary{
		color: white;
		width:55%;
		float: left;
		background-color: transparent; 

	}
	.upgrade{
		width: 20%;
		float: left;
		margin-right: 20px;
		margin-left: 20px;
	}
	.img-invested{
		width: 200px;
		height: auto;
		float: left;
	}
	.number-invested{
		color: white;
		letter-spacing: 5px;
		font-size:55px;
		font-weight: bolder; 
		margin-top: 0px;
		margin-bottom: 0px;
	}
	.lbl-invested{
		background-color: transparent;
		border-bottom:5px solid rgba(135,99,51,1) ;
		width: auto;
		/*float: left*/
		letter-spacing: 3px;
		padding-bottom: 30px;
		overflow: visible;
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
		margin-left: 20px;
	}
	.wrapper-total-label p.number{
		font-size: 50px;
		font-weight:bolder; 
		color: white;
		text-align: center;
	    margin: auto 0px;
	}
	.upgrade-label-bold{
		font-weight: 900;
		color: white;
		font-size: 30px;
	}
	.upgrade-label-nobold{
		color: white;
		font-size: 30px;
		margin-top: 10px;
		margin-bottom: 15px;
		
	}
	.upgrade-btn{
		border:1px solid white;
		padding:10px;
		color: white;
		font-size: 12px;
		text-align: center; 
		float: left;
		width: 100%;
	}
	.upgrade-new-project-btn{
		margin-top: 30px;
		text-align: center; 
		font-size: 12px;
		width: 100%;
		padding:10px;
		float: left;
		background-color: rgba(226,151,0,1);
		color: black;
	}
	.choice-project{
		width: 20%;
		float: left;
		color: white;
	}
	.choice-promo-project{
		border:1px solid white;
		padding: 10px;
		width: 100%;
		margin-top: 20px;
		height: 112px;
	}
	.choice-valid{
		color: white;
		font-size: 10px;
	}
	.real-calendar{
		width: 40%;
		background-color: red;
		height: 300px;
	}
	.project-list{
		width: 20%;
		background-color: purple;
	}


</style>
<div class="container"> 
	<?php 
		$this->renderPartial('home');
	?>
<!-- 	<div class="section" id="project">
		
	</div> -->
	
	<div class="section" id="calendar">
		<div class="real-calendar">
			
		</div>
		<div class="project-list">
			<ul>
				<li>ODV</li>
				<li>maitama</li>
				<li>apartement</li>
				<li>hadad alwi</li>
			</ul>
		</div>
		<div class="project-info">
			
		</div>
	</div>
	
	<div class="section" id="blog">
		
	</div>
</div>