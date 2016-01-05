	<!-- <div id="container-post-blog"> -->
	<?php	
		foreach ($data as $d):
	?>
	<div class="post">
	<div style="display:none"><?php echo $d['category'] ?></div>
	<?php 
		$link = $name = str_replace(' ', '-', $d['title']);
	?>
	<a target="_blank"  href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$d[id]));?>">
				<?php 
				$filename =Yii::app()->basePath."/../img/blog/$d[image]";
				// echo $filename;
				if ((file_exists($filename))&&($d['image']!="")) {?>
					<img  class="img-first"  src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $d['image'] ?>">
				<?
				} else {?>
					<img class="img-first" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg">
				<?php	
					}	
				?>

	</a>

	<div class="title"><?php echo $d['title'] ?></div>
	<div class="title-line"></div>
	<div class="datetime"><?php echo $d['datetime'] ?></div>
	<div class="description">
	<?php echo substr($d['content'], 0,400) ?>
	<a target="_blank"  class="read-more-feature" href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$d[id]));?>">read more</a>
	</div>
	<div class="separator"></div>
	<div class="social">
		<?php
				$this->widget('SocialShareWidget', array(
				    'url' => Yii::app()->createAbsoluteUrl('blog/view',array('id'=>$d['id'])),        //required
				    'services' => array('facebook','twitter','linkedin'),   //optional
				    'htmlOptions' => array('class' => 'icon'), //optional
				    'popup' => true,               //optional
				    'style' => 2,
				));
		?>

	</div>
</div>
<?php endforeach ?>