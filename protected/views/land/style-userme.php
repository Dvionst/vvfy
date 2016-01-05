<style>
.wPaint-menu-icon-name-text{
	display: none!important;
 }
.wPaint-menu-icon-name-drag div{
	background-image: url('../img/drag.png')!important;
	background-size: 18px 19px;
}
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
top:520px;
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
display: none!important;
transition: left 500ms;
}
#tools-brush:hover{
left:0px;

}
#tools-brush a{
color: black;	
}
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
background: url(<?php echo Yii::app()->request->baseUrl; ?>/img/diamond_sprite.png) no-repeat -60px -20px;
}
.control_toggle, .hide_header {
width: 54px;
height: 50px;
display: block;
background: url(<?php echo Yii::app()->request->baseUrl; ?>/img/diamond_sprite.png) no-repeat -173px -20px;
/* background: url(.<?php echo Yii::app()->request->baseUrl; ?>/js/paint/img/diamond_sprite.png) no-repeat -60px -20px; */
position: fixed;
/* left: 300px; */
left: 30px;
bottom: 46px;
z-index: 100;
top: 30px;
transition: opacity 250ms, left 300ms, bottom 300ms;
}
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
    background: url('.<?php echo Yii::app()->request->baseUrl; ?>/js/paint/img/arrow-left-white.png');
    height: 50px;
    background-size: 100% 100%;
}
li.bjqs-next a{
    content: ""!important;
    width: 35px;
    background: url('.<?php echo Yii::app()->request->baseUrl; ?>/js/paint/img/arrow-right-white.png');
    height: 50px;
    background-size: 100% 100%;
}
.swipebox img{
	zoom: 150%;
}
.invisible{
	display: block!important;
}


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
height: 300px;
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
text-transform: uppercase!important;
}
.upload{
text-transform: uppercase!important;
display: inline;
font-size: 30px;
color:white;
margin-left: 28px;
font-weight: bolder;

}
.wPaint-menu-icon-name-rectangle,
.wPaint-menu-icon-name-bucket,
.wPaint-menu-icon-name-ellipse,
.wPaint-menu-icon-name-loadBg,
.wPaint-menu-icon-name-save,
.wPaint-menu-handle
{
display: none!important;
}
.wPaint-menu{

}
.wPaint-menu-holder
{
margin: auto!important;
top: -10px!important; 
left: 0!important;
bottom: 0!important;
right: 0!important;
width: 450px!important;
height:40px;
margin-left: 28px!important;
padding-left:10px!important;
}

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
	#wPaint{
		width: 100%;
	}
	.wPaint-menu-icon{
		float: left;
	}
	#cekaja{
		width:100px;
		height:100px;
		background-color: red;
	}
</style>