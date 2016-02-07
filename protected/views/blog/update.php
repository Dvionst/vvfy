<?php 
	// echo $model->tags;
	$myString = $model->tags;
	$myArray = explode(',', $myString);
	// print_r($myArray);
	$string= "";
	foreach ($myArray as $key) {
		$string .= "'$key',";
	}
	// echo $string;
?>
<script>
	// CKEDITOR.appendTo( 'section1',
	// 	null,
	// 	'<p>This is some <strong>sample text</strong>. You are using <a href="http://ckeditor.com/">CKEditor</a>.</p>'
	// );
	$(document).ready(function() {
		$( '#section1' ).ckeditor();
		$('.tags').SumoSelect({selectAll: true ,triggerChangeCombined: false});
		$('.jqte-test').jqte();
		$(document).on('click', '.add-blog', function(e) {
			$('#box-add-blog').fadeIn();
			$('#full-screen').fadeIn();
		});
		$('#tags').tagEditor({
			 initialTags: [<?php echo $string; ?>] 
		});
		// var hml = '<span class="tag"><span>ewerwerwer&nbsp;&nbsp;</span><a href="#" title="Removing tag">x</a></span>';
		// $('#tags_tagsinput').html(hml)
		// $('#tags').tagsInput({
		// 	width: 'auto',
		// 	onChange: function(elem, elem_tags)
		// 	{
		// 		// alert('masuk');
		// 		// var languages = ['php','ruby','javascript'];
		// 		$('.tag', elem_tags).each(function()
		// 		{
		// 			alert('ms');
		// 		// 	if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
		// 		// 		$(this).css('background-color', 'yellow');
		// 		});
		// 	}

		// 	//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
		// 	// autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
		// });

	});
</script>
<style type="text/css">

</style>
<div id="box-add-blog" >
	<h1> UPDATE  BLOG</h1>
	<!-- <a href="#" class="hidemodal"><img src="<?php echo Yii::app()->request->baseUrl ?>/img/delete.ico"> </a> -->
	<div id="blog-loader">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">
	</div>
	<form method="post" enctype="multipart/form-data" id="form-add-blog" action="<?php echo Yii::app()->createAbsoluteUrl("Blog/updateblog"); ?>">
		<table cellpadding="10">
			<tr>
				<td>Title</td>
				<td>
				<input style="width:350px" value="<?php echo $model->title ?>" id="blog-title" required type="text" name="title" >
				<input  required type="hidden" name="r" value="blog/updateblog" >
				<input  required type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>" >
				</td>
			</tr>
		
			<tr>
				<td>Deskripsi</td>
				<td><textarea id="section1" required  type="text" name="content" >
					<?php echo $model->content ?>
				</textarea></td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select id="blog-category" name="category" required >
						<option >category</option>
						<option <?php if ($model->category=='food') echo "selected" ?> value="food">food</option>
						<option <?php if ($model->category=='technology') echo "selected" ?>  value="technology">technology</option>
						<option <?php if ($model->category=='general') echo "selected" ?> value="general">general</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>image</td>
				<td><input id="blog-image" type="file" name="image"   ><br>
					<?php 
					
					$filename =Yii::app()->basePath."/../img/blog/$model->image";
					// echo $filename;
					if (file_exists($filename)) { 
						$src = Yii::app()->request->baseurl."/img/blog/$model->image ";
					} else {
						$src = Yii::app()->request->baseurl."/img/blog/notfound.jpg";
					}	
					
					?>
					<img style="width:400px;height:auto" src="<?php echo $src ?>"> 
				</td>
			</tr>
			<tr>
				<td>tags</td>
				<td>
				<input type="text" id="tags" name="tags" value="<?php 
				$model->tags ?> " class="tags">
				<!-- <select  id="blog-tags" required class="tags" name="tags[]" multiple="true"  >
					<option value="render">render</option>
					<option value="animation">animation</option>
				</select>	 -->
				</td>
			</tr>
	
			<tr>
				<td><input type="submit" value="save" ></td>
			</tr>
			
			
		</table>
		
	</form>
	</div>	