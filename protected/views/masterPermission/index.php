<?php
$this->breadcrumbs=array(
	'Master Permissions',
);

$this->menu=array(
	array('label'=>'Create MasterPermission', 'url'=>array('create')),
	array('label'=>'Manage MasterPermission', 'url'=>array('admin')),
);
?>

<h1>Master Permissions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
