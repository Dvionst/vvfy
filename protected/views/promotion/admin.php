<?php
$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create Promotion', 'url'=>array('create')),
);

?>

<h1>Manage Promotions <a href="<?php echo Yii::app()->controller->createUrl("create"); ?>"><i class="fa fa-plus"></i></a></h1>
<?php 
// $this->renderPartial("menu");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'promotion-grid',
	'dataProvider'=>$model,
	'filter'=>$filtersForm,
	'columns'=>array(
		'id',
		'name',
		array(
		   'name'=>'valid_date',
		   'header'=>'Valid Date',
		),
		// 'status',
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
