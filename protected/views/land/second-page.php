<div class="menu">
	<div class="filter" style="float:none">
	<ul class="main-tab ">
		<li class="filter-title">CATEGORIES</li	>
		<li style="color:yellow" class="active all-menu">ALL</li>
		<?php 
		$data = Yii::app()->db->createCommand()
		->select('*')
		->from('categories_main ')
		->queryAll();
		foreach ($data as $d):?>
		<li class="category" style="color:#<?php echo $d['color']  ?>"><?php echo $d['name'] ?></li>
		<?php endforeach; ?>
		<li><img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/land-plus.png" style="width:40px;height:auto;position:absolute;" id="btn-add-category"></li>
	</ul>
	</div>
</div>
<div id="wrapper-circle">
		<?php 
		$data = Yii::app()->db->createCommand()
		->select("*,categories_main.color,head_categories.name as namahe,head_categories.category hc,head_categories.id id,head_categories.top top,head_categories.left left")
		->from('head_categories,categories_main')
		->where('head_categories.id_mc = categories_main.id')
		->queryAll();
		foreach ($data as $d):
		// echo $d['id']
		$count =  count(DetailCategories::model()->findAll("id_head=$d[id]"));
		// $no=rand(100,400);
		// $left=rand(30,950);
		$no=$d['top'];
		$left=$d['left'];
		// echo $no;
		?>
		<?php if ($count==4){ ?>
		<div id="<?php echo $d['id_name'] ?>" style="<?php echo "top:$no;left:$left" ?>"  class="category-value <?php echo $d['hc'] ?>  "  >
			<div class="circle-parent">
				<div style="border:5px solid #<?php echo $d['color'] ?>" class="circle-child cir growth">
					<p><?php echo $d['namahe'] ?> </p>
				</div>
			</div>
		</div>
		<?php }else  if ($count==1) {?>
		<div id="<?php echo $d['id_name'] ?>" style="<?php echo "top:$no;left:$left" ?>"  class="category-value <?php echo $d['hc'] ?>  "  >
			<div class="circle-parent">
				<p><?php echo $d['namahe'] ?> </p>
				<div style="margin-left: auto;margin-right: auto;width:40px;height:40px;border:5px solid #<?php echo $d['color'] ?>" class="circle-child cir growth">
				</div>
			</div>
		</div>
		<?php }else  if ($count==2) {?>
		<div id="<?php echo $d['id_name'] ?>" style="<?php echo "top:$no;left:$left" ?>"  class="category-value <?php echo $d['hc'] ?>  "  >
			<div class="circle-parent">
				<p><?php echo $d['namahe'] ?> </p>
				<div style="margin-left: auto;margin-right: auto;width:60px;height:60px;border:5px solid #<?php echo $d['color'] ?>" class="circle-child cir growth">
				</div>
			</div>
		</div>
		<?php }else  if ($count==3) {?>
		<div id="<?php echo $d['id_name'] ?>" style="<?php echo "top:$no;left:$left" ?>"  class="category-value <?php echo $d['hc'] ?>  "  >
			<div class="circle-parent">
				<p><?php echo $d['namahe'] ?> </p>
				<div style="margin-left: auto;margin-right: auto;width:80px;height:80px;border:5px solid #<?php echo $d['color'] ?>" class="circle-child cir growth">
				</div>
			</div>
		</div>
		<?php }else  if ($count==0) {?>
		<div id="<?php echo $d['id_name'] ?>" style="<?php echo "top:$no;left:$left" ?>"  class="category-value <?php echo $d['hc'] ?>  "  >
			<div class="circle-parent">
				<p><?php echo $d['namahe'] ?> </p>
				<div style="margin-left: auto;margin-right: auto;width:20px;height:20px;border:5px solid #<?php echo $d['color'] ?>" class="circle-child cir growth">
				</div>
			</div>
		</div>
		<?php }?>
		
		
		
		
		<?php endforeach; ?>
</div>