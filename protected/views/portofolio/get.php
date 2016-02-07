	<?php  
	foreach ($data as $fd){	
		if($idLoaded==""){
			$idLoaded=$fd['id'];
		}else{$idLoaded=",".$fd['id'];}
	?>

	<?php 
	if ($fd['type']==1){
	$class = "interior";
	}else{
	$class = "architecture";
	}
	?>
	<div class="grid-item alltabs <?php echo $class." ".$fd['order'] ?>  ">
	<a class="swipebox" href="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/big/<?php echo $fd['id'] ?>.jpg" >
	<div class="grid-info">
		<div class="grid-info-text">
	    	<p><?php echo $fd['nama']; ?></p>
		</div>
	</div>
	 <img class="lazy" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/<?php echo $fd['id'] ?>.jpg" />
	</a>
	</div>

	<?php  }  ?>