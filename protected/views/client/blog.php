<style type="text/css">
	.post-blog{
		height: auto;
	}
</style>

<?php 
$data = Yii::app()->db->createCommand()
->select("*")
->from('blog')
->order('datetime desc')
->limit('2')
->queryAll();
?>
<div class="section" id="blog">

	<div class="center-user">
	<div class="wrapper-latest-blog">

		<div class="wrapper-top-blog">
			<div class="blog-title latest-blog">
				LATEST BLOG
				<div class="separator blog-separator "></div>
			</div>
			<div class="go-blog-btn">
				<a style="color:white" href="<?php echo Yii::app()->createUrl('blog/index') ?>">GO TO BLOG PAGE</a>
			</div>
		</div>
		


		<div id="container-post-blog">
			
			<?php	
			foreach ($data as $d):
			?>
			<div  class="post post-blog ">
			<?php 
			$link = $name = str_replace(' ', '-', $d['title']);
			?>
			<a target="_blank"  href="<?php echo Yii::app()->createAbsoluteUrl("blog/view&id=$d[id]");?>">
			<?php 
			$filename =Yii::app()->basePath."/../img/blog/$d[image]";
			// echo $filename;
			//if (file_exists($filename)) {?>
			<!-- <img  class="img-first"  src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $d['image'] ?>"> -->
			<?
			//} else {?>
			<img class="img-first" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg">
			<?php	
			//}	
			?>
			<!-- <img class="img-first" src="<?php echo Yii::app()->request->baseUrl; ?>/img/blog/<?php echo $d['image'] ?>">
			-->
			</a>

			<div class="title"><?php echo $d['title'] ?></div>
			<div class="datetime"><?php echo $d['datetime'] ?></div>
			<div class="description">
			<?php echo substr($d['content'], 0,400) ?>
			<a target="_blank"  class="read-more-feature" href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$d[id]));?>">read more</a>
			</div>
			<!-- <div class="separator"></div> -->
			<div class="social">
			<ul>
			<li>
			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?app_id=417808724973321&sdk=joey&u=http://www.vvfy.land/index.php?r=blog/view&id=<?php echo $d[id] ?>&display=popup&ref=plugin&src=share_button">

			<img class="icon" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/social/fb.PNG">
			</a>	
			</li>
			<li>
			<a target="_blank" href="https://twitter.com/intent/tweet?original_referer=http://www.vvfy.land/index.php?r=blog/view&id=<?php echo $d[id] ?>&text=Share vvfy.me blog&tw_p=tweetbutton&url=http://www.vvfy.land/index.php?r=blog/view&id=<?php echo $d[id] ?>&via=vvfy">
			<img class="icon" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/social/tw.PNG">
			</a>
			</li>
			<li><img style="" class="icon" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/social/in.PNG"></li>
			</ul>
			</div>
			</div>
			<?php endforeach ?>
			
		</div>
<!-- <div style="clear:both"></div> -->

	</div>
	<div class="wrapper-rnd">
		<div class="wrapper-top-blog2">
			<div class="blog-title rnd-label" >
				R & D
				<div  class="rnd-separator separator blog-separator   "></div>
			</div>
		</div>
		<div class="box-rnd" >
			<div class="line-rotate"></div>
			<div class="title-rnd">
				LOREM IPSUM DOLOR IT AMET, CONSECTETUR ADIPISCING
				<div class="readmore-rnd">read more</div>
			</div>
		</div>
		<div class="box-rnd" style="background-image: url(images/1.jpg);">
			<div class="line-rotate"></div>
			<div class="title-rnd">
				LOREM IPSUM DOLOR IT AMET, CONSECTETUR ADIPISCING
				<div class="readmore-rnd">read more</div>
			</div>
		</div>
		<div class="box-rnd" style="background-image: url(images/1.jpg);">
			<div class="line-rotate"></div>
			<div class="title-rnd">
				LOREM IPSUM DOLOR IT AMET, CONSECTETUR ADIPISCING
				<div class="readmore-rnd">read more</div>
			</div>
		</div>
		<div class="box-rnd"  >
			<div class="line-rotate"></div>
			<div class="title-rnd">
				LOREM IPSUM DOLOR IT AMET, CONSECTETUR ADIPISCING
				<div class="readmore-rnd">read more</div>
			</div>
		</div>
	</div>


	<div style="clear:both"></div>

	</div>
<i  style=" color:white;"></i>

</div>