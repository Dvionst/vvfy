<?php
$this->breadcrumbs=array(
	'Member Subs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MemberSub', 'url'=>array('index')),
	array('label'=>'Create MemberSub', 'url'=>array('create')),
	array('label'=>'Update MemberSub', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MemberSub', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MemberSub', 'url'=>array('admin')),
);
?>

<h1>View MemberSub #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'id_member',
		'date_invite',
		'status',
		'status_email',
	),
)); ?>
