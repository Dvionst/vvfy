<style>
	.calendar-delete{
		opacity:0.2;
		width:15px;
		cursor:pointer;
		transition:all 100ms;
	}
	.calendar-delete:hover{
		opacity:1;
	}
	.calendar-value{
		background:transparent!important;
		border:none!important;
		display:inline!important;
		color:White!important;
		width:170px!important;	
	}
</style>
<div id="header">CALENDAR</div>
<?php 
	$mb = array('x','january','february','march','april','may','june','july','august','september','october','november','december');
	$month = Yii::app()->db->createCommand()
	->select("DISTINCT(MONTH(c.due_date)),MONTH(c.due_date) bulan,YEAR(c.due_date) tahun")
	->from('calendar c,project p')
	->where('c.project_id = p.id and p.status = 1')
	->order('c.due_date asc')
	// ->where('head_categories.id_mc = categories_main.id')
	->queryAll();
?>

<div id="body">
	<?php foreach ($month as $m): ?>
	<div class="wrapper-month">
		<?php 
			$data = Yii::app()->db->createCommand()
			->select("DISTINCT(DAY(c.due_date)) tgl,c.due_date")
			->from('calendar c,project p')
			->where("month(c.due_date)=$m[bulan] and c.project_id = p.id and p.status = 1")
			->order("c.due_date asc")
			->queryAll();
		?>
		<div  class="month-name"><?php echo $mb[$m['bulan']].' '.$m['tahun']?></div>
		<?php foreach ($data as $d): ?>
		<div class="group-box">
			<div class="head" style="text-transform:uppercase"><?php 
				if (date('d')==$d['tgl'])
					echo  "TODAY($d[tgl])";
				else
					echo  date('l', strtotime($d['due_date']))."($d[tgl])";
					
			?>
			<div class="hide-content" >
				<div class="icon-add"></div>
			</div>
			</div>
			<div class="content">
				<?php 
					$list = Yii::app()->db->createCommand()
					->select("calendar.id as id, calendar.project_id,calendar.due_date due_date,calendar.description description,calendar.status status,calendar.type type")
					->from('calendar,project')
					->where("date(calendar.due_date)='$d[due_date]' and project.id = calendar.project_id and project.status = 1" )
					->queryAll();
					// echo $d[due_date];
				?>
				
				<ul>
					<?php foreach ($list as $l): ?>
					<?php  
						$pn = Project::model()->findByPk($l['project_id'])->project_name;
						
					?>
					<li style="">
					<input style="text-align:left;text-transform:uppercase;font-size: 11px;" <?php if ($l['type']=='due') echo "disabled" ?> idc="<?php echo $l['id'] ?>" class="calendar-value" type="text" value="<?php echo $l['description']." ".$pn;?>" > 
						<?php if ($l['status']==5) :?>
						<img  class="ceklis" src="<?php echo Yii::app()->request->baseUrl; ?>/img/check.png">
						<?php endif; ?>
						<?php if ($l['type']!='due') : ?>
						<img idc="<?php echo $l['id'] ?>" class="calendar-delete"  src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png">
						<?php endif; ?>
						</li>
					<?php endforeach; ?>
					
				</ul>
			</div>
		</div>		
		<?php endforeach; ?>
	</div>
	<?php endforeach; ?>
	
</div>