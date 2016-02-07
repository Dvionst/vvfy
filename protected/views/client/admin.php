<?php
$this->breadcrumbs=array(
	'Teams'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Team', 'url'=>array('index')),
	array('label'=>'Create Team', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('team-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Client 
<!-- <a href="<?php echo Yii::app()->controller->createUrl("create"); ?>"><i class="fa fa-plus"></i></a> -->

</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'team-grid',
	'dataProvider'=>$model,
	'filter'=>$filtersForm,
	'columns'=>array(
		array(
			'name'=>'id',
			'filter'=>'',
		),
		// 'id',
		'name',
		'email',
		'phone',
		 array(
            'name'=>'company_name',
            // 'type'=>'html',
            'header'=>'Company name',
            // 'value'=>'(!empty($data[image]))?CHtml::image(Yii::app()->request->baseUrl."/img/team/$data[image]","",array("style"=>"width:100px;height:auto;")):"no image"',
 
        ),
	 	array(
			'name'=>'date_register',
			'header'=>'Date Register',
		),
		array(
			'name'=>'type_account',
			'header'=>'Type Account',
		),
		// 'facebook',
		// 'image',
		/*
		'twitter',
		'linkedin',
		'position',
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
