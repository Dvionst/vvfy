<?php
$this->breadcrumbs=array(
	'Master Permissions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MasterPermission', 'url'=>array('index')),
	array('label'=>'Create MasterPermission', 'url'=>array('create')),
	array('label'=>'View MasterPermission', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MasterPermission', 'url'=>array('admin')),
);
?>

<h1>Update MasterPermission <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>