<?php
$this->breadcrumbs=array(
	'Member Subs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MemberSub', 'url'=>array('index')),
	array('label'=>'Create MemberSub', 'url'=>array('create')),
	array('label'=>'View MemberSub', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MemberSub', 'url'=>array('admin')),
);
?>

<h1>Update MemberSub <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>