<?php 
	$data = Yii::app()->db->createCommand()
	->select("*")
	->from('blog')
	->order('datetime desc')
	->limit(2)
	->queryAll();
?>
<div id="blog-home">
	<?php //for($x=1;$x<=2;$x++): ?>
	<div id="list-box-blog">	
		<div class="box-blog">
			<div class="img-blog-left" >
				<?php 
					$filename =Yii::app()->baseUrl."/img/blog/".$data[1]['image'];
					if (!file_exists($filename)) {
						$filename = Yii::app()->baseUrl."/img/blog/notfound.jpg";
					}	
				?>
			    <img  class="lazy" data-src="<?php echo $filename ?>" alt="" />
			</div>
			<div class="summary-blog-left">
				<p class="blog-title"><?php echo $data[0]['title']?></p>
				<p class="intisari">
					<?php
						$string = strip_tags($data[0]['content']);
						if (strlen($string) > 300) {
						    // truncate string
						    $stringCut = substr($string, 0, 300);
						    // make sure it ends in a word so assassinate doesn't become ass...
						    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
						echo $string;
					?>
					<!-- Lorem Ipsum is simply dummy text of the printing and<br>typesetting industry. Lorem Ipsum has been 
					the industry's<br>standard dummy text ever since the 1500s, when an<br>unknown printer took a galley of 
					type and scrambled it to make a type specimen book. It has survived not only five<br>centuries, but also the 
					leap into electronic typesetting,<br>remaining essentially unchanged. It was popularised in the<br>1960s with 
					the release of Letraset sheets containing Lorem<br>Ipsum passages, and more recently with desktop  -->
				</p>
				<p class="read-more"><a target="_blank" style="color:#DF1B31" href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$data[0]['id']));?>">READ MORE</a></p>
			</div>
		</div>
		<div class="box-blog">
			<div class="summary-blog-right">
				<p class="blog-title"><?php echo $data[1]['title']?></p>
				<p class="intisari">
					<?php
						$string = strip_tags($data[1]['content']);
						if (strlen($string) > 300) {
						    // truncate string
						    $stringCut = substr($string, 0, 300);
						    // make sure it ends in a word so assassinate doesn't become ass...
						    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
						}
						echo $string;
					?>
				</p>
				<p class="read-more"><a target="_blank" style="color:#DF1B31" href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$data[1]['id']));?>">READ MORE</a></p>
			</div>
			<div class="img-blog-right" >
			    <?php 
					$filename =Yii::app()->baseUrl."/img/blog/".$data[1]['image'];
					if (!file_exists($filename)) {
						$filename = Yii::app()->baseUrl."/img/blog/notfound.jpg";
					}	
				?>
			    <img  class="lazy" data-src="<?php echo $filename ?>" alt="" />
			</div>
		</div>
			
	</div>	
	<div id="list-box-other">
		<div class="box-other">
			<p class="blog-title" style="margin-left:15px;">FEATURED BLOG</p>
			<div class="box-email">
				<input  type="text" class="input-subscribe" placeholder="YOUR EMAIL">
				<input type="button" class="btn-subscribe" value="SUBSCRIBE">
			</div>
		</div>
		<div class="box-link">
			<p class="blog-title blog-link" style="margin-left:15px;">
			<a style="color:white" href="<?php echo Yii::app()->createurl('blog/index') ?>">
				GO TO <br><br> BLOG PAGE
			</a>
			</p>
		</div>
	</div>


<?php //endfor; ?>
</div>