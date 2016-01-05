<?php
$this->breadcrumbs=array(
	'Project Views',
);

$this->menu=array(
	array('label'=>'Create ProjectViews', 'url'=>array('create')),
	array('label'=>'Manage ProjectViews', 'url'=>array('admin')),
);
?>

<h1>Project Views</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
