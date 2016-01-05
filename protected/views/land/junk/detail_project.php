<style type="text/css">



.close{
	width: 30px;
	position: absolute;
	top:5px;
	right: 5px;
	cursor: pointer;
}	
#detail_project{
	position: absolute;
	width: 100%;
	height: 100%;
	background-color: red;
	top:0px;
	padding-top:100px;
	z-index: 10;
	background-color: white;
	display: block;

}
#detail_project table{
	width: 80%;
}
#detail_project table tr td{
	border:1px solid black;
	padding:10px;
}
.name{
	width:20%;
}
.value{
	width: 80%;
}

</style>
<script type="text/javascript">
	$(document).on('click','#btn-save-comment',function(e){
		alert('masuk');

	});

	$(document).on('click','.close',function(e){
		e.preventDefault();
		$('#detail_project').hide();
	});


</script>
<center>
	
<div id="detail_project">
<h1>
	PROJECT DETAIL
</h1>
	<table>
		<tr>
			<td class="name"> Project Name</td>
			<td class="value"></td>
		</tr>
		
		<tr>
			<td class="name"> Due Date</td>
			<td class="value"></td>
		</tr>
		
		<tr>
			<td class="name"> Task</td>
			<td class="value"></td>
		</tr>
		<tr>
			<td class="name"> Priority</td>
			<td class="value"></td>
		</tr>

		<tr>
			<td class="name"> Team worker</td>
			<td class="value">
				
<img style="" class="close close text-mail"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" alt="" >
			</td>
		</tr>



	</table>



</div>
</center>
