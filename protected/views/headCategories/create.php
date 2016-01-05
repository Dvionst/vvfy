<?php
$this->breadcrumbs=array(
	'Head Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HeadCategories', 'url'=>array('index')),
	array('label'=>'Manage HeadCategories', 'url'=>array('admin')),
);
?>

<h1>Create HeadCategories</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>