<style type="text/css">
		body{
			background-color: white!important;
		}
		
		</style>
		<?php
			$blog=Blog::model()->findByPk($_REQUEST['id']);
		?>
		<?php 
			$filename =Yii::app()->basePath."/../img/blog/{$blog->image}";
			// echo $filename;
			if (file_exists($filename)) {
				$image=Yii::app()->baseUrl.'/img/blog/'.$blog->image;
			}else{
				//$image=Yii::app()->baseUrl.'/img/blog/notfound.jpg';
			}	
		?>
		<div id="cover-blog" style="background-image:url('<?php echo $image?>')" >
			<div id="headline">
				<div class="inner-headline">
					<div class="satu">
						<?php echo $blog->category; ?>
					</div>
					<div class="dua">	
						<?php echo $blog->title; ?>
					</div>
				</div>
			</div>

		</div>
		<div id="blog-search">
			<form method="GET" action="<?php echo Yii::app()->createAbsoluteUrl('blog/index'); ?>">
			<div class="wrapper-search">	
				
					<input class="input-search" name="search" type="text" placeholder="SEARCH BLOG...">
					<input type="submit" style="display:none">
					<div class="submit" style="background-image: url('<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/search-black.PNG');"></div>
				
			</div>
			</form>
		</div>
		<div id="blog-additional">
			<div id="blog-date">
				<?php echo date('F d, Y',strtotime($blog->datetime)) ?>
			</div>
			<div id="blog-path">
				Blog / <?php echo $blog->category; ?> / <?php echo $blog->title; ?>
			</div>
		</div>
		<div id="wrapper-view">

			<div id="content-left">
				<div  class="box" style="padding-top:0px; padding-bottom:0px">
					<img class="img-founder"  src="<?php echo Yii::app()->request->baseurl; ?>/img/user/4.jpg">
						<p class="bold" style="margin-bottom:30px;top:20px;">Jad Fenergi</p>
					<p class="desc-founder">
						 is a founder of vvfy.me, He is a professional money manager .
					</p>
					<a target="_blank" href="https://www.linkedin.com/in/jadfenergi">Read more</a>
				</div>

			</div>
			<div id="content-center">
				<div class="blog">			
					<?php 
					 echo $blog->content;
					?>
					<br>
					<div id="wrapper-tags">
					Tags : <?php echo str_replace(",", ", ", $blog->tags)?>

					</div>
				</div>
				<div id="wrapper-right-side"></div>
				<div id="komentar">
					<div id="list-komentar">
						<?php foreach (BlogComment::model()->findAll("blog_id = $_REQUEST[id]") as $key) {?>
						
						<div class="user-comment">
							<!-- <div style="height:100%"> -->
								<div class="wrap-user-name">
									<?php 
										$id = $key->name;
										$img = User::model()->find("username='$id'")->id.".jpg";
										$filename = Yii::app()->basePath."/../img/blog/".$img;
										if(!file_exists($filename)){
											$img="notfound.jpg";
										}
									?>
									<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/user/<?php echo $img ?>"> 

								</div>
							<!-- </div> -->

							<div class="comment-datetime"><div style="display:inline" class="name"><?php echo $key->name ?></div> / <?php echo date('M d, Y h:m',strtotime($key->datetime)) ?></div>
							<div class="content-comment">
								<p><?php echo $key->comment ?></p>
							</div>
						</div>
						<?php } ?>

					</div>
					<?php //if  (!Yii::app()->user->isGuest) :?>
					<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
						// 'id'=>'kasir-form',
						'enableAjaxValidation'=>false,
						'action' => $this->createUrl('blog/addcomment'),
						'method'=>'post',
						'type'=>'horizontal',
						'htmlOptions'=>array(
							'enctype'=>'multipart/form-data',
							'class'=>'form-komentar',
						    
						)
					)); ?>
						
						<table style="width:100%">
						<tr>
								<td style="color:black;">
									SUBMIT COMMENT
									<div id="komentar-user">
										<?php if(Yii::app()->user->isGuest){ ?>
											*you must sign in to give comment
										<?php }else{ ?>
											Comment as "<?php echo Yii::app()->user->name; ?>"
										<?php } ?>
									</div>
								</td>

							</tr>
							<tr>
								<td>
									<input name="name" maxlength="7" type="hidden" placeholder="name" value="<?php echo Yii::app()->user->name ?>" required>
									<input name="blog_id" type="hidden" value="<?php echo $_REQUEST['id'] ?>" placeholder="name" required>
								</td>

							</tr>
							<tr>
								<td>
									<textarea maxlength="200"  placeholder="......"  name="comment" <?php if(Yii::app()->user->isGuest){echo "readonly";}else{echo "required";} ?>></textarea>				
								</td>

							</tr>
							<tr>
								<td align="right">
									<?php if(Yii::app()->user->isGuest){ ?>
										<input

										 style="
										color:white;
										display:inline;

										"  type="submit" value="LOGIN" >		
									<?php } ?>
									<input style="
									color:white;
									background:rgba(213,21,32,1);
									display:inline;

									"  type="submit" value="SUBMIT" <?php if(Yii::app()->user->isGuest){echo "disabled";}?>>		
								</td>
								
							</tr>
						</table>
						
					<?php $this->endWidget(); 
						//endif;
					?>
				</div>
			</div>


			
			







			<!-- hahaha -->
			<style type="text/css">
			
			</style>
			<div id="content-right">
				<div id="share-title">SHARE</div>
				<div class="box" style="padding-top:0px;border-bottom:1px solid gray;display:inline-block">
					<ul class="share-view">
						<center>
							<li id="share-fb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/fb.PNG"></li>
							<li id="share-tw"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/tw.PNG"></li>
							<li id="share-ln"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/in.PNG"></li>
						</center>
					</ul>
				</div>
				<div  class="box" style="padding-top:30px;border-bottom:1px solid gray;display:inline-block">
					<ul class="share-view">
						<?php
							$id=$_REQUEST['id'];

							$next = Yii::app()->db
							  ->createCommand('SELECT id FROM blog where id > '.$id.' limit 1')
							  ->queryScalar();
							 if(!$next){$next=$id;}

							 $prev = Yii::app()->db
							  ->createCommand('SELECT id FROM blog where id < '.$id.' order by id desc limit 1')
							  ->queryScalar();
							 if(!$prev){$prev=$id;}
						?>
						<center>
							<li><a href="<?php echo Yii::app()->createAbsoluteUrl('blog/view',array('id'=>$next)); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/go.PNG"></a></li>
							<li><a href="<?php echo Yii::app()->createAbsoluteUrl('blog/index'); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/config.PNG"></a></li>
							<li><a href="<?php echo Yii::app()->createAbsoluteUrl('blog/view',array('id'=>$prev)); ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/blog/back.PNG"></a></li>
						</center>
					</ul>
				</div>
			</div>

		</div>

<div id="wrapper-related">
		<div class='lbl-related'>RELATED POST</div>
	<?php 

	$tags=explode(',', $blog->tags);
	
	foreach ($tags as $tag) {
		if(empty($where)){
			$where = "(INSTR(concat(',',tags,','),',{$tag},') > 0";
		}else{
			$where = $where . " OR INSTR(concat(',',tags,','),',{$tag},') > 0";
		}
	}
	$where = $where . ")";

	$where= $where . " AND id <> {$blog->id}";

	$data = Yii::app()->db->createCommand()
	->select("*")
	->from('blog')
	->where($where)
	->order('datetime desc')
	->limit('3')
	->queryAll();
	?>


	<div id="container-post-blog">
		<?php	
		$sisa=3;
		foreach ($data as $d):
		?>
		<div  class="related-post">
			<?php 
			$link = $name = str_replace(' ', '-', $d['title']);
			?>
			<a target="_blank"  href="<?php echo Yii::app()->createAbsoluteUrl("blog/view&id=$d[id]");?>">
			<?php 
			$filename =Yii::app()->basePath."/../img/blog/$d[image]";
			// echo $filename;
			if (file_exists($filename)) {?>
			<img  class="img-related"  src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $d['image'] ?>">
			<?
			} else {?>
			<img class="img-related" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg">
			<?php	
			}	
			?>
			<!-- <img class="img-first" src="<?php echo Yii::app()->request->baseUrl; ?>/img/blog/<?php echo $d['image'] ?>">
			-->
			</a>

			<div class="title"><?php echo $d['title'] ?></div>
			<div class="datetime"><?php echo $d['datetime'] ?></div>
			<div class="description">
			<?php 
			$string = strip_tags($d['content']);
									if (strlen($string) > 300) {
									    // truncate string
									    $stringCut = substr($string, 0, 300);
									    // make sure it ends in a word so assassinate doesn't become ass...
									    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
									}
			echo $string;

			?>
			</div>
			<div style="position:absolute; bottom:30px; right:20px; "> 
			<a  class="read-more-feature" href="<?php echo Yii::app()->createAbsoluteUrl("blog/view",array("id"=>$d[id]));?>">read more</a>
			<!-- <div class="separator"></div> -->
				<div class="social" style="margin-right:0px; padding-top:50px">
						<?php
								$this->widget('SocialShareWidget', array(
								    'url' => Yii::app()->createAbsoluteUrl('blog/view',array('id'=>$d['id'])),        //required
								    'services' => array('facebook','twitter','linkedin'),   //optional
								    'htmlOptions' => array('class' => 'icon'), //optional
								    'popup' => true,               //optional
								    'style' => 2,
								));
						?>
			<!-- 	<ul>
				<li>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?app_id=417808724973321&sdk=joey&u=http://www.vvfy.land/index.php?r=blog/view&id=<?php echo $d[id] ?>&display=popup&ref=plugin&src=share_button">

				<img class="icon" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/social/fb.PNG">
				</a>	
				</li>
				<li>
				<a target="_blank" href="https://twitter.com/intent/tweet?original_referer=http://www.vvfy.land/index.php?r=blog/view&id=<?php echo $d[id] ?>&text=Share vvfy.me blog&tw_p=tweetbutton&url=http://www.vvfy.land/index.php?r=blog/view&id=<?php echo $d[id] ?>&via=vvfy">
				<img class="icon" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/social/tw.PNG">
				</a>
				</li>
				<li><img style="" class="icon" src="<?php echo Yii::app()->request->baseUrl; ?>/img/baru/social/in.PNG"></li>
				</ul> -->
				</div>
			</div>
		</div>
		<?php 
			$sisa=$sisa-1;
			endforeach ?>
		<?php  
			for ($i=0; $i < $sisa; $i++) { 
				echo "<div class='related-post'></div>";
			}
		?>
	</div>

	<div id="wrapper-copyright">
	
		&copy; <?php echo date('Y') ?> VVFY
	</div>
</div>


<script>
(function($) {
	var didScroll;
	var lastScrollTop = 0;
	var delta = 5;
	var navbarHeight = $('header').outerHeight();

	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);


	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        $('header').removeClass('nav-down').addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            $('header').removeClass('nav-up').addClass('nav-down');
	        }
    	}
    
    	lastScrollTop = st;

	}


    var elementright = $('#content-right'),
        originalYright = elementright.offset().top,
        originalBotRight = elementright.offset().top+$('#content-right').height();

    var elementleft = $('#content-left'),
        originalYleft = elementleft.offset().top;
    
    // Space between element and top of screen (when scrolling)
    var topMargin = 20;
    
    // Should probably be set in CSS; but here just for emphasis
    elementright.css('position', 'relative');
    elementleft.css('position', 'relative');
    
    $(window).on('scroll', function(event) {
    	didScroll = true;
        var scrollTop = $(window).scrollTop();
        
        var limit = $('#wrapper-related').offset().top;

        var currentRight = (scrollTop+topMargin+elementright.height());
        var MaxBottomRight = ((limit-$('#wrapper-related').height())-(topMargin+elementright.height()))-50;
        elementright.stop(false, false).animate({
            top: (scrollTop < originalYright)
                    ? 0
                    : ((currentRight>limit) ? MaxBottomRight : scrollTop - originalYright + topMargin)
        }, 300);

        var currentLeft = (scrollTop+topMargin+elementleft.height());
        var MaxBottomLeft = ((limit-$('#wrapper-related').height())-(topMargin+elementleft.height()))-50;
        elementleft.stop(false, false).animate({
            top: scrollTop < originalYleft
                    ? 0
                    : ((currentLeft>limit) ? MaxBottomLeft : scrollTop - originalYleft + topMargin)
        }, 300);
    });
})(jQuery);

</script>