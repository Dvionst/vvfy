<?php
$this->breadcrumbs=array(
	'Master Permissions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MasterPermission', 'url'=>array('index')),
	array('label'=>'Create MasterPermission', 'url'=>array('create')),
	array('label'=>'Update MasterPermission', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MasterPermission', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterPermission', 'url'=>array('admin')),
);
?>

<h1>View MasterPermission #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'controllerID',
		'actionID',
		'value',
	),
)); ?>
