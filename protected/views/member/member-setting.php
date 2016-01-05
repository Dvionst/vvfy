<style type="text/css">
	#content-tab > div{
		display: none;
	}
</style>

	<img class="icon-section"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch Black/settings.png" alt="" >		
	<img class="action  loader"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="" >		
	<img class="close-dialog close"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/close.png" alt="" >
	<h3 
	style="
    display: inline;
    position: absolute;
    top: -25px;
    left: 100px;
    font-size: 34px;
    " 
	>SETTING</h3>
	<ul id="tabs">
	    <li><a href="#" name="#tab1">User Information</a></li>
	    <li><a href="#" name="#tab2">Change Password</a></li>
	    <li><a href="#" name="#tab3">Privacy </a></li>
	</ul>
	<div style="margin-top:20px;" id="content-tab"> 
	    <div id="tab1">
	    	TAB 1
	    </div>
	     <div id="tab2">
	    	<?php 
	    	$model = User::model()->findByPk(Yii::app()->user->id);
	    	$this->performAjaxValidation($model);
	    	$this->renderPartial('application.views.land.account',array('model'=>$model)); ?>
	    </div>
	     <div id="tab3">
	    	TAB 3
	    </div>

   </div>