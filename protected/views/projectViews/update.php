<?php
$this->breadcrumbs=array(
	'Project Views'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectViews', 'url'=>array('index')),
	array('label'=>'Create ProjectViews', 'url'=>array('create')),
	array('label'=>'View ProjectViews', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectViews', 'url'=>array('admin')),
);
?>

<h1>Update ProjectViews <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>