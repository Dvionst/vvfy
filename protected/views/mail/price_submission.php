<html>
	<head>
	</head>
	<body>
		
		<table style="width:100%;background:black;font-family:arial;color:white;padding:30px;" >
			<tr>
				<td><img src="http://vvfy.me/img/gambar.png"></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td style="padding:20px">
					<p style="color:white !important">
					Thanks for submiting your data :)<br><br>

					<?php 
						$pt=ProjectType::model()->findByPk($data->project_type)->name;
						$reference = $data->reference == 1 ? "Conceptual Renders" : $data->reference == 2 ? "Realistic Renders" : "Highest Quality Renders"; 
						$deadline = $data->deadline;
						$style = $data->project_style == 1 ? "Modern" : "Classic";
						$productType = ProductType::model()->findByPk($data->product_type)->name;
					?>

					Project type : <?php echo $pt; ?><br>
					<?php if($data->project_type==1){ ?>
						Views count : <?php echo $data->views_count; ?><br>
						Style of project : <?php echo $style ?><br>
						Deadline : <?Php echo $deadline; ?><br>
						Reference : <?Php echo $reference; ?><br>
					<?php }else if($data->project_type==2){ ?>
						Interior Areas : <?php echo $data->interior_areas; ?><br>
						Style of project : <?php echo $style ?><br>
						Deadline : <?Php echo $deadline; ?><br>
						Reference : <?Php echo $reference; ?><br>
					<?php }else if($data->project_type==3){ ?>
						Views count : <?php echo $data->views_count; ?><br>
						Interior Areas : <?php echo $data->interior_areas; ?><br>
						Style of project : <?php echo $style ?><br>
						Deadline : <?Php echo $deadline; ?><br>
						Reference : <?Php echo $reference; ?><br>
					<?php }else if($data->project_type==4){ ?>
						Product Type : <?Php echo $productType; ?><br>
						Number of views : <?php echo $data->number_views; ?><br>
						Deadline : <?Php echo $deadline; ?><br>
						Reference : <?Php echo $reference; ?><br>
					<?php } ?>

					<?php if(!$detail==""){ ?>
					<br>
					<b>Area Information</b>
					<table border="1">
							<tr>
								<td>Area</td>
								<td>Type</td>
								<td>Size</td>
							</tr>
							<?php
								$i=1;
								foreach ($detail as $det) {
									echo "<tr>";
									echo "<td>Area ".$i."</td><td>".AreaType::model()->findByPk($det->area_type)->name."</td><td>".$det->area_size."</td>";
									echo "</tr>";
									$i+=1;
								}	
							?>
					</table>
					<?php } ?>
					</p>
				</td>
			</tr>
			<tr >
				<td style="padding:10px 0 0 20px;color:white  !important;">
					Thanks in advance for giving vvfy a try ! 
					<br>Find out more at <a style="color:white" href="http://vvfy.me">http://vvfy.me</a> or on twitter @vvfy
  				</td>
			</tr>
			
		</table>
	</body>
</html>