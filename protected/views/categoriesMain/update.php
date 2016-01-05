<?php
$this->breadcrumbs=array(
	'Categories Mains'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoriesMain', 'url'=>array('index')),
	array('label'=>'Create CategoriesMain', 'url'=>array('create')),
	array('label'=>'View CategoriesMain', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CategoriesMain', 'url'=>array('admin')),
);
?>

<h1>Update CategoriesMain <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>