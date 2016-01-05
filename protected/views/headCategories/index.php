<?php
$this->breadcrumbs=array(
	'Head Categories',
);

$this->menu=array(
	array('label'=>'Create HeadCategories', 'url'=>array('create')),
	array('label'=>'Manage HeadCategories', 'url'=>array('admin')),
);
?>

<h1>Head Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
