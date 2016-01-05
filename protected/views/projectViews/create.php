<?php
$this->breadcrumbs=array(
	'Project Views'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectViews', 'url'=>array('index')),
	array('label'=>'Manage ProjectViews', 'url'=>array('admin')),
);
?>

<h1>Create ProjectViews</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>