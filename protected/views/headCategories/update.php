<?php
$this->breadcrumbs=array(
	'Head Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HeadCategories', 'url'=>array('index')),
	array('label'=>'Create HeadCategories', 'url'=>array('create')),
	array('label'=>'View HeadCategories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HeadCategories', 'url'=>array('admin')),
);
?>

<h1>Update HeadCategories <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>