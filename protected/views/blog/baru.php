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
		// $('#tags').tagsInput({
		// 	width: 'auto',
		// 	//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
		// 	// autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
		// });
		$('#tags').tagEditor({
			 initialTags: [<?php echo $string; ?>] 
		});

	});
</script>
<style type="text/css">
	.add-blog{
	position:relative;
	top:-10px;
	color:black;
	text-decoration:none;
	}
	.table-project{
	}
	#blog-loader{
		width:100%;
		display: none
	}
	#blog-loader img{
		width:180px;
		margin:0 auto;
	}
	#box-add-blog{
		/*display:none; */
		/*position:absolute;*/
		z-index:100;
		background:white;
		width:100%;
		height:100%;
		left:0;
		padding:20px;
		box-sizing:border-box;
		top:0;
	}
	#box-add-blog input,select{
		padding:5px;
	}
	#box-add-blog legend{
		background:white;
	}
</style>
<div id="box-add-blog" >
	<h1> ADD  BLOG</h1>
	<!-- <a href="#" class="hidemodal"><img src="<?php echo Yii::app()->request->baseUrl ?>/img/delete.ico"> </a> -->
	<div id="blog-loader">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif">
	</div>
	<form method="post" enctype="multipart/form-data" id="form-add-blog" action="<?php echo Yii::app()->createAbsoluteUrl("Blog/addblog"); ?>">
		<table cellpadding="10">
			<tr>
				<td>Title</td>
				<td>
				<input id="blog-title" required type="text" name="title" >
				<input  required type="hidden" name="r" value="blog/addblog" >
				</td>
			</tr>
		
			<tr>
				<td>Deskripsi</td>
				<td><textarea id="section1" required  type="text" name="content" ></textarea></td>
			</tr>
			<tr>
				<td>Category</td>
				<td>
					<select id="blog-category" name="category" required >
						<option >category</option>
						<option value="food">food</option>
						<option value="technology">technology</option>
						<option value="general">general</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>image</td>
				<td><input id="blog-image" type="file" name="image" required  ></td>
			</tr>
			<tr>
				<td>tags</td>
				<td>
				<input type="text" id="tags" name="tags" class="tags">
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