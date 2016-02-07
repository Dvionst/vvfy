<style type="text/css">
	.project-view .box{
		width: 114px;
		height: 160px;	
		background-color: transparent;
		float: left;
		margin-left: 10px;
		overflow: hidden;
		padding: 0px;

	}
	.project-view .box img{
		width: 100%;
	}
	.loader-pv{
		position: relative;
		top: 40%;
		left: 40%;
		display: none;
	}
</style>
<!-- <i class="fa fa-spinner fa-5x fa-spin loader-pv" style='color:white'></i> -->

<?php 
if (count($model)!=0){
	foreach ($model as $m ) { ?>
		<a class="swipebox" href="<?php echo Yii::app()->baseUrl; ?>/img/comment/<?php echo $m[name_file] ?>">
			<div class="box" style="background-image:url('<?php echo Yii::app()->baseUrl; ?>/img/comment/<?php echo $m[name_file] ?>');background-size:cover;background-position: center center;">
					<!-- <img src="<?php echo Yii::app()->baseUrl; ?>/img/comment/<?php echo $m[name_file] ?>"> -->
			</div>
		</a>
	<?php }
}else{
?>
	<h1 style="color:white;text-align:center">Nothing Views</h1>
<?php
} ?>
