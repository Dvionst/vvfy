

<script type="text/javascript">
	var db = openDatabase('backend_vvfy', '1.0', 'Test DB', 2 * 1024 * 1024);
	function database(){
		var msg;
		
		db.transaction(function (tx) {
			// tx.executeSql('DROP TABLE position_circle ');
			tx.executeSql('CREATE TABLE IF NOT EXISTS position_circle (id unique, left,right,top,bottom)');
			tx.executeSql('INSERT INTO position_circle (id, left,right,top,bottom) VALUES ("'+training+'", "1","2","3","4")');
			// tx.executeSql('INSERT INTO position_circle (id, position) VALUES (2, "logmsg")');
			msg = '<p>Log message created and row inserted.</p>';
			document.querySelector('#status').innerHTML =  msg;
		});
		
		db.transaction(function (tx) {
			tx.executeSql('SELECT * FROM position_circle', [], function (tx, results) {
				var len = results.rows.length, i;
				msg = "<p>Found rows: " + len + "</p>";
				document.querySelector('#status').innerHTML +=  msg;
				
				for (i = 0; i < len; i++){
					msg = "<p><b>" + results.rows.item(i).log + "</b></p>";
					// document.querySelector('#status').innerHTML +=  msg;
				}
			}, null);
		});
	}
	function insert(id,top,left,right,bottom){
		db.transaction(function (tx) {
			// tx.executeSql('delete from position_circle');
			tx.executeSql('CREATE TABLE IF NOT EXISTS position_circle (id unique, left,right,top,bottom)');
			tx.executeSql('INSERT INTO position_circle (id, left,right,top,bottom) VALUES ("'+id+'", "'+left+'","'+right+'","'+top+'","'+bottom+'")');
			// tx.executeSql('INSERT INTO position_circle (id, position) VALUES (2, "logmsg")');
			msg = '<p>Log message created and row inserted.</p>';
			// document.querySelector('#status').innerHTML =  msg;
		})
	}
	function update(id,top,left,right,bottom){
		db.transaction(function (tx) {
			// tx.executeSql('delete from position_circle');
			tx.executeSql('CREATE TABLE IF NOT EXISTS position_circle (id unique, left,right,top,bottom)');
			tx.executeSql('update position_circle set  top="'+top+'",left="'+left+'",right="'+right+'",bottom="'+bottom+'" where id = "'+id+'" ');
			// tx.executeSql('INSERT INTO position_circle (id, position) VALUES (2, "logmsg")');
			msg = '<p>Log message updated.</p>';
			// alert('update sukses');
			// document.querySelector('#status').innerHTML =  msg;
		})
	}
	function showData(){
		db.transaction(function (tx) {

			// tx.executeSql('delete from position_circle');
			tx.executeSql('CREATE TABLE IF NOT EXISTS position_circle (id unique, left,right,top,bottom)');
			tx.executeSql('SELECT * FROM position_circle', [], function (tx, results) {
				var len = results.rows.length, i;
				// msg = "<p>Found rows: " + len + "</p>";
				// document.querySelector('#status').innerHTML +=  msg;
				
				for (i = 0; i < len; i++){
					// alert(results.rows.item(i).id);
					$("#"+results.rows.item(i).id+"").css({"left": results.rows.item(i).left, "top": results.rows.item(i).top});
					// $("p").css({"background-color": "yellow", "font-size": "200%"});
					// msg = "<p><b>" + results.rows.item(i).left + "</b></p>";
					// document.querySelector('#status').innerHTML +=  msg;
				}
			}, null);
		});
		// alert('masuk show');
		return true
	}
	
	function reloadCircle(){
		$.ajax({
			type: 'GET',
			url: '<?php echo Yii::app()->createAbsoluteUrl("land/getcircle"); ?>',
			// data:"id_data="+this.id,
			beforeSend: function() {
				$("#overlay").show();
			},
			success:function(data){
				$("#second").html(data);	
				reloadDrag();
				showData();
				
			},
			dataType:'html'
		});
		return true;
	}
	function reloadDrag(){
		$( ".category-value" ).draggable({ 
			containment: "body",
			cursor: "move", 
			cursorAt: { top: 56, left: 56 },
			stop: function(event, ui) {
				var pos = ui.helper.position(); // just get pos.top and pos.left
				// alert(this.id);
				var id = this.id;
				db.transaction(function (tx) {
					// alert('masuk');
					tx.executeSql("SELECT * FROM position_circle where id = '"+id+"' ", [], function (tx, results) {
						var len = results.rows.length, i;
						// alert(len);
						if (len==0){
							insert(id,pos.top,pos.left,"0","0");
							}else{
							update(id,pos.top,pos.left,"0","0");
						}
					}, null);
				});
				// alert("masuk");
				// alert(JSON.stringify(pos));
			}
			// containment: "#container-dragable"
		});
	}
	//ready
	// $(document).ajaxComplete(function () {
	// });
	$(document).ready(function() {
		$( "#form-add-category" ).draggable({ 
			containment: "body",
			cursor: "move", 
			cursorAt: { top: 56, left: 56 },
		});
		
		// showData();
		reloadCircle();
		
		
		
		// $(function() {
		// $(document).on('draggable', '.category-value', function(e) {
		
		// });
		$(document).on('click', '.category-value', function(e) {
			var judul = $(this).find( "p" ).html();
			$('#title-subsection').html(judul);
		});
		$(document).on('click', '#category-timeline', function(e) {
			$(this).css('color','#FCDE18!important');
			$('#category-topic').css('color','#958989');
			$('.sub-timeline').fadeIn();
			$('.sub-topics').hide();
		});
		$(document).on('click', '#category-topic', function(e) {
			$(this).css('color','#FCDE18!important');
			$('#category-timeline').css('color','#958989');
			// alert('masuk');
			$('.sub-timeline').hide();
			$('.sub-topics').fadeIn();
		});
		$(document).on('click', '.all-menu', function(e) {
			$('.category-value').fadeIn();
		});
		$(document).on('click', '.category', function(e) {
			// alert($(this).html());
			// $('.category').css('color','black');
			// $('.all-menu').css('color','black');
			// $(this).css('color','yellow');
			$('.category-value').hide();
			$('.'+$(this).html()+'').fadeIn();
			
			
		});
		
		$(document).on('click', '#btn-add-category', function(e) {
			$('#form-add-category').fadeIn();
		});
		
		$(document).on('click', '.close-form-add-category', function(e) {
			$('#form-add-category').fadeOut();
		})
		$(document).on('click', '.category-value', function(e) {
			// alert(this.id);
			$.ajax({
				type: 'GET',
				url: '<?php echo Yii::app()->createAbsoluteUrl("categoriesmain/getsub"); ?>',
				data:"id_data="+this.id,
				beforeSend: function() {
					$("#overlay").show();
				},
				success:function(data){
					$("#sub-topics").html(data);
					
				},
				dataType:'html'
			});
		});
	$(document).on('submit', '#add-category-form', function(e) {
			// var pk = $('.primary').html();
			e.preventDefault();
			// alert('massi');
			$.ajax({
				type: 'POST',
				url: '<?php echo Yii::app()->createAbsoluteUrl("HeadCategories/create"); ?>',
				// data:$('#project-form').serialize(),
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
		
				// data:new FormData(this),
				beforeSend: function() {
				  // $("#overlay").show();
				},
				success:function(data){
					// alert(data);
					reloadCircle();
					$('#form-add-category').hide();
					$('.select-category').val('choose');
					$('.input-category').val(" ");
					// if (data=='sukses'){
					// $('.hidemodal').click();
						// $('#form-project').fadeOut();
						// $('#full-screen').fadeOut();
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
	});	
	
</script>

<!--
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600" rel="stylesheet" type="text/css">
-->
<style>
#form-add-category,#form-add-topic{
	border:1px solid black;
	background:white;
	width:300px;
	position:fixed;
	z-index:99;
	top: 50%;
	left: 50%;
	margin-top: -100px;
	margin-left: -250px;
	padding:20px;
	display:none;
}
#form-add-category table{
	padding:10px;
}
.close-form-add-category{
	cursor:pointer;
}
</style>
<div id="form-add-category">
	<H3>ADD CATEGORY</H3>
	<img class="close-form-add-category" style="width:20px;position:absolute;top:45px;right:25px;" src="<?php echo Yii::app()->request->baseurl; ?>/img/delete.ico">
	<form id="add-category-form">
		<table cellpadding="10">
			<tr><td>category</td><td>
				<select class="select-category" name="HeadCategories[id_mc]"  required >
					<option value="">choose</option>
					<?php foreach (CategoriesMain::model()->findAll() as $c):?>
					<option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
					<?php endforeach; ?>
				</select>
			</td>
			</tr>
			<tr><td>name</td><td><input class="input-category" name="HeadCategories[name]" type="text" required ></td></tr>
			<tr><td><input type="submit" value="save"></td></tr>
		</table>
	</form>
</div>

<div id="form-add-topic">
	<H3>ADD TOPIC</H3>
	<img class="close-form-add-category" style="width:20px;position:absolute;top:45px;right:25px;" src="<?php echo Yii::app()->request->baseurl; ?>/img/delete.ico">
	<form id="add-category-form">
		<table cellpadding="10">
			<tr><td>category</td><td>
				<select name="CategoriesMain[name]"  required >
					<option value="">choose</option>
					<?php foreach (CategoriesMain::model()->findAll() as $c):?>
					<option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
					<?php endforeach; ?>
				</select>
			</td>
			</tr>
			<tr><td>color</td><td><input name="CategoriesMain[color]" type="text" required maxlength="6" size="6" id="colorpickerField2" value="ff0000"></td></tr>
			<tr><td>name</td><td><input CLASS name="CategoriesMain[name]" type="text" required ></td></tr>
			<tr><td><input type="submit" value="save"></td></tr>
		</table>
	</form>
</div>


<div id="second"></div>
<div id="third">
	<div class="menu">
		<div class="filter" style="float:none">
			<ul class="main-tab ">
				<li style="color:#FCDE18" id="title-subsection" class="filter-title">TRAINING</li>
				<li id="category-topic" class="active">TOPICS</li>
				<li id="category-timeline">TIMELINE</li>
				<li><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/land-plus.png" style="width:40px;height:auto;position:absolute" ></li>
			</ul>
		</div>
		<div class="submenu">
			<ul id="sub-topics" class="sub-topics" >
			</ul>
			<ul class="sub-timeline" >
				<li class="active">DEADLINE</li>
				<li>TASKS </li>
			</ul>
		</div>
	</div>
	
</div>
