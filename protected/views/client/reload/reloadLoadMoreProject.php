<?php
$id = Yii::app()->user->id;
if (Yii::app()->user->level()=='3'){		
	$id_member = Member::model()->find("TRIM(email) = '$id'")->id;
}else{
	$id_member = MemberSub::model()->find("TRIM(email) = '$id'")->id_member;

} 
$redbox = Yii::app()->db->createCommand()
->select("*")
->from(' project p')
->where("STATUS =1 and id_member = '$id_member' ")
->queryAll();
?>

<?php foreach ($redbox as $key) {?>
	<li class="project" pid="<?php echo $key[id] ?>"  ><?php echo $key['project_name']; ?></li>
<?php } ?>		