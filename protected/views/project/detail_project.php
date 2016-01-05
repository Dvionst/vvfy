<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/isotope-docs.min.js"></script>
<style type="text/css">
@font-face {
    font-family: ebrima;
    src: url('<?php echo Yii::app()->getBaseUrl(true); ?>/css/font/ebrima.ttf');
}

*{
	font-family: ebrima!important;
}
.close{
	width: 30px;
	position: absolute;
	top:5px;
	right: 5px;
	cursor: pointer;
}	
#detail_project{
	position: relative;
	width: 1200px;
	height: auto;
	background-color: red;
	top:0px;
	margin:0 auto;
	padding-top:100px;
	z-index: 10;
	background-color: white;
	display: block;

}
#detail_project table{
	width: 80%;
	border:0px solid black;

}
#detail_project table tr td{
	border:1px solid black;
	padding:10px;
}
.name{
	width:15%;
	font-weight: bolder;
	text-transform: uppercase;
}
.value{
	width: 85%;
}
.gambar{
	width:31%;
	height:200px;
	background:transparent;
	margin:10px;
	overflow: hidden;

}
.gambar img{
	width: 130%
}


	#tabs {
  overflow: hidden;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
}

#tabs li {
  float: left;
  margin: 0 -15px 0 0;
}

#tabs a {
  float: left;
  position: relative;
  padding: 0 40px;
  height: 0; 
  line-height: 30px;
  text-transform: uppercase;
  text-decoration: none;
  color: #fff;
  border-right: 30px solid transparent;
  border-bottom: 30px solid #3D3D3D;
  border-bottom-color: #7779;
  opacity: .3;
  filter: alpha(opacity=30);    
}

#tabs a:hover,
#tabs a:focus {
  border-bottom-color: #2ac7e1;
  opacity: 1;
  filter: alpha(opacity=100);
}

#tabs a:focus {
  outline: 0;
}

#tabs #current {
  z-index: 3;
  border-bottom-color: #3d3d3d;
  opacity: 1;
  filter: alpha(opacity=100);   
}
#tabs a {
  height: 0; 
  line-height: 30px;
  border-right: 30px solid transparent;
  border-bottom: 30px solid #3D3D3D;    
}
.title{
	text-align: center;
	width: 30%;
	height: 30px;
	background-color: red;
	/*margin:0 auto;*/
	padding: 20px;
	color: white;
	border-top-left-radius: 20px;
	border-top-right-radius: 20px;

}
#back{
	width: 100px;
	height: 100px;
	background-color: transparent;
	position: fixed;
	right: 0px;
	top:0px;
	z-index: 100;
	cursor: pointer;
	background-size: 100% 100%;
	background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/img/icons/Batch Black/reply.png'); 
}
</style>
<a onclick="window.history.back();" href="#">
	<div id="back"></div>
</a>
<script type="text/javascript">

$(document).ready(function(){
	function reloadTab(){ 	
		$("#content > div").hide(); // Initially hide all content
		$("#tabs li:first a").attr("id","current"); // Activate first tab
		// $("#content > div:first").fadeIn(); // Show first tab content 
		// isotope();
	}
	function resetTabs(){
		$("#content > div").hide(); //Hide all content
		$("#tabs a").attr("id",""); //Reset id's      
		// $("#content > div:first").fadeIn(); // Show first tab content 
		// isotope();
		//alert('masuk');
	}

	reloadTab();
	$("#content > div:first").fadeIn(); // Show first tab content 
		isotope();
	// resetTabs()
	var myUrl = window.location.href; //get URL
	var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For mywebsite.com/tabs.html#tab2, myUrlTab = #tab2     
	var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab
  
    $(document).on("click","#tabs a",function(e) {
    // alert('hahah');	 
	   if ($(this).attr("id") == "current"){ //detection for current tab
           // alert('asdas');
            return       
        }
        else{             
  	        resetTabs();
  	        $(this).attr("id","current"); // Activate this
  	        $($(this).attr('name')).fadeIn(); // Show content for current tab
        }
    });

       for (i = 1; i <= $("#tabs li").length; i++) {
	      if (myUrlTab == myUrlTabName + i) {
	          resetTabs();
	          $("a[name='"+myUrlTab+"']").attr("id","current"); // Activate url tab
	          $(myUrlTab).fadeIn(); // Show url tab content        
	      }
	    }

	$(document).on('click','#btn-save-comment',function(e){
		alert('masuk');

	});

	$(document).on('click','.close',function(e){
		e.preventDefault();
		$('#detail_project').hide();
	});

	function isotope(){		
		$container_tes = $('#container-test-render');
		$container_tes.imagesLoaded( function(){
		$container_tes.isotope({
			// filter:'.one',
			itemSelector : '.gambar',
			// itemSelector : '.alltabs',
			masonry: {
				columnWidth: 1,
				layoutMode: 'masonry'
			}
		 });
		});

		$container_print_screen = $('#container-final-render');
		$container_print_screen.imagesLoaded( function(){
		$container_print_screen.isotope({
			// filter:'.one',
			itemSelector : '.gambar',
			// itemSelector : '.alltabs',
			masonry: {
				columnWidth: 1,
				layoutMode: 'masonry'
			}
		 });
		});

		$container_print = $('#container-print-screen');
		$container_print.imagesLoaded( function(){
		$container_print.isotope({
			// filter:'.one',
			itemSelector : '.gambar',
			// itemSelector : '.alltabs',
			masonry: {
				columnWidth: 1,
				layoutMode: 'masonry'
			}
		 });
		});


	}

	$( window ).scroll(function() {
		// isotope();
		//alert('masuk'); 	
	});


});


</script>


<ul id="tabs">
    <li><a href="#" name="#tab1">Project Description</a></li>
    <li><a href="#" name="#tab2">Project Financial </a></li>
    <li><a href="#" name="#tab2">Project Comment </a></li>
   
</ul>

<div id="content"> 
	<div id="tab1">	
		<div id="detail_project">
		<h1>
			PROJECT DETAIL
		</h1>
		<?php
		$data  = Project::model()->findByPk($_REQUEST['id']);
		 ?>
			<table>
				<tr>
					<td class="name"> Project Name</td>
					<td class="value"><?php echo $data->project_name ?></td>
				</tr>
				
				<tr>
					<td style="width:10%" class="name"> Due Date</td>
					<td class="value"><?php echo date("d M Y",strtotime($data->due_date)) ?></td>
				</tr>
				
				<tr>
					<td class="name"> Task</td>
					<td class="value"><?php echo Status::model()->findByPk($data->status)->name ?></td>
				</tr>
				<tr>
					<td class="name"> Priority</td>
				<td class="value"><?php echo Priority::model()->findByPk($data->priority)->name ?></td>
				</tr>
			</table>
		<h1>
			PROJECT 3D ARTISTS
		</h1>
		<?php
		$data  = Project::model()->findByPk($_REQUEST['id']);
		 ?>
			<table>
				<tr>
					<td class="name"> No</td>
					<td class="value">Name</td>
				</tr>
				<?php
				$no = 1;
					foreach (ProjectDetail::model()->findAll("t.project_id = '$_REQUEST[id]'") as $key) {
				
				?>

				<tr>
					<td class="name"><?php echo $no ?></td>
					<td class="value"><?php echo Team::model()->findByPk($key->worker_id)->name ?></td>
				</tr>
				<?php
					$no++;
				}
				 ?>
				
			
			</table>
			<?php
			$project_id = $_REQUEST['id'];
			$sql = "
			SELECT ph.datetime, ph.project_id, 
			pdm.name_file,
			SUBSTRING_INDEX(pdm.name_file,'.',-1) AS ext
			FROM
			project  AS p                    
			INNER JOIN 
			project_comment_head AS ph ON p.id = ph.project_id
			INNER JOIN
			project_comment AS pdm
			ON pdm.head_project_id = ph.id
			WHERE 

			pdm.status = 1 
			AND
			
			p.id = $project_id
			and
			SUBSTRING_INDEX(pdm.name_file,'.',-1) IN ('jpg','png','gif','PNG','JPG','GIF')
	     	";
	     	$str_test = " and ph.phase = 2";
	     	$str_final = " and ph.phase = 3";
	     	$str_ps = " and ph.phase = 1";
	     	// if ($)
	     	// echo $sql;
	     	$test = Yii::app()->db->createCommand($sql.$str_test)->queryAll();
	     	$final = Yii::app()->db->createCommand($sql.$str_final)->queryAll();
	     	$printscreen = Yii::app()->db->createCommand($sql.$str_ps)->queryAll();

	
			?>
			<div id="wrapper-images">		
				<h1>PROJECT IMAGES</h1>
				<h2 class="title">TES RENDER</h2>
					<div id="container-test-render">
						<?php
						foreach($test as $kom): 
							 ?>
<div class="gambar">
	<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">
</div>
						<?php endforeach; ?>

					<?php //endfor; ?>
					</div>
				
					<h2 class="title">FINAL RENDER</h2>
					<div id="container-final-render">
						<?php
						foreach($final as $kom): 
							 ?>
							<div class="gambar">
								<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">
							</div>
						<?php endforeach; ?>
					</div>

					<h2 class="title">PRINT SCREEN</h2>
					<div id="container-print-screen">
						<?php
						foreach($printscreen as $kom): 
							 ?>
							<div class="gambar">
								<img  src="<?php echo Yii::app()->request->baseUrl; ?>/img/comment/<?php echo $kom[name_file] ?>">
							</div>
						<?php endforeach; ?>
					</div>
			</div>


		</div>
	</div>
	<div id="tab2">
		project financial
	</div>
	<div id="tab3">
		project Comment
	</div>
</div>
<!-- <a  href=""> -->
	<!-- <img style="" class="close close text-mail"   src="<?php echo Yii::app()->request->baseUrl; ?>/img/red-delete.png" alt="" > -->
<!-- </a> -->
