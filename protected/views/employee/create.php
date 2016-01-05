<?php
$this->breadcrumbs=array(
	'Member Subs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MemberSub', 'url'=>array('index')),
	array('label'=>'Manage MemberSub', 'url'=>array('admin')),
);
?>

<h1>Register as Employee</h1>

<?php echo $this->renderPartial('_form', 
	array(
		'model'=>$model,
		'user'=>$user
	)); ?>