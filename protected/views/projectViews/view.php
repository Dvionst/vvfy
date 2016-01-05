<?php
$this->breadcrumbs=array(
	'Project Views'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProjectViews', 'url'=>array('index')),
	array('label'=>'Create ProjectViews', 'url'=>array('create')),
	array('label'=>'Update ProjectViews', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProjectViews', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectViews', 'url'=>array('admin')),
);
?>

<h1>View ProjectViews #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_id',
		'view_name',
		'created_date',
	),
)); ?>
