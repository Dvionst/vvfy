<?php
$this->breadcrumbs=array(
	'Categories Mains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoriesMain', 'url'=>array('index')),
	array('label'=>'Manage CategoriesMain', 'url'=>array('admin')),
);
?>

<h1>Create CategoriesMain</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>