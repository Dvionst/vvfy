
<style>
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
</style>

		<div  id="wrapper-dashboard-first" >
		<div id="redbox" style="">
				<div id="sp" style="
				background:transparent;
				border:0;
				box-shadow: 0px 2px 42px -6px #FFF;
				webkit-box-shadow: 0px 2px 42px -6px #FFF;
				">
					<img  style="width:50px;position:relative;top:140px" class="loader" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" >
				</div>

		</div>
 		<?php if (1==1): ?>
  		<H1
			style="
			position: absolute;
			bottom: -400px;
			text-align: center;
			color:gray;
			font-weight:bold;
			margin-left:30px;
			"
			>STRATEGY AND OPERATIONS</H1>
		<?php endif; ?>
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

	<!-- <h1 id="title-H1">LOGS</h1> -->
<?php
$user = Yii::app()->user->id;
$sql = "
SELECT 
p.alias name , START, END, ROUND(SUM(TIME_TO_SEC(TIMEDIFF(END, START))/60),2) AS minute
FROM 
page p LEFT JOIN logs l ON  p.id = l.page_id and l.user_id = '$user'
GROUP BY p.id
";
$data = Yii::app()->db->createCommand($sql)->queryAll();
// print_r($data);
$name = "";
$value = "";
foreach ($data as $key) {
	$name .= "'$key[name]'".",";
	$value .= "'$key[minute]'".",";
}
// echo $value;
?>
	<div id="wrapper-log" >
<!-- 	<form name="form-search-log">
		<input type="hidden" name="r"  value="land/dashboard">
		<input type="date" value="<?php echo $_REQUEST['search'] ?>" name="search">
		<input type="submit" value="search">
	</form> -->
		<h1 id="title-h1" style="top:0px;">
			Visited by <b><?php echo Yii::app()->user->id ?></b> (minute)
		</h1>
		<!-- <h1 id="title-ap">PERMISSION</h1> -->
	
		<canvas id="chart-log"  width="auto"></canvas>
	</div>
	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [<?php echo $name; ?>],
		datasets : [
			// {
			// 	fillColor : "rgba(220,220,220,0.5)",
			// 	strokeColor : "rgba(220,220,220,0.8)",
			// 	highlightFill: "rgba(220,220,220,0.75)",
			// 	highlightStroke: "rgba(220,220,220,1)",
			// 	data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			// }
			// ,
			{
				// fillColor : "rgba(151,187,205,0.5)",
				fillColor : "rgba(237,28,36,1)",
				strokeColor : "rgba(151,187,205,0.8)",
				// highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				// data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				data : [<?php echo $value; ?>]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("chart-log").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true,
			tooltipFontSize: 14,

		    // String - Tooltip font weight style
		    tooltipFontStyle: "normal",

		    // String - Tooltip label font colour
		    tooltipFontColor: "#fff",

		    // String - Tooltip title font declaration for the scale label
		    tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",

		    // Number - Tooltip title font size in pixels
		    tooltipTitleFontSize: 14,

		    // String - Tooltip title font weight style
		    tooltipTitleFontStyle: "bold",

		    // String - Tooltip title font colour
		    tooltipTitleFontColor: "#fff",

		});
	}

	</script>
</div>
