
<?php
	echo $form;
	for ($i=1; $i <= $count; $i++) {
?> 
	<div class='row row-areas' id='row-area-<?php echo $i; ?>'>
		<div class='label'><span class='helper'>Area <?php echo $i; ?></span></div>	
		<div class='value'>
			<?php echo $form->dropDownList($calc, 'area_type', CHtml::listData(AreaType::model()->findAll(), 'id', 'name'),array('empty'=>'Choose Area Type','class'=>'area-type')); ?>
			<?php echo $form->textField($calc,'area_size',array('onkeypress'=>'return AllowNumbersOnly(event)')); ?>
		</div>
	</div>
<?php		
	}
?>