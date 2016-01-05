<?php
$this->breadcrumbs=array(
	'Categories Mains',
);

$this->menu=array(
	array('label'=>'Create CategoriesMain', 'url'=>array('create')),
	array('label'=>'Manage CategoriesMain', 'url'=>array('admin')),
);
?>

<h1>Categories Mains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
