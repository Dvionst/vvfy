<?php
$this->breadcrumbs=array(
	'Member Subs',
);

$this->menu=array(
	array('label'=>'Create MemberSub', 'url'=>array('create')),
	array('label'=>'Manage MemberSub', 'url'=>array('admin')),
);
?>

<h1>Member Subs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
