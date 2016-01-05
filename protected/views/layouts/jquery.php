<script type="text/javascript">   

var idpk = $("#primary").val();
var menu = "on going" ;
var sort = 'id';
var ascdesc = 'asc' ;


$('#btn-pa').on('click',function(e){
	// alert('masuk');
});
$('#btn-sa').on('click',function(e){
	alert('masuk');
});
// function startTimer(komponen){
// var Example1 = new (function() {
	// var $stopwatch, // Stopwatch element on the page
	// incrementTime = 70, // Timer speed in milliseconds
	// currentTime = 0, // Current time in hundredths of a second
	// updateTimer = function() {
		// $stopwatch.html(formatTime(currentTime));
		// currentTime += incrementTime / 10;
	// // },
	// };
	// init = function() {
		// $stopwatch = komponen;
		// // $stopwatch = $('.stopwatch');
		// // alert($stopwatch);
		// Example1.Timer = $.timer(updateTimer, incrementTime, true);
	// };
	// this.resetStopwatch = function() {
	// currentTime = 0;
	// this.Timer.stop().once();
	// };
	// $(init);
// });
// }

// function formatTime(time) {
    // var min = parseInt(time / 6000),
        // sec = parseInt(time / 100) - (min * 60),
        // hundredths = pad(time - (sec * 100) - (min * 6000), 2);
    // return (min > 0 ? pad(min, 2) : "00") + ":" + pad(sec, 2) + ":" + hundredths;
// }
// function pad(number, length) {
    // var str = '' + number;
    // while (str.length < length) {str = '0' + str;}
    // return str;
// }


function reload(){
	$('.filter-data li').css('background','white');
	$('.filter-data li').css('color','black');
	$('.default-filter').css('background','rgb(96,108,136)');
	$('.default-filter').css('color','white');
    $.ajax({
        url: "<?php echo Yii::app()->createUrl("project/reload")?>",
        cache: false,
        success: function(msg){
			$('#barisbaru').html(msg);
			$(".select-user-tambah").msDropdown({visibleRows:4});
			// alert('masuk');
        }
    });
    // var waktu = setTimeout("reload()",4000);
}
function reloadFilter(status,sortby,ascdesc){
	// alert(status);
	// alert(sortby);
	// alert(ascdesc);
    $.ajax({
        url: "<?php echo Yii::app()->createUrl("project/reload")?>",
        cache: false,
		beforeSend:function(){
			$('#loader').show();
		},
        data: "status="+status+"&sortby="+sortby+"&ascdesc="+ascdesc,
        success: function(msg){
			reloadCalendar();
			// $(".js-example-basic-multiple").select2();
			$('#loader').hide();
			$('#barisbaru').html(msg);
			$(".select-user").msDropdown({visibleRows:4});
			$(".select-user-tambah").msDropdown({visibleRows:4});
			// alert('masuk');
        }
    });
    // var waktu = setTimeout("reload()",4000);
}

function reloadCalendar(){
	// alert(status);
	// alert(sortby);
	// alert(ascdesc);
	// alert('masuk');
    $.ajax({
        url: "<?php echo Yii::app()->createUrl("project/reloadCalendar")?>",
        cache: false,
		beforeSend:function(){
			$('#loader').show();
		},
        // data: "status="+status+"&sortby="+sortby+"&ascdesc="+ascdesc,
        success: function(msg){
			$('#loader').hide();
			// $('#loader-row').hide();
			$('#project-calendar').html(msg);
			// $(".select-user").msDropdown({visibleRows:4});
			// alert('masuk');
        }
    });
    // var waktu = setTimeout("reloadCalendar()",10000);
}

function reloadRedbox(){
	
    $.ajax({
        url: "<?php echo Yii::app()->createUrl("land/reloadredbox")?>",
        cache: false,
		beforeSend:function(){
			$('.loader').show();
		},
        // data: "status="+status+"&sortby="+sortby+"&ascdesc="+ascdesc,
        success: function(msg){
			$('.loader').hide();
			// $('#loader-row').hide();
			$('#redbox').html(msg);
			
        }
    });
  
}
$(document).ready(function() {


// js-example-basic-multiple
<?php 
if (Yii::app()->controller->action->id=='project'):
?>
reload();
reloadCalendar();
reloadRedbox();
<?php endif; ?>
// startTimer($('.waktuk').eq(1));

var maxLength = 20;
$('#proj-sch-textarea').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length+" remaining");
});

	// showData();
function whiteAll(){
	$('.circle-parent').css('border','9px solid transparent');
}
function hideAll(){
	$('#tbl-task').hide();
	$('#tbl-project').hide();
	$('#tbl-calendar').hide();
	$('#tbl-client').hide();
	$('#tbl-user').hide();
	$('#tbl-team').hide();
	$('#tbl-archive').hide();
}
	
	<?php 
		if (Yii::app()->controller->action->id=='project'):
	?>
	$("#form-project,#form-add-schedule,#form-set-user").draggable({ 
		containment: "body",
		cursor: "move", 
		cursorAt: { top: 56, left: 56 },	
	});

	<?php endif; ?>
	
	$(document).on('dblclick', '.p-project-name', function(e) {
		// alert('masuk');
		$(this).hide();
		// var i = $(this).closest('.editable-name').index(this);
		var index = $(".p-project-name").index(this);
		$('.editable-name').eq(index).show();
		// alert(index);

	});
	$(document).on('change', '.dash-check-permission', function(e) {
		var user = $('#dash-permission-user').val();
		var permission_id = $(this).val();
		// alert(user);
		// alert(permission_id);
		$.ajax({
			type: 'GET',
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatepermission"); ?>',
			data:"username="+user+"&permission_id="+permission_id,
			beforeSend: function() {
			   $("#loader").show();
			},
			success:function(data){
				// alert(data);
			   // $("#list-rule").html(data);
			   // $("#loader").hide();
				// reloadFilter(menu,sort,ascdesc);
				// reloadRedbox();
			},
			dataType:'html'
		});
	});
	$(document).on('click', '.del-worker', function(e) {
		var idw = $(this).attr('idw');
		var confirm = window.confirm('are you sure delete this worker on this project ?');
		if (confirm==true){

		$.ajax({
			type: 'GET',
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/deleteworker"); ?>',
			data:"id="+idw,
			beforeSend: function() {
			   $("#loader-list-user").show();
			   $("#loader").show();
			},
			success:function(data){
			   $("#loader").hide();
			   reloadListUser($('#primary').val());
			   $("#loader-list-user").hide();
				reloadFilter(menu,sort,ascdesc);
				// reloadFilter(menu,sort,ascdesc);
				// reloadRedbox();
			},
			dataType:'html'
		});
		
		}
		
	});

	$(document).on('click', '.btn-add-project', function(e) {
		// alert('asd');
		// var judul = $(this).find( "p" ).html();
		$('#full-screen').fadeIn();
		$('#form-project').fadeIn();
	});
	var st_edit = 1;
	$(document).on('click', '#edit-team', function(e) {
		// alert('asd');
		// var judul = $(this).find( "p" ).html();
		if (st_edit==1){
			// $(this).css("color","gray");
			$(this).text("SAVE");
			$('.dash-non-editabble-project').hide();
			$('.dash-editabble-project').show();
			
			$('.dash-non-editabble-date').hide();
			$('.dash-editabble-date').show();
			
			st_edit = 2;
		}else{
			var tanya = window.confirm("save change ? ");
			if (tanya==true){
				$(this).text("EDIT");
				// updateAlldoing();
				changeProjectUser();
				$(this).css("color","white");
				$('.dash-non-editabble-project').show();
				$('.dash-editabble-project').hide();				
				
				$('.dash-non-editabble-date').show();
				$('.dash-editabble-date').hide();

				st_edit = 1;
			}else{
				$(this).css("color","white");
				$('.dash-non-editabble-project').show();
				$('.dash-editabble-project').hide();				
				
				$('.dash-non-editabble-date').show();
				$('.dash-editabble-date').hide();
				st_edit = 1;
			}

		}
		// $('#form-project').fadeIn();
	});
	
	$(document).on('click', '#form-add-schedule img', function(e) {
		$('#form-add-schedule').fadeOut();
		$('#full-screen').fadeOut();
	});
	// $(document).on('click', '#form-add-fadeIn img', function(e) {
		// $('#form-add-schedule').fadeOut();
	// });
	
	$(document).on('change', '.select-user-tambah', function(e) {
		var pk = $("#primary").val();
		var index = $('.select-user-tambah').index(this);
		// alert(index);
		$.ajax({
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/createlistuser"); ?>',
			data: "pid="+pk+"&worker="+$(this).val(),
			beforeSend: function() {
				// $("#loaderuser").show();
				$('.select-user-tambah').eq(index).hide();
				$(".loader-select-user").eq(index).show();
				// $("#loader-list-user").show();
				// $('#loader').show();
	
			},
			success:function(data){
				if (data=='no')
					alert('already exist');
				$('#loader').hide();
				$(".loader-select-user").eq(index).hide();
				// $(this).show();
				// reloadListUser(pk);
				reloadFilter(menu,sort,ascdesc);

			},
		});
	});
	$(document).on('click', '.img-schedule', function(e) {
		$('#form-add-schedule').fadeIn();
		$('#full-screen').fadeIn();
	});
	$(document).on('click', '#add-list-user', function(e) {
		$.ajax({
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/addlistuser"); ?>',
			beforeSend: function() {
				$("#loader-list-user").show();
			},
			success:function(data){
				
				$('#list-user-set').append(data);
				$(".select-user-add").msDropdown({visibleRows:4});
		
				$("#loader-list-user").hide();
			},
		});
	});
	$(document).on('click', '.img-set-user', function(e) {
		var pk = $("#primary").val();
		$('#form-set-user').fadeIn();
		$('#full-screen').fadeIn();
		$.ajax({
			type: 'GET',
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/reloadlistuser"); ?>',
			data:"id="+pk,
			beforeSend: function() {
			   $("#loader-list-user").show();
			},
			success:function(data){
			   $("#loader-list-user").hide();
			   $("#list-user-set").html(data);
				reloadFilter(menu,sort,ascdesc);
			   $("#loader").hide();
				// reloadRedbox();
			},
			dataType:'html'
		});
	});
	
	function reloadListUser(idp){
		$.ajax({
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/reloadlistuser"); ?>',
			data:"id="+idp,
			beforeSend: function() {
			   $("#loader-list-user").show();
			},
			success:function(data){
			   $("#loader-list-user").hide();
			   $("#list-user-set").html(data);
			},
			dataType:'html'
		});
	}
	
	$(document).on('click', '.hidemodal', function(e) {
		$('#full-screen').fadeOut();
		$('#form-project').fadeOut();
		$('#form-progres').fadeOut();
		$('#form-comment').hide();
		$('#box-add-blog').hide();
		$('#list-comment-multiple').hide();
		$('#list-progres-multiple').hide();
		$('#form-set-user').hide();
		
		
	});
	
	$(document).on('click', '.filter-data li', function(e) {
		// $(this).find("li").css('bacground','red');
		// alert('masuk');
		$('.filter-data li').css('background','white');
		$('.filter-data li').css('color','black');
		$(this).css('background','rgb(96,108,136)');
		$(this).css('color','white');
		// alert(sort);
		// alert(ascdesc);
		reloadFilter($(this).html(),sort,ascdesc);
		menu = $(this).html();
		// alert('masuk');
		
	});
	
	// $(document).on('click', '.circle-parent', function(e) {
		// whiteAll();
		// $(this).css('border','9px solid #FCDE18');
	// });
	
	
	$(document).on('click', '#mn-project', function(e) {
		hideAll();
		$('#tbl-project').show();
	});
	$(document).on('click', '#mn-task', function(e) {
		hideAll();
	});
	$(document).on('click', '#mn-calendar', function(e) {
		hideAll();
		$('#tbl-calendar').show();
		$('.fc-today-button').trigger('click');
	});
	$(document).on('click', '#mn-client', function(e) {
		hideAll();
		$('#tbl-client').show()
	});
	$(document).on('click', '#mn-user', function(e) {
		hideAll();
		$('#tbl-user').show();
	});
	$(document).on('click', '#mn-team', function(e) {
		hideAll();
	});
	$(document).on('click', '#mn-archive', function(e) {
		hideAll();
		$('#tbl-archive').show();
	});
	
	
	
	$(document).on('click', '.table-project .row', function(e) {
		// alert($(this).attr('value'));
		var s = $(this).attr('value');
		// alert(s);
		// alert(sort);
		sort = s;
		// alert(sort);
		// alert(ascdesc);
		if (ascdesc=='asc')
			ascdesc = 'desc'
		else
			ascdesc = 'asc'
		// alert(menu);
		reloadFilter(menu,sort,ascdesc);
		// alert('masuk');
	});
	var progres_s = false;
	$(document).on('click', '.progresbar', function(e) {
			// alert('masuk');
		// if (progres_s==false){
			$(this).find('.editable-progress').fadeIn();
			// progres_s = true;
		// }else{
			// $(this).find('.editable-progress').fadeOut();
			// progres_s = false;
		// }
		// $('.editable-progress').fadeIn();
		// $('.select-progress').fadeIn();
	});
	$(document).on('click', '.img-user', function(e) {
		$('.editable-user').fadeIn();
		$('.select-user').fadeIn();
		$('.select-user').click();
	});
	$(document).on('change', '.calendar-value', function(e) {
		var pk = $(this).attr('idc');
		var nilai = $(this).val();
		var confirm = window.confirm('are you sure edit this description ?');
		if (confirm==true){
				$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Calendar/editdesc"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				  $("#loader").show();
				},
				success:function(data){
				  // $("#loader").fadeOut();
					// reload()
					// reloadFilter();
					if (data=='sukses'){
						reloadCalendar();
					}
					// alert(data)
				},
				dataType:'html'
			});
		}else{
			reloadCalendar();
		}
	});
	$(document).on('click', '.calendar-delete', function(e) {
		var confirm = window.confirm('are you sure delete ?');
		if (confirm==true){
			// alert($(this).attr('idc'));
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Calendar/hapus"); ?>',
				data:"id="+$(this).attr('idc'),
				beforeSend: function() {
				  $("#loader").show();
				},
				success:function(data){
				  // $("#loader").fadeOut();
					// reload()
					// reloadFilter();
					if (data=='sukses'){
						reloadCalendar();
					}
					// alert(data)
				},
				dataType:'html'
			});
		}
	});
	$(document).on('click', '.img-del', function(e) {
		var pk = $("#primary").val();
		var confirm = window.confirm('are you sure e ?');
		if (confirm==true){
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/delete"); ?>',
				data:"id="+pk,
				beforeSend: function() {
				  $("#loader").show();
				},
				success:function(data){
					// alert(data);
				  $("#loader").fadeOut();
					// reload()
					reloadFilter();
					reloadCalendar();
					// alert(data)
				},
				dataType:'html'
			});
		}else{
			alert('no delete');
		}
	});
	$(document).on('change', '#dash-permission-user', function(e) {
		var pk = $(this).val();
		// alert(pk);
		
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/listpermission"); ?>',
				data:"id="+pk,
				beforeSend: function() {
				   $(".loader-my-account").show();
				   $("#list-rule").html(" ");
				},
				success:function(data){
				   $(".loader-my-account").hide();

					// alert(data);
				   $("#list-rule").html(data);
				   // $("#loader").hide();
					// reloadFilter(menu,sort,ascdesc);
					// reloadRedbox();
				},
				dataType:'html'
			});
	});
	function updateAlldoing(){
		$.ajax({
			
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateAlldoing"); ?>',
				// data:"worker="+$(this).attr("worker")+"&project_id="+$(this).val()+"&manager="+$(this).attr("manager"),
				// beforeSend: function() {
				   // $("#loader").show();
				// },
				success:function(data){
					alert(data);
				},
				dataType:'html'
			});
	}
	function changeProjectUser(){
		 $( ".dash-proj-name" ).each(function() {
		    // alert ("project id"+$(this).val());
		    // alert ("worker  "+$(this).attr("worker"));
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateworkerdashboard"); ?>',
				data:"worker="+$(this).attr("worker")+"&project_id="+$(this).val()+"&manager="+$(this).attr("manager"),
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
					// alert(data);
				},
				dataType:'html'
			});
		    	reloadRedbox();
		  });

	}
	$(document).on('change', '.dash-proj-name', function(e) {
		//var pk = $(this).val();
		//var worker = $(this).attr('worker');
		//var manager = $(this).attr('manager');
		// alert(manager);
		// alert(worker);
		// alert(pk);
		// aler=t(pk);
		// alert(worker);
			// $.ajax({
			// 	type: 'GET',
			// 	url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateworker"); ?>',
			// 	data:"id="+pk+"&nilai="+worker+"&manager="+manager,
			// 	beforeSend: function() {
			// 	   $("#loader").show();
			// 	},
			// 	success:function(data){
			// 		// alert(data);
			// 	   $("#loader").hide();
			// 		reloadFilter(menu,sort,ascdesc);
			// 		reloadRedbox();
			// 	},
//		=	// 	dataType:'html'
			// });
	});
	
	$(document).on('change', '.dash-select-status', function(e) {
		var pk = $(this).attr('project_id');
		var val = $(this).val();
		// alert(pk);
		// alert(val);
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatetask"); ?>',
				data:"id="+pk+"&nilai="+val,
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
					// alert(data);
					  $("#loader").hide();
						reloadFilter(menu,sort,ascdesc);
						reloadRedbox();
				},
				dataType:'html'
			});
	});
	
	$(document).on('change', '.select-progress', function(e) {
		var pk = $("#primary").val();
		var nilai = $(this).val();
		var idpd = $(this).attr('idpd');
		// alert(idw);
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateprogres"); ?>',
				data:"id="+pk+"&nilai="+nilai+"&idpd="+idpd,
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
					// alert(data);
					  $("#loader").hide();
						reloadFilter(menu,sort,ascdesc);
				},
				dataType:'html'
			});
		$('.select-user').hide();
		$(this).hide();
	});
	
	
	$(document).on('change', '#select-filter-project', function(e) {
		// alert('masuk');
		// var pk = $("#primary").val();
		
		var nilai = $(this).val();
		menu = nilai;
		// alert(nilai);
			// $.ajax({
				// type: 'GET',
				// url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateprogres"); ?>',
				// data:"id="+pk+"&nilai="+nilai,
				// beforeSend: function() {
				   // $("#loader-row").show();
				// },
				// success:function(data){
					// // alert(data);
					  // $("#loader-row").hide();
			reloadFilter(nilai,sort,ascdesc);

					// alert(data)
				// },
				// dataType:'html'
			// });
		// $('.select-user').hide();
		// $(this).hide();
	});
	
	$(document).on('click', '.img-upload,.img-folder', function(e) {
		var pk = $('#primary').val();
		$('#form-progres').show();
		reloadListComment(pk,1);		
		$('#full-screen').fadeIn();
	});
	
	$(document).on('click', '#sub-comment', function(e) {
		var pk = $('#primary').val();
		$('#form-comment').show();
		reloadListComment(pk,1);		
		$('#full-screen').fadeIn();
	});
	
	
	$(document).on('click', '#sub-progres', function(e) {
		// alert('masuk');
		var pk = $('#primary').val();
		reloadListComment(pk,2);		
		$('#form-progres').show();
		$('#full-screen').fadeIn();

	});
	
	function reloadListComment(project_id,tp){
		$.ajax({
			type: 'GET',
			url: '<?php echo Yii::app()->createAbsoluteUrl("Project/listcount"); ?>',
			data:"project_id="+project_id+"&type="+tp,
			beforeSend: function() {
			   $(".loader-row-form").show();
			},
			success:function(data){
				$(".loader-row-form").hide();
				// alert(data);
				  // $("#loader-row").hide();
				  $("#comment-list").html(data);
				  $("#progres-list").html(data);
					// reloadFilter(menu,sort,ascdesc);

				// alert(data)
			},
			dataType:'html'
		});
	}
	$(document).on('change', '#comment-list,#progres-list', function(e) {
		// alert('masu');
		
		var pk = $("#primary").val();
		var nilai = $(this).val();
		// alert(pk);
		// alert(nilai);
		if (nilai!='new'){
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/dircomment"); ?>',
				data:"project_id="+pk+"&comment_id="+nilai,
				beforeSend: function() {
				   $(".loader-row-form").show();
				},
				success:function(data){
					$(".loader-row-form").hide();
					// alert(data);
					  $("#list-comment-multiple").html(data);
					  $("#list-progres-multiple").html(data);
					  $('#list-comment-multiple').show();
					  $('#list-progres-multiple').show();

						// reloadFilter(menu,sort,ascdesc);

					// alert(data)
				},
				dataType:'html'
			});
		}else if(nilai=='new'){
			// alert(idpk);
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/newcomment"); ?>',
				data:"project_id="+pk+"&comment_id="+nilai,
				beforeSend: function() {
				   $(".loader-row-form").show();
				},
				success:function(data){
					$(".loader-row-form").hide();
					// alert(data);
					  $("#list-comment-multiple").html(data);
					  $("#list-progres-multiple").html(data);
					   $('#list-comment-multiple').show();
					  $('#list-progres-multiple').show();
						// reloadFilter(menu,sort,ascdesc);

					// alert(data)
				},
				dataType:'html'
			});
		}
		// $('.select-user').hide();
		// $(this).hide();
	});
	
	
	
		$(document).on('change', '#clientID', function(e) {
			// alert('masuk');
			if ($(this).val()=='new'){
				var nilai = prompt("please input client name .. ");
				var color = prompt("please input color client (hex/color name) .. ");
				$.ajax({
					type: 'GET',
					url: '<?php echo Yii::app()->createAbsoluteUrl("Project/addclient"); ?>',
					data:"nama="+nilai+"&color="+color,
					beforeSend: function() {
					   $("#loader").show();
					},
					success:function(data){
						// alert(data);
						alert(data);
						$('#clientID').html(data);
						  $("#loader").hide();
						// reloadFilter(menu);
						// alert(data)
					},
					dataType:'html'
				});
			}
		// var pk = $("#primary").val();
		// var nilai = $(this).val();
			// $.ajax({
				// type: 'GET',
				// url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateprogres"); ?>',
				// data:"id="+pk+"&nilai="+nilai,
				// beforeSend: function() {
				   // $("#loader-row").show();
				// },
				// success:function(data){
					// // alert(data);
					  // $("#loader-row").hide();
					// reloadFilter(menu);
					// // alert(data)
				// },
				// dataType:'html'
			// });
		// $('.select-user').hide();
		// $(this).hide();
	});
	
	$(document).on('change', '.select-user', function(e) {
		var pk = $("#primary").val();
		var nilai = $(this).val();
		// alert(pk);
		// alert(nilai);
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updateworker"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
					// alert(data);
					// $(this).val(" ");
					if (data=='eror'){
						alert('that worker already exist');
					}
						reloadFilter(menu,sort,ascdesc);
					  $("#loader").hide();

					// alert(data)
				},
				dataType:'html'
			});
		$('.select-user').hide();
		$(this).hide();
	});
	
	
	$(document).on('change', '.editable-due', function(e) {
		var pk = $("#primary").val();
		var nilai = $(this).val();
		
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatedue"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				  $("#loader").show();
				},
				success:function(data){
				  $("#loader").hide();
					// alert('its ok');
					// alert(data);
					reloadFilter(menu,sort,ascdesc);

					// alert(data)
				},
				dataType:'html'
			});
		// $('.select-user').hide();
		// $(this).hide();
	});
	
	
	
	$(document).on('click', '.project-name', function(e) {
		// $(this).hide();
		$('.wrapper-name-project').find('.editable-name').show();
		
		
	});
	
	$(document).on('click', '.img-start', function(e) {
		var string = $(this).html();
		if (string=='start'){
			var confirm = window.confirm('are you sure to start ?');
			if (confirm==true){
				// var Example1 = new (function() {
					// var $stopwatch, // Stopwatch element on the page
					// incrementTime = 70, // Timer speed in milliseconds
					// currentTime = 0, // Current time in hundredths of a second
					// updateTimer = function() {
						// $stopwatch.html(formatTime(currentTime));
						// currentTime += incrementTime / 10;
					// // },
					// };
					// init = function() {
						// $stopwatch = $('#waktuk');
						// // $stopwatch = $('.stopwatch');
						// // alert($stopwatch);
						// Example1.Timer = $.timer(updateTimer, incrementTime, true);
					// };
					// this.resetStopwatch = function() {
					// currentTime = 0;
					// this.Timer.stop().once();
					// };
					// $(init);
				// });
				// Example1.Timer.toggle();
				alert('statt');
				$(this).html('stop');
				// alert('deleted');
			}else{
				// alert('no delete');
			}
		}else{
			var confirm = window.confirm('are you sure to stop ?');
			if (confirm==true){
				$(this).html('start');
				// alert('deleted');
			}else{
				// alert('no delete');
			}
		}
	});


	
	// $('#calendar').fullCalendar({
			// header: {
				// // left: 'prev,next today',
				// // center: 'title',
				// // right: 'month,agendaWeek,agendaDay'
			// },
			// defaultDate: '2015-02-12',
			// editable: true,
			// eventLimit: true, // allow "more" link when too many events

		// events: [
			// {
				// title: 'Deadline project indonesia',
				// start: '2015-03-06'
			// },
			// {
				// title: 'Project process beirut',
				// start: '2015-03-07',
				// end: '2015-03-10'
			// },
		
		// ]
	// });
		
		
		$(document).on('change', '.combo-s', function(e) {
			var pk = $("#primary").val();
			var nilai = $(this).val();
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatestatus"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
				  $("#loader").hide();
				reloadFilter(menu,sort,ascdesc);

				},
				dataType:'html'
			});
		});	
		
		
		$(document).on('change', '.combo-t-list-user', function(e) {
			var nilai = $(this).val();
			var pk = $("#primary").val();
			var idw = $(this).attr('idw');
			// alert(nilai);
			// alert(pk);
			// alert(idw);
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/UpdateTaskPD"); ?>',
				data:"idw="+idw+"&nilai="+nilai,
				beforeSend: function() {
				  $("#loader-list-user").show();
				},
				success:function(data){
					// alert(data);
					reloadListUser(pk);
					$("#loader-list-user").hide();
					reloadFilter(menu,sort,ascdesc);
					// alert(data)
				},
				dataType:'html'
			});
		})
		$(document).on('change', '.combo-t', function(e) {
		// var pk = $('.primary').html();
			var pk = $("#primary").val();
			var nilai = $(this).val();
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatetask"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				  $("#loader").show();
				},
				success:function(data){
					$("#loader").hide();
					reloadFilter(menu,sort,ascdesc);
					// alert(data)
				},
				dataType:'html'
			});
		});	
		$(document).on('change', '.combo-p', function(e) {
		// var pk = $('.primary').html();
			var pk = $("#primary").val();
			var nilai = $(this).val();
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatepriority"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
				  $("#loader").hide();
				reloadFilter(menu,sort,ascdesc);

					// alert(data)
				},
				dataType:'html'
			});
		});
		$(document).on('change', '.editable-name', function(e) {
			var pk = $("#primary").val();
			var nilai = $(this).val();
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatename"); ?>',
				data:"id="+pk+"&nilai="+nilai,
				beforeSend: function() {
				   $("#loader").show();
				},
				success:function(data){
				  $("#loader").hide();
					reloadFilter(menu,sort,ascdesc);
					$(this).prop("disabled", true);

				},
				dataType:'html'
			});
		
		});
		$(document).on('dblclick', '#data-comment', function(e) {	
			// alert($(this).val());
			 e.preventDefault();  //stop the browser from following
			window.location.href = '<?php echo Yii::app()->request->baseUrl; ?>/img/comment/'+$(this).val();
		})
		$(document).on('dblclick', '.editable-name', function(e) {
			
		 $(this).prop("disabled", false);

		// alert('masuk')
			// var pk = $("#primary").val();
			// var nilai = $(this).val();
			// $.ajax({
				// type: 'GET',
				// url: '<?php echo Yii::app()->createAbsoluteUrl("Project/updatepriority"); ?>',
				// data:"id="+pk+"&nilai="+nilai,
				// beforeSend: function() {
				   // $("#loader-row").show();
				// },
				// success:function(data){
				  // $("#loader-row").hide();
				// reloadFilter(menu,sort,ascdesc);

					// // alert(data)
				// },
				// dataType:'html'
			// });
		});
		
		$(document).on('submit', '#form-register', function(e) {
			e.preventDefault();
			alert('masukz');

		});

		$(document).on('submit', '#add-schedule-form', function(e) {
			// var pk = $('.primary').html();
			e.preventDefault();
			// alert('massi');
			$.ajax({
				type: 'POST',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Calendar/create"); ?>',
				// data:$('#project-form').serialize(),
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
		
				// data:new FormData(this),
				beforeSend: function() {
				  $(".loader-form-add").show();
					$('#submit-add-schedule').hide();
				},
				success:function(data){
					$(".loader-form-add").hide();
					reloadCalendar();
					$('#submit-add-schedule').show();
					$('#proj-sch-textarea').text(" ");
					//	$('textarea').text(".");
				
					// alert(data);
					// reloadCircle();
					
					$('#full-screen').fadeOut();
					$('#form-add-schedule').hide();
				
				},
				error: function(data){
					alert(JSON.stringify(data));
				},
				dataType:'html'
			});
		});
		$(document).on('submit', '#project-form', function(e) {
			// var pk = $('.primary').html();
			e.preventDefault();
			// alert('masi');
			$.ajax({
				type: 'POST',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/new"); ?>',
				// data:$('#project-form').serialize(),
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
		
				// data:new FormData(this),
				beforeSend: function() {
				  // $("#overlay").show();
					$('#submit-add-project').hide();
					$('.loader-form-add').show();
				},
				success:function(data){
					// alert(data);
					if (data=='sukses'){
					$('#submit-add-project').show();
					$('.loader-form-add').hide();
					$('#projectName').val(" ");
											// $('#submit-add-project').fadeOut();

						reloadCalendar();
						reload();
						$('.hidemodal').click();
					}
						
				},
				error: function(data){
					alert(JSON.stringify(data));
				},
				dataType:'html'
			});
		});
		
		$(document).on('submit', '#comment-form', function(e) {
			// var pk = $('.primary').html();
			e.preventDefault();
			// alert('comment form');
			$.ajax({
				type: 'POST',
				url: '<?php echo Yii::app()->createAbsoluteUrl("Project/savecomment"); ?>',
				// data:$('#project-form').serialize(),
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
		
				// data:new FormData(this),
				beforeSend: function() {
				  $(".updateprojects").fadeOut();
				  $(".loader-row-form").fadeIn();

				},
				success:function(data){
					  $(".loader-row-form").fadeOut();
					$(".updateprojects").fadeIn();
					alert("comment has been inserted")	;
					reloadListComment($('#primary').val(),1);
					// $('#form-comment').fadeOut();
					$('.hidemodal').click();

					
					// }
					// reload();
					// alert
				},
				error: function(data){
					alert(JSON.stringify(data));
				},
				dataType:'html'
			});
		});
		<?php 
			if (Yii::app()->controller->action->id=='project'):
		?>
		$( ".category-value" ).draggable({ 
		containment: "body",
		cursor: "move", 
		cursorAt: { top: 56, left: 56 },
		// stop: function(event, ui) {
				// var pos = ui.helper.position(); // just get pos.top and pos.left
				// // alert(this.id);
				// var id = this.id;
				// db.transaction(function (tx) {
					// // alert(id)
					// tx.executeSql("SELECT * FROM position_circle where id = '"+id+"' ", [], function (tx, results) {
					   // var len = results.rows.length, i;
					   // // alert(len);
					   // if (len==0){
							// insert(id,pos.top,pos.left,"0","0");
					   // }else{
							// update(id,pos.top,pos.left,"0","0");
					   // }
					// }, null);
				// });
				// // alert(pos);
				// // alert(JSON.stringify(pos));
			// }
		// containment: "#container-dragable"
	});
		<?php endif; ?>
		
		// var hasTimer = false;
			// Init timer start
		// $(document).on('click', '.img-start', function(e) {
			// // hasTimer = true;
			// // // $('.timer').timer({
				// // // editable: true
			// // // });
			// // $(this).addClass('hidden');
			// // $('.pause-timer-btn, .remove-timer-btn').removeClass('hidden');
		// });
		
	
		
});	

</script>
