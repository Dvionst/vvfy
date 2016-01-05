
<div id="blog-home">
	<?php //for($x=1;$x<=2;$x++): ?>
	<div id="list-box-blog">	
		<div class="box-blog">
			<div class="img-blog-left" >
			    <img  class="lazy" width="540"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg" alt="" />
			</div>
			<div class="summary-blog-left">
				<p class="blog-title">MENJADI ANDA</p>
				<p class="intisari">
					tak pernah terbayangkan oleh ku bila kau<br> tinggalkan aku, munculah hati ku besar harapanku sayang<br>
					tak pernah terbayangkan oleh ku bila kau tinggalkan aku, munculah hati ku besar harapanku sayang
				</p>
				<p class="read-more">READ MORE</p>
			</div>
		</div>
		<div class="box-blog">
			<div class="summary-blog-right">
				<p class="blog-title">MENJADI ANDA</p>
				<p class="intisari">
					tak pernah terbayangkan oleh ku bila kau<br> tinggalkan aku, munculah hati ku besar harapanku sayang<br>
					tak pernah terbayangkan <br>oleh ku bila kau tinggalkan <br>aku, munculah hati ku besar harapanku sayang
					tak pernah terbayangkan <br>oleh ku bila kau tinggalkan aku, munculah hati ku besar harapanku sayang
				</p>
				<p class="read-more">READ MORE</p>
			</div>
			<div class="img-blog-right" >
			    <img  class="lazy" width="540"  data-src="<?php echo Yii::app()->request->baseUrl; ?>/img/gallery/slider/thumbs/1.jpg" alt="" />
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
		
	</div>
	<div id="list-box-link">
		<div class="box-other">
			<p class="blog-title blog-link" style="margin-left:15px;">
			<a style="color:white" href="<?php echo Yii::app()->createurl('blog/index') ?>">
				GO TO <br><br> BLOG PAGE
			</a>
			</p>
		</div>
	</div>


<?php //endfor; ?>
</div>