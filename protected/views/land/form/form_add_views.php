<!-- Toast -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/toast/src/main/javascript/jquery.toastmessage.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/toast/src/main/resources/css/jquery.toastmessage.css" />

<style type="text/css">
	div[class*='btn']{
		cursor: pointer;
	}
	.form_add_views .datatable table tr td{
		border:1px solid black; 
		padding: 5px;
	}
	.form_add_views .datatable{
		width: 100%;
		height: 200px;
		overflow-y: scroll;
	}
	.form_add_views .datatable table{
		width: 100%;
	}
	.form_add_views .datatable tbody{
		width: 100%;
		/*height: 200px;*/
		overflow-y: scroll;
	}

	.form_add_views .loader-form-add{
		width:30px;
		height: auto;
		position: absolute;
		top: 10px;		
		right: 10px;		

	}
	.form_add_views .close{
		cursor: pointer;
		width:30px;
		height:auto;
		position:absolute;
		top:10px;
		right:10px;
	}
	.form_add_views{
		position: fixed;
	    background: white;
	    z-index: 100;
	    width: 450px;
	    border: 2px solid black;
	    border-radius: 10px;
	    top: 14	%;
	    left: 50%;
	    padding: 15px;
		margin-left: -250px;
		display: none;
	}
	.form_add_views .img-upload,.form_add_views .img-delete{
		cursor: pointer;
		/*margin:15px; */
	}
	.bordered{
		border:1px solid black!important;
		margin-left: 10px;
	}
	.marginleft10{
		margin-left: 10px!important;
	}
	.form_add_views .close{
	
	}
</style>
<div class="form_add_views" id="form_add_views">
	<img class="close" src="<?php echo Yii::app()->request->baseurl; ?>/img/delete.ico">
		
		<form class="form">
			<h1>ADD VIEW FOR THIS PROJECT</h1>
			<table cellpadding="">
				<tr><td>View Name</td><td><input maxlength="20" class=" viewname bordered marginleft10"  name="view_name" type="text" required ></td></tr>
				<tr><td></td><td style="color:gray" id="chars"></td></tr>
				<tr>
					<td>
						<img class="loader-form-add" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" style="" >
						<input type="submit"  value="save">

					</td>
				</tr>
			</table>
		</form>

		<div class="datatable">
			<table>
				<thead>
					<tr>
						<td>No</td>
						<td>Name</td>
						<td>Created</td>
						<td>Total Progres </td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		function reloadTableViews(id){
			$.ajax({
				// type: 'POST',
				url: '<?php echo Yii::app()->createAbsoluteUrl("ProjectViews/getdata"); ?>',
				data:"id="+id,
				beforeSend: function() {
				   // $("#loader").show();
				    $("#form_add_views .loader-form-add").fadeIn();
				    $("#form_add_views .close").fadeOut();
				    // $(".loader-form-add").fadeIn();
				},
				success:function(data){
				    $(".loader-form-add").fadeOut();
				    $("#form_add_views .close").fadeIn();
					$('.form_add_views .datatable table tbody').html(data);
					// closeFormViews();
					// alert(data);
				},
				dataType:'html'
			});
		}

		$(document).on('click','.btn-add-views',function(e){
			$('.form_add_views').fadeIn();
			$('#full-screen').fadeIn();
			$('.viewname').focus();
			reloadTableViews($("#primary").val());

		});
		$(document).on('click','#form_add_views .img-delete',function(e){
		if (confirm("Are you sure to Delete this view ? ")){
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("ProjectViews/delete"); ?>',
				data:"id="+$(this).attr("vid"),
				beforeSend: function() {
				    $("#form_add_views .loader-form-add").fadeIn();
				    $("#form_add_views .close").fadeOut();
				},
				success:function(data){
				    $("#form_add_views .loader-form-add").fadeOut();
				    $("#form_add_views .close").fadeIn();
					// $('.viewname').val("");
					// alert(data);
					if (data=='sukses'){	
						reloadTableViews($("#primary").val());
						$().toastmessage('showSuccessToast', 'View has been deleted!');
					}
					// $('.viewname').focus();

				},
				dataType:'html'
			});
		}
		});


		$(document).on('submit','#form_add_views .form',function(e){
			// alert(idpk);
			e.preventDefault();
			$.ajax({
				type: 'POST',
				url: '<?php echo Yii::app()->createAbsoluteUrl("ProjectViews/create"); ?>',
				data:"id="+$("#primary").val()+"&viewname="+$(".viewname").val(),
				beforeSend: function() {
				    $("#form_add_views .loader-form-add").fadeIn();
				    $("#form_add_views .close").fadeOut();

				},
				success:function(data){
					if (data=='sukses'){
						reloadTableViews($("#primary").val());
						$('.viewname').val("");
						$('.viewname').focus();
						$().toastmessage('showSuccessToast', 'View has been added!');
					}else{
						var obj = jQuery.parseJSON(data);
						// alert(JSON.stringify(obj));
						$.each(obj,function( index,value ) {
							// alert('123');
							// alert(value);
							$().toastmessage('showErrorToast', value);

						  // console.log( index + ": " + $( this ).text() );
						});
						reloadTableViews($("#primary").val());
					}

					// closeFormViews();
				},
				dataType:'html'
			});
		});
		function closeFormViews(){
			$('.form_add_views').fadeOut();
			$('#full-screen').fadeOut();
			$('.viewname').val("");
		}
		$(document).on('click','.form_add_views .close',function(e){
			if ($('.viewname').val().length==0){
				closeFormViews();
			}else{
				if (confirm("Are you sure to close this form ? ")){closeFormViews();}
			}
		});


	});
</script>