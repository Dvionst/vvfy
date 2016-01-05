<?php
$this->breadcrumbs=array(
	'Head Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List HeadCategories', 'url'=>array('index')),
	array('label'=>'Create HeadCategories', 'url'=>array('create')),
	array('label'=>'Update HeadCategories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HeadCategories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HeadCategories', 'url'=>array('admin')),
);
?>

<h1>View HeadCategories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_mc',
		'name',
		'id_name',
		'category',
	),
)); ?>
