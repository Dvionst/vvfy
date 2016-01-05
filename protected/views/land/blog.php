
<style>
	
</style>

<style type="text/css">
@media print{
	header{
		display: none;
	}
	.delete-blog,.update-blog,.add-blog,.print-blog{
		display: none;
	}
}

.blog-menu li {
	list-style: none;
	display: inline;
}
.blog-menu li a {
	text-decoration: none;
	color: black;
}
.blog-menu{
	margin-left: -40px;
	/*border-bottom:2px solid black;*/
}
</style>
<ul class="blog-menu" >
	<li>
		<a href="<?php echo Yii::app()->createUrl('blog/baru') ?>"  >
			ADD BLOG
		</a>		
	</li>
	<li>
		<a class="print-blog" href="#"  onclick="print()">
			&nbsp;&nbsp;&nbsp;PRINT
		</a>
	</li>
	<li>
		<a href="<?php echo Yii::app()->createUrl('blog/index') ?>" class="print-blog" href="#"  >
			&nbsp;&nbsp;&nbsp;SEE BLOG
		</a>
	</li>
</ul>



<table class="table-project" border="0" cellpadding="30">
	<thead>
		<tr class="head">
			<td align="left" class="row" value="project_name"  >no</td>
			<td style="display:none" align="left" class="row" value="project_name"  >overview</td>
			<td align="left" class="row" value="project_name"  >title</td>
			<td align="left" class="row" value="due_date">category</td>
			<td align="left" class="row" value="username">datetime</td>
			<td align="left" class="row" value="progres">author</td>
			<td align="center" class="row" value="progres">tags</td>
			<td align="center" class="row" value="progres">Image Main</td>
			<td align="left" class="row" value="progres">Action</td>
		</tr>
	</thead>
	<?php $blog = Blog::model()->findAll();  ?>
	<tbody id="baris-blog">
		<?php 
			$data = Yii::app()->db->createCommand()
			->select("*")
			->from('blog')
			->queryAll();	
			$no = 1;
			foreach ($data as $d):
		?>
		<tr style="border-bottom:1px solid black">
			<td><?php echo $no; ?></td>
			<td style="display:none"><img style="width:120px" src="images/<?php echo $d['image'] ?>" ></td>
			<td ><?php echo $d['title'] ?></td>
			<td><?php echo $d['category'] ?></td>
			<td><?php echo $d['datetime'] ?></td>
			<td align="center" ><?php echo $d['username'] ?></td>
			<td align="center" style="width:100px"><?php echo $d['tags'] ?></td>
			<td align="center">
				<?php 
				$filename =Yii::app()->basePath."/../img/blog/$d[image]";
				// echo $filename;
				if (file_exists($filename)) {?>
					<img style="width:150px" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $d['image'] ?>">
				<?
				} else {?>
					<img style="width:150px;" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg">
				<?php	
					}	
				?>
			</td>
			<td>
			<img idb="<?php echo $d['id'] ?>" style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" class=" img-action delete-blog" title="see files" ></a>
			<a  href="<?php echo Yii::app()->createUrl("blog/change&id=$d[id]") ?>">
				<img idb="<?php echo $d['id'] ?>" style="width:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-edit.png" class=" img-action update-blog" title="see files" >
			</a>
			
		</td>
	</tr>
	<?php 
		$no++;
	$str = "";
	endforeach; 
	?>

</tbody>

</table>
<style>

	
</style>
<script>
	$(document).ready(function() {
		// $(".tags").select2();
		// $(document).on('click', '.update-blog', function(e) {
		// 	$('#box-add-blog').fadeIn();
		// 	// alert($(this).attr('idb'));
		// 	$.ajax({
		// 		type: 'GET',
		// 		url: '<?php echo Yii::app()->createAbsoluteUrl("Blog/Updateblog"); ?>',
		// 		// data:$('#project-form').serialize(),
		// 		data:"id="+$(this).attr('idb'), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		// 		contentType: false,       // The content type used when sending data to the server.
		// 		cache: false,             // To unable request pages to be cached
		// 		processData:false,        // To send DOMDocument or non processed data file it is set to false
		// 		beforeSend: function() {
		// 			//
		// 		},
		// 		success:function(data){
		// 			$('#blog-title').val(data.title);
		// 			$('#blog-content').html(data.content);
		// 			$('#blog-category').val(data.category);
		// 			$("#blog-category select").val(data.category);
		// 			// $('#blog-title').val(data.title);
		// 			// alert(data.title);
		// 			// alert(data.content);
		// 			// alert(data.image);
		// 			// if (data=='sukses'){
		// 				// window.location.reload();
		// 			// }
		// 		},
		// 		error: function(data){
		// 			alert(JSON.stringify(data));
		// 		},
		// 		dataType:'json'
		// 	});
		// });
		
		
		$(document).on('click', '.delete-blog', function(e) {
			var confirm = window.confirm('are you sure ?');
			var idb = $(this).attr('idb');
			// alert(idb);
			if (confirm==true){
				// $(this).attr('idb');
				$.ajax({
					type: 'GET',
					url: '<?php echo Yii::app()->createAbsoluteUrl("Blog/deleteblog"); ?>',
					// data:$('#project-form').serialize(),
					data:"id="+idb, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false,       // The content type used when sending data to the server.
					cache: false,             // To unable request pages to be cached
					processData:false,        // To send DOMDocument or non processed data file it is set to false
					beforeSend: function() {
						//
					},
					success:function(data){
						// alert(data);
						if (data=='sukses'){
							window.location.reload();
						}
					},
					error: function(data){
						alert(JSON.stringify(data));
					},
					dataType:'html'
				});
			}
		});
		// $(document).on('submit', '#form-add-blog', function(e) {
			// var pk = $('.primary').html();
		// 	e.preventDefault();
		// 	// alert($(this).serialize());
		// 	// alert('massi');
		// 	$.ajax({
		// 		type: 'POST',
		// 		url: '<?php echo Yii::app()->createAbsoluteUrl("Blog/addblog"); ?>',
		// 		// data:$('#project-form').serialize(),
		// 		data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		// 		contentType: false,       // The content type used when sending data to the server.
		// 		cache: false,             // To unable request pages to be cached
		// 		processData:false,        // To send DOMDocument or non processed data file it is set to false
		// 		beforeSend: function() {
		// 			$('#form-add-blog').hide();
		// 			$('#blog-loader').fadeIn();
		// 		},
		// 		success:function(data){
		// 			// alert(data);
		// 			$('#blog-loader').fadeOut();
				
		// 			if (data=='sukses'){
		// 				window.location.reload();
		// 				$('#form-add-blog').fadeIn();
		// 			}
		// 		},
		// 		error: function(data){
		// 			// alert(JSON.stringify(data));
		// 			alert('eror');
		// 		},
		// 		dataType:'html'
		// 	});
		// });
	});
</script>
