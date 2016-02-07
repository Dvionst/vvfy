<!-- <div class="filter">
	<ul class="filter-data">
		<li>Non-Active</li>
		<li>Active</li>
	</ul>
</div> -->
<!-- <div class="total">
	TOTAL USER  :  2
</div> -->
<style type="text/css">
.project-name{
	text-transform: uppercase;
}
</style>
<table border="1">
	<tr class="head">
		<td>No</td>
		<td >Name</td>
		<td >Last Login</td>
		<td align="center">image</td>
		
	</tr>
	<?php $team = Team::model()->findAll(); ?>
	<?php 
	$no = 1;
	foreach ($team as $t): ?>
	<tr>
		<td style="width:5%">
		<?php echo $no; ?>
		</td>
		<td style="width:40%">
			<div class="project-name">
				<?php echo $t->name; ?>
			</div>
			
		
		</td>
		<td>
			<?php 
			// echo $t->username;
			// echo User::model()->findByPk($t->username)->last_login;
			echo date('j F Y H:i:s',strtotime(User::model()->findByPk($t->username)->last_login)) ?>
		</td>
		<td align="center">
			<img width="40" src="<?php echo Yii::app()->request->baseUrl ?>/img/icon-team/<?php echo $t->image; ?>">
		</td>
		
		<!-- <td style="width:15%">active</td> -->
	</tr>
<?php 
$no++;

endforeach; ?>
</table>