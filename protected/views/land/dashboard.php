<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/js/select2/dist/css/select2.min.css">
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/select2/dist/js/select2.min.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/toast/src/main/javascript/jquery.toastmessage.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/js/toast/src/main/resources/css/jquery.toastmessage.css" />
<!-- <select multiple=""> -->
<?php
// for($a=1;$a<=10;$a++):
	?>
	<!-- <option value="<?php echo $a ?>">haha</option> -->
<?php
// endfor;
 ?>
	<!-- <option value="2">hihi</option> -->
<!-- </select> -->

<style>
#wrapper-redbox{
    overflow-y: auto;
    width: 95%;
    height: 150px;
}
.dash-non-editabble-project,dash-non-editabble-date{
	display:block;
}
.dash-editabble-project,.dash-editabble-date{
	display:none;
}
#edit-team:hover{
	color:black;
}
.option{background:red;}
#sp{ /* status page*/
background:rgba(237,28,36,1);
margin-left:30px;
position:relative;
width:60%;
float:left;
height:310px;
color:white;
font-weight:bold;
text-align:center;
-webkit-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
-moz-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
}
#term table{font-weight:bold;width:100%}
#term table tr td{font-size:20px;}
#term{
font-weight:bold;
margin-top:60px;
margin-left:30px;
position:relative;
width:95%;
float:left;
height:300px;
color:white;
font-weight:bold;
text-align:center;
-webkit-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
-moz-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
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
-webkit-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
-moz-box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);
box-shadow: 0px 1px 30px 4px rgba(168,168,168,1);

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
-webkit-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
-moz-box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
box-shadow: 0px 2px 42px -6px rgba(140,115,140,1);
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
bottom:20px;
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
.select2-container--default .select2-selection--multiple .select2-selection__choice {
     background-color: white!important; 
    border: 1px solid #aaa;
    border-radius: 4px;
    color: black;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
}
.select2-container--default .select2-selection--multiple {
    background-color: transparent;
    border: 0px solid #aaa;
    border-radius: 4px;
    cursor: text;
    /*border: */
}
.select2-container{
	width: 60%!important;
}
</style>

		<div  id="wrapper-dashboard-first" >
			<div id="redbox" style="">
				<div id="sp">
					<img  style="width:50px;position:relative;top:140px" class="loader" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" >
				</div>
			</div>
 		<?php// if (User::model()->findByPk(Yii::app()->user->id)->level==1): ?>
  		<!-- <H1
			style="
			position: absolute;
			bottom: -400px;
			text-align: center;
			color:gray;
			font-weight:bold;
			margin-left:30px;
			"
			>STRATEGY AND OPERATIONS</H1> -->
		<?php //endif; ?>
		<div id="cp">
			<table cellpadding="10">
				<thead><tr><td>PROJECT</td><td align="">DUE</td></tr ></thead>
				<tbody>
					<?php 
					$black = Yii::app()->db->createCommand()
					->select("*")
					->from('project')
					->where("STATUS =1")
					->limit('3')
					->queryAll();
					foreach($black as $b):
					?>
					<tr><td><?php echo $b['project_name'];?></td><td><?php echo $b['due_date'];?></td></tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn view-calendar"><a href="<?php echo Yii::app()->createAbsoluteUrl('land/project'); ?>">VIEW CALENDAR</a></div>
		</div>
		<div id="term" 	<?php if (User::model()->findByPk(Yii::app()->user->id)->level==1){echo "style='margin-top:100px'";} ?> >
			<div class="left" style="width:50%;padding:100px;padding-left:30px;box-sizing:border-box;background:transparent;">
				<table cellpadding="10">
					<tbody>
						<style>
							.head-tr{
							position:absolute;
							top:30px;
							}
						</style>
						<tr class="head-tr" ><td>LONG TERM PLANS<br></td><td style="color:red"></td></tr>
						<tr><td>100.000 $ 2016</td><td style="color:red;text-align:right"><a  style="color:red;" href="<?php echo Yii::app()->createAbsoluteUrl('land/index'); ?>">READ MORE</a></td></tr>
						<tr><td>1 MAN PLAN</td><td style="color:red;text-align:right"><a style="color:red;" href="<?php echo Yii::app()->createAbsoluteUrl('land/index'); ?>">READ MORE</a></td></tr>
					</tbody>
				</table>		
			</div>
			<div class="separator">&nbsp;</div>
			<div class="right"  style="width:50%;padding:100px;padding-left:5px;box-sizing:border-box;background:transparent;">
				<table cellpadding="10">
					<tbody>
						<tr class="head-tr"><td>SHORT TERM PLANS<br></td><td ></td><td></td></tr>
						<tr><td>DJA RENDERINGS</td><td style="color:red" >PROGRESS</td><td style="color:red;text-align:right" >DUE</td></tr>
						<tr><td>DJA RENDERINGS</td><td  style="color:red">PROGRESS</td><td style="color:red;text-align:right" >DUE</td></tr>
					</tbody>
				</table>		
			</div>
		</div>
<?php 
$id = Yii::app()->user->id;
$id_permission = MasterPermission::model()->find("actionID = 'permission' and controllerID='land' ")->id;
$jml = count(Permission::model()->find("username = '$id' and permission_id = '$id_permission'  "));	
 
?>
<div <?php if ($jml>=1) echo "style='display:block'"; else echo "style='display:none'"; ?>>
	<h1 id="title-ap">PERMISSION</h1>
	

	<div id="ap" >
		<h1 style="border-bottom:2px thick black;letter-spacing:4px">
		Configuration
		</h1>
		<div id="">
			<table  cellpadding="15" style="margin-top:-80px">
			<tr >
			<td style="width:100px;">User : </td>
			<td>
			<style type="text/css">
			.loader-my-account{
			display: none;
			}
			</style>
			<img  style="width:50px;position:absolute;top:140px;left:45%" class="loader-my-account" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" >
			<select id="dash-permission-user" style="padding:5px">
			<option value="" >Choose user</option>
			<?php 
			foreach (User::model()->findAll("t.status!='master' and (level = 1 or level = 2) ") as $d):
			// foreach (User::model()->findAll(" (level = 1 or level = 2) ") as $d):
			 ?>
			<option value="<?php echo $d->username ?>" ><?php echo $d->username ?></option>
			<?php endforeach; ?>
			</select>
			</td>
			</tr>
			<tr id="list-rule">
			</tr>
			</table>
		</div>	
	</div>
</div>




<?php
// $this->renderPartial('log');
 ?>

</div>
