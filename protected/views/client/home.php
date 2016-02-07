<?php 
$id = Yii::app()->user->id;
if (Yii::app()->user->level()=='3'){		
	$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
}else{
	$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;

}
$total_project = Yii::app()->db->createCommand()
->select("*")
->from('project')
->where("STATUS =1 and id_member = '$id_member' ")
->queryAll();
$total_project = count($total_project);
$total_views = count(Yii::app()->db->createCommand($sql)->queryAll());
?>

<style type="text/css">
	.separator{
		width: 20px;
		height: 2px;
		background-color: white;
		margin:10px 0 10px 0;
	}
	.separator-vertikal{
	    width: 1px;
	    position: absolute;
	    height: 160px;
	    left: -50px;
	    top: 60px;
	    background-color: white;
	}
	.detail-project ul{		
	    width: 300px;
	    margin: 0 auto;
	    margin-left: 130px;
	}

</style>
<div class="section" id="home">
	<div class="center-user">
		<div class="summary">
			<div class="invested">
				<?php if (Yii::app()->user->MemberTipe()==0):?>	
					<img class="img-invested" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/badge-silver.PNG">
				<?php else: ?>
					<img class="img-invested" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/user/badge-gold.PNG">		
				<?php endif; ?>		
				<div class="wrapper-total-invested">
					<?php if (Yii::app()->user->MemberTipe()==0):?>	
					<p class="number-invested">11,000 $			</p>
					<div class="lbl-invested">TOTAL INVESTED</div>
					<?php else: ?>
					<p style="font-size: 25px;letter-spacing: 0px;" class="number-invested">PREMIUM ACCOUNT</p>
					<?php endif; ?>

					<div class="line-lbl-invested"></div>
					<?php if (Yii::app()->user->MemberTipe()==1): ?>	
						<p class="lbl-invested-detail" >you've earned gold badges</p>
					<?php else: ?>
						<p class="lbl-invested-detail" style="color:rgba(203,203,203,1)" >you've earned silver badges</p>
					<?php endif; ?>
				</div>
				<div style="clear:both"></div>
			</div>
			<div class="detail-project">
				<ul>
					<li class="left-tp">
						<div class="wrapper-total-label">
							<p class="number"><?php echo $total_project ?></p>
							<label>
								TOTAL PROJECTS
							</label>
						</div>
					</li>
					<li>
						<div class="wrapper-total-label">
							<?php 
							$total_views = Yii::app()->db->createCommand("SELECT 
							COUNT(pv.id) jumlah_views 
							FROM
							project AS p 
							INNER JOIN 
							project_views AS pv ON p.id = pv.`project_id`

							WHERE 
							p.id_member = '$id_member'
							")->queryRow();
							$total_views = $total_views['jumlah_views'];
							?>
							<p class="number"><?php echo $total_views ?></p>
							<label>
								TOTAL VIEWS
							</label>
						</div>
					</li>
					<li style="display:none">
						<div class="wrapper-total-label">
						<?php 
							$total_days = Yii::app()->db->createCommand("SELECT MIN(start_date) st, MAX(due_date) due,
							DATEDIFF(MAX(due_date),MIN(start_date)) total
							FROM project
							WHERE STATUS =1 AND id_member = '$id_member'
							")->queryRow();
							$total_days = $total_days['total'];
						?>
							<p class="number"><?php 
							if ($total_days!='')
								echo $total_days;
							else 
								echo "0";
							 ?></p>
							<label>
								TOTAL DURATION(DAYS)
							</label>
						</div>
					</li>
				<ul>
				<div style="clear:both"></div>

			</div>
		</div>		
		<div  class="upgrade" style="display:none">
			<div class="separator-vertikal"></div>
			<div class="wrapper-label-upgrade">
			<?php 
				if (Yii::app()->user->MemberTipe()==0):
			?>
				<div class="standar">
					<div class="upgrade-label-bold">
						<div class="separator"></div>
						SAVE UP <br> TO 50 %
					</div>

					<div class="upgrade-label-nobold">CHANGE <br> TO PREMIUM</div>
					<div class="upgrade-btn">
						UPGRADE ACCOUNT
						<?php 
						// echo Yii::app()->user->MemberTipe();
						?>
					</div>
				</div>
			<?php else :  ?>
				<div class="standar">
					<div class="upgrade-label-bold">
						<div class="separator"></div>
						YOU ALREADY PREMIUM ACCOUNT
					</div>

					<!--
					<div class="upgrade-label-nobold">CHANGE <br> TO PREMIUM</div>
					 <div class="upgrade-btn">
						UPGRADE ACCOUNT
						<?php 
						// echo Yii::app()->user->MemberTipe();
						?>
					</div> -->
				</div>
			<?php endif;  ?>


				<div class="upgrade-new-project-btn">
					START NEW PROJECT					
				</div>
			</div>
		</div>
		<div class="choice-project">
			<?php
			$sql_promot = "select * from promotion where date(valid_date)>=date(now()) limit 2 ";
			$model_promot =  Yii::app()->db->createCommand($sql_promot)->queryAll(); 
			 ?>
			<?php foreach ($model_promot as $mp ): ?>
			<div class="choice-promo-project">
				<div class="head-choice-title">
					<?php echo $mp[name] ?>
				</div>
				<div class="choice-valid">
					<div class="separator"></div>
					VALID UNTIL <?php echo date('M d - Y',strtotime($mp[valid_date])) ?> 
				</div>
			</div>
			<?php endforeach; ?>
			
		

		</div>
	</div>
	<div style="clear:both"></div>
</div>
