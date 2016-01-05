
<style type="text/css">
	.date-send{
		color: white;
		font-size: 50px;
		font-family: 'Raleway'!important;
		/*position: absolute;*/
	}
	#wrapper-conversation *{
		box-sizing:border-box;
		font-family: 'Open Sans', sans-serif;
	}
	#wrapper-conversation .conv-loader{
		width: 100vw;
		height: 100vh;
		z-index: 201;
		background-color: black;
		background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif');
	    background-size: 50px auto;
	    background-repeat: no-repeat;
	    background-position: center;

	}
	#wrapper-conversation{
		width: 1200px;
		height: auto;
		background-color: black;
		margin:0 auto;
		position: relative;
		/*paddin*/
	}
	#wrapper-conversation .header{
		width: 100%;
		height: 70px;
		background-color: transparent;
		border-bottom: 2px solid white;
		position: relative;
		padding: 15px;


	}
	
	#wrapper-conversation .header .name{
		color: white;
		font-size: 20px;
		letter-spacing: 2px;
		width: 200px;
		border-right: 1px solid white;
	}
	#wrapper-conversation .header .viewname{
		color: white;
		font-size: 20px;
		letter-spacing: 2px;
		width: 200px;
		border-right: 1px solid white;
		margin-left:20px; 
	}
	#wrapper-conversation .header .headvalue
	{
		float: left;
	}
	#main-conversation{
		
		/*width: 100%;*/
	}
	#main-conversation .wrapper-imagechat{
		width: 100%;
		position: relative;
		float: left;
		border-bottom: 2px solid gray;
		padding-bottom: 20px;
		/*float: */
	}
	#main-conversation .image-chat{
		width: 300px;
		height: auto;
		background-color:transparent;
		border-radius: 10px;
		margin: 20px 20px 0 20px;
		border: 2px solid white;
		overflow: hidden;
		/*position: absolute;*/
	}
	#main-conversation .image-chat img{
		/*margin-left: -100px;*/
		width: 100%;
	}
	#main-conversation{
		overflow-y:scroll; 
		height: 85vh;
		background-color: rgba(26,26,26,1)''
	}
	.info{
		text-align: center;
		color: white; 
	}



</style>
<div id="wrapper-conversation"></div>

