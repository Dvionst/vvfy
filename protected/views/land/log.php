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