<?php
$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Blog', 'url'=>array('index')),
	array('label'=>'Create Blog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('blog-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Blogs <a href="<?php echo Yii::app()->controller->createUrl("baru"); ?>"><i class="fa fa-plus"></i></a></h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'blog-grid',
	'dataProvider'=>$model,
	'filter'=>$filtersForm,
	'columns'=>array(
		'id',
		'title',
		// array(
		// 	'name'=>'content',
		// 	'header'=>'content'
		// 	,
		// 	'type'=>'html',
		// ),
		array(
			'name'=>'datetime',
			'header'=>'Date Publish',
			// 'type'=>'',
		),
		array (
			'name'=>'username',
			'header'=>'Author',
		),
		// 'datetime',
		// 'username',
		// 'image',
		/*
		'category',
		'tags',s
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}{view}',
			'buttons' => array(
				'update' => array(
					'url'=>'Yii::app()->controller->createUrl("update", array("id"=>$data[id]))',      //A PHP expression for generating the URL of the button.
				),
				'delete' => array(
					'url'=>'Yii::app()->controller->createUrl("delete", array("id"=>$data[id]))',      //A PHP expression for generating the URL of the button.
				),
				'view' => array(
					'url'=>'Yii::app()->controller->createUrl("view", array("id"=>$data[id]))',      //A PHP expression for generating the URL of the button.
				),
			),	
		),
	),
)); ?>
