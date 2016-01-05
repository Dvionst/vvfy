<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('controllerID')); ?>:</b>
	<?php echo CHtml::encode($data->controllerID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actionID')); ?>:</b>
	<?php echo CHtml::encode($data->actionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value')); ?>:</b>
	<?php echo CHtml::encode($data->value); ?>
	<br />


</div>