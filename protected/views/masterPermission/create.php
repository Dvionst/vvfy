<?php
$this->breadcrumbs=array(
	'Master Permissions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MasterPermission', 'url'=>array('index')),
	array('label'=>'Manage MasterPermission', 'url'=>array('admin')),
);
?>

<h1>Create MasterPermission</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>