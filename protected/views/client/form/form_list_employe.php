<style type="text/css">
	#wrap-list-employee .loader{
		width: 30px;
		height: auto;
		position: absolute;
		top: 0px;
		left: 0px;
		right: 0px;
		bottom: 0px;
		display: none;
	}
	#wrap-list-employee{
		width: 750px;
	    height: 600px;
	    background-color: white;
	    position: fixed;
	    top: 0;	
	    padding: 0px 10px 10px 10px;
	
	    display: none;
	    z-index: 206;
	    margin: auto;  
	    left: 0;
	    bottom: 0;
	    right: 0;
	    border-radius:5px;
	   /* webkit-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		-moz-box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);
		box-shadow: 0px 4px 32px 7px rgba(255,255,255,1);*/
	}

	#wrap-list-employee table{
		width: 100%;
	}
	#wrap-list-employee table  tr th{
		border-top:1px solid black;
		border-bottom:1px solid black;
		text-transform: uppercase;
		text-align: left;
	}
	#wrap-list-employee table  tr td{
		text-align: left;
		/*border-top:1px solid black;
		border-bottom:1px solid black;
		text-transform: uppercase;*/
	}
	.delete,.action,.resend,.loader{
		width:15px;
		height: auto;
		cursor: pointer;
	}
</style>
<div id="wrap-list-employee"></div>

<script type="text/javascript">
	
	$(document).ready(function(){
		// $("#wrap-list-employee").confirm();

		$(document).on("click","#wrap-list-employee table tr td .delete",function(){
			if (confirm("Are you sure delete this employe ? ")){
				// alert("deleted");
				
			}
		})
		$(document).on("click","#wrapper-employe .list",function(){
	 		$('#body-full').fadeIn();
	 		reloadList();
	 		$('#wrap-list-employee').fadeIn();

	 	});
		$(document).on("click","#wrap-list-employee .close-dialog",function(){
			$('#body-full').fadeOut();
	 		$('#wrap-list-employee').fadeOut();
	 	});
	 	function reloadList(){
	 		$.ajax({
	 			url : "<?php echo Yii::app()->createUrl('member/listsubmember')?>",
	 			success : function(data){
	 				$("#wrap-list-employee").html(data);		
	 				$("#wrap-list-employee .loader").hide();
	 			},
	 			beforeSend:function(data){
	 				// alert('da');
	 				$("#wrap-list-employee .loader").show();
	 			}
	 		})
			// $("#wrap-list-employee").load('<?php echo Yii::app()->createUrl('member/listsubmember'); ?>');
		}
	});

</script>
