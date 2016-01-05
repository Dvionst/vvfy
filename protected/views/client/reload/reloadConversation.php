<div class="conv-loader"></div>
<?php 
$sql = "SELECT tanggal, nama, description, original

FROM 


(SELECT 
pch.datetime tanggal,
pc.name_file nama,
pch.description description,
pc.name_file original
FROM
project p
INNER JOIN
project_comment_head pch
ON 
p.id = pch.project_id
INNER JOIN
project_comment pc
ON
pc.head_project_id =  pch.id
WHERE
pc.project_views_id =$id

) table1

UNION


(
SELECT 
mch.comment_date tanggal ,
CONCAT(mch.id,'.png') nama,
mch.description description,
pc.name_file original
FROM
project_comment pc
INNER JOIN
member_comment_head mch
ON
mch.project_comment_id = pc.id

WHERE pc.project_views_id = $id

)

ORDER BY tanggal ASC
";
// echo $sql;
$model = Yii::app()->db->createCommand($sql)->queryAll();
// echo "<pre>";
// print_r($model);
// echo "</pre>";
$sql_header = "SELECT 

p.project_name project_name,
pv.view_name view_name 

FROM 
project p
INNER JOIN
project_views pv
ON
p.id = pv.project_id

WHERE 
pv.id = '$id'";
$mh = Yii::app()->db->createCommand($sql_header)->queryRow();
?>
	<div class="header">
		<div class="headvalue name">
			PROJECT NAME : <?php echo $mh['project_name']   ?>
		</div>

		<div class="headvalue viewname">
			VIEW NAME :&nbsp;&nbsp;&nbsp; <?php echo $mh['view_name']   ?>
		</div>
		<img class="close-conv" style="cursor:pointer;float:right;width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png">		
		<div style="clear:both"></div>
	</div>
	<div id="main-conversation">

		<?php
		 $no = 1;
		 foreach ($model as $m): ?>
			<?php
			 if ($no==1)
				$first = $m[nama];

			 ?>
			<div class="wrapper-imagechat">
				<div

				<?php 
					// echo $model[description]; 
					if (trim($m['description'])=='p'){
						$name = "VVFY";
						$style = "style='float:left';";
						$url = Yii::app()->basePath."/../img/comment/$m[nama]";
						if (file_exists($url)) {
							$url = Yii::app()->request->baseUrl."/img/comment/$m[nama]";
						}else{
							$url = Yii::app()->request->baseUrl."/img/comment/notfound.jpg";
						}
						echo "style='float:right;'";
					}
					else if (trim($m['description'])=='c'){
						$name = "You";
						$style = "style='float:right;'";
						$url = Yii::app()->basePath."/../img/revisi/$m[nama]";
						if (file_exists($url)) {
							$url = Yii::app()->request->baseUrl."/img/revisi/$m[nama]";
						}else{
							$url = Yii::app()->request->baseUrl."/img/baru/user/notfound.jpg";
						}
						echo "style='float:left;";
					}
					
					// if ($m[''])				
					echo "background-size:cover'";
					?>
				  class="image-chat">		
<!-- images -->
					<img
				   <?php 
				    
						$url2 = Yii::app()->request->baseUrl."/img/comment/$m[original]";
						// $url2 =Yii::app()->basePath."/../img/comment/$d[image]";
						// // echo $filename;
						//if (file_exists($filename)) {
						echo "style='background-image:url($url2);background-size:100% auto'";
					
				   ?>	
				   src="<?php echo $url ?>"

				   >
<!-- end images -->

					<p class="info">
						<?php echo $name."  ";//.date("d M Y, h:i",strtotime($m[tanggal]) ); ?>
					</p>
				</div> 
				<div class="date-send" <?php echo $style ?> >
					<img style="width: 100px;
							    height: auto;
							    position: relative;
							    top: 35px;"
     src="<?php echo Yii::app()->request->baseUrl ?>/img/baru/user/date.png">
					<?php 
					echo date("d M Y, h:i",strtotime($m[tanggal]) );
					?>
				</div>
			</div>
		<?php
		$no++;
		 endforeach; ?>
		<div style="clear:both"></div>
	</div>

	<?php
// echo $url;
	 ?>