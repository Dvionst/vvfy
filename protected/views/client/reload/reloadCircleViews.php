<style type="text/css">
	/*.wrapper-project-timeline .hold{
		width: 120px;
		height: 50px;
		background-color: transparent;
		position: absolute;
		z-index: 200;
		left: 240px;
		cursor: pointer;
	}*/
</style>
<?php 
$id = Yii::app()->user->id;
if (Yii::app()->user->level()=='3'){		
	$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
}else{
	$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;
}

if ($pid!='all'){
	$project = "and p.id = $pid";
}else{
	$project = " ";	
}

if ($phid!='all'){
	$phase = "and ph.phase = $phid";
}else {
	$phase = " ";	
}

// $sql = "SELECT pv.id idviews ,ph.datetime, ph.project_id, 
// pdm.name_file,pdm.id as id_comment,
// SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
// FROM
// project AS p 
// INNER JOIN 
// project_views AS pv
// ON p.id = pv.project_id
// INNER JOIN
// project_comment_head AS ph 
// ON pv.id = ph.project_views_id
// INNER JOIN

// (select * from project_comment order by id desc)
//  AS pdm
// ON pdm.head_project_id = ph.id
// where 
// p.id_member = '$id_member'
// and
// pdm.status = 1 
// and
// SUBSTRING_INDEX(pdm.name_file,'.',-1) in ('jpg','png','gif','PNG','JPG','GIF')
// $project
// $phase
// GROUP BY pv.id
// ORDER BY pv.created_date DESC

// ";

$sql = "
select 
*,p.id project_id
from 
project p inner join status s
on 
p.status = s.id
where 
id_member = '$id_member'
and status = 1
";
// echo  $sql;
$views_timeline = Yii::app()->db->createCommand($sql)->queryAll();
?>

<div class="wrapper-project-timeline">
	<div class="fa fa-chevron-up fa-2x top-hold hold" style="color:white"></div>
		<div class="project-timeline">
			<ul>
				<?php foreach($views_timeline as $d): ?>
					<li>
						<div id_project="<?php echo $d['project_id'] ?>" id_comment="<?php echo $d['id_comment'] ?>" class="project-circle" idviews="<?php echo $d['idviews'] ?>">
							<div class="circle-status">
								<?php echo $d[name] ;?>
							</div>
							<div class="date-project-circle">
								<?php echo date('d M Y',strtotime($d[due_date]) );?>
							</div>
							<div class="project-circle-line">
								<div class="circle-inside"></div>
							</div>
							<div class="circle-name-project">
								<?php echo $d[project_name] ?>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<div class="fa fa-chevron-down fa-2x bottom-hold hold" style="color:white"></div>
</div>


