<style type="text/css">
	body{
		background-color: white;
	}

</style>
		<div class="blog">
		<h1><?php echo Blog::model()->findByPk($_REQUEST['id'])->title ?></h1>
			
		<img style="width:20px;height:20px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/calendar.ico">
		
		<h3 class="blog-datetime">
		<?php echo Blog::model()->findByPk($_REQUEST['id'])->datetime ?>
		</h3>
			<h3 class="blog-author">by <?php echo Blog::model()->findByPk($_REQUEST['id'])->username ?>
		</h3>
		

		<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/blog/<?php echo Blog::model()->findByPk($_REQUEST['id'])->image ?>" style="">  -->
			<?php 
			  $img = Blog::model()->findByPk($_REQUEST['id'])->image;
				$filename =Yii::app()->basePath."/../img/blog/$img";
				// echo $filename;
				if (file_exists($filename) || $d['image']!='') {?>
					<img  class="img-first"  src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $img ?>">
				<?
				} else {?>
					<img class="img-first" src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/notfound.jpg">
				<?php	
					}	
				?>

			<?php 
				echo Blog::model()->findByPk($_REQUEST['id'])->content;
			?>
			</br>
			<div id="wrapper-tags">	
				TAGS : 
			<?php  echo Blog::model()->findByPk($_REQUEST['id'])->tags; ?>			
			</div>
		</div>
		<style type="text/css">
		.box{
			background-color: black;
			padding: 10px;
			margin-top: 10px;
			
		}
		.box h2{
			color: white;
			font-size: 15px;
		}
		.box ul li{
			color: white;
		}
		.box  a{
			text-decoration: none;
			color: white;
		}
		.box  a:hover{
			text-decoration: underline;
			color: white;

		}
		#wrapper-right-side{
			width: 340px;
			height: auto;
			right: 50px	;
			top: 50px;
			position: absolute;
			/*background-color: black;*/
			padding-left: 15px;
		}
		.recent-post{
			/*width: 300px;*/
		}
		.recent-post a{
			display: inline-flex;
			font-size: 14px;
		}
		.recent-post .img-recent{
			width: 100%;
			display: inline;
		
		}
		.img-founder{
			width: 50px;
			float: left;
			margin-right:10px; 
		}
		.desc-founder{
			color: white;
			margin-top: -5px;
		}
		</style>
		<div id="wrapper-right-side">
			

			<div  class="box">
				<?php  $blog = Blog::model()->findAll("t.id != $_REQUEST[id]");  ?>
				<h2>RECENT POST</h2>
				
					<?php foreach ($blog as $key) {?>
						<?php
						 $id = $key->id; 
						 $gambar = $key->image; 
						 ?>
						
						<div class="recent-post">
							<img class="img-recent"  src="<?php echo Yii::app()->request->baseurl; ?>/img/blog/<?php echo $gambar ?>">
							<a target="_blank" href="<?php echo Yii::app()->createUrl("blog/view&id=$id") ?>"><?php echo $key->title ?></a>
						</div>


					<?php } ?>
			
			</div>
			<div  class="box">
				<img style="width:100%"  src="<?php echo Yii::app()->request->baseurl; ?>/img/ad.jpg">
			</div>
			<div  class="box">
				<img class="img-founder"  src="<?php echo Yii::app()->request->baseurl; ?>/img/user/4.jpg">
				<p class="desc-founder">
					Jad Fenergi is a founder of vvfy.me, He is a professional money manager . 
					<a target="_blank" href="https://www.linkedin.com/in/jadfenergi">Read more</a>
				
				</p>
			</div>
		
		</div>
	
		<div id="komentar">
		<h2>Comment</h2>
			<div id="list-komentar">
				<?php foreach (BlogComment::model()->findAll("blog_id = $_REQUEST[id]") as $key) {?>
				
				<div class="user-comment">
					<div class="wrap-user-name">
						<?php 
							$id = $key->name;
							$img = User::model()->find("username='$id'")->id;
							// echo $img;
						?>
						<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/user/<?php echo $img ?>.jpg"> 

						<div class="name"><?php echo $key->name ?></div>
					</div>
					<div class="comment-datetime"><?php echo $key->datetime ?></div>
					<div class="content-comment">
						<p>
							<?php echo $key->comment ?>
						</p>
					</div>
				</div>
				<?php } ?>

			</div>
			<?php if  (!Yii::app()->user->isGuest) :?>
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
				
				<table>
				<tr>
						<td style="color:white;">
							POST YOUR COMMENT
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
							<textarea maxlength="200" class="simple-editor" placeholder="comment"  name="comment" required></textarea>				
						</td>

					</tr>
					<tr>
						<td>
							<input  type="submit" value="POST" >		
						</td>
						
					</tr>
				</table>
				
			<?php $this->endWidget(); 
				endif;
			?>
		</div>
	
