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

$sql = "SELECT pv.id idviews ,ph.datetime, ph.project_id, 
pdm.name_file,pdm.id AS id_comment,
SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
FROM
project AS p 
INNER JOIN 
project_views AS pv
ON p.id = pv.project_id
INNER JOIN
project_comment_head AS ph 
ON pv.id = ph.project_views_id
INNER JOIN

(
SELECT 
MAX(id) id ,
MAX(head_project_id) head_project_id,
MAX(name_file) name_file,
MAX(comment_id) comment_id,
STATUS,
MAX(alias_name) alias_name,
MAX(confirmer) confirmer,
MAX(confirmed_date) confirmed_date,
MAX(description) description,
MAX(project_views_id) project_views_id

FROM project_comment pc
where status = 1
GROUP BY 
pc.project_views_id
)
 AS pdm
ON pdm.head_project_id = ph.id
WHERE 
p.id_member = '$id_member'
AND
pdm.status = 1 
AND
SUBSTRING_INDEX(pdm.name_file,'.',-1) IN ('jpg','png','gif','PNG','JPG','GIF')
$project
$phase
 
GROUP BY pdm.project_views_id
ORDER BY ph.datetime DESC


";
// echo  $sql;
$views_timeline = Yii::app()->db->createCommand($sql)->queryAll();
?>
<div class="project-timeline">
	<ul>
		<?php foreach($views_timeline as $d): ?>
			<li>
				<div id_comment="<?php echo $d['id_comment'] ?>" class="project-circle" idviews="<?php echo $d['idviews'] ?>">
					<div class="date-project-circle">
						<?php 
						echo date('d M Y H:i',strtotime($d[datetime]) );
						?>
					</div>
					<div class="project-circle-line">
						<div class="circle-inside"></div>
					</div>

				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>


