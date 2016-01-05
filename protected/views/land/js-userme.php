<script type="text/javascript">
	$(document).ready(function() {
	var number = 0;
	var id_pcm = 0;
	var warna = 'red';
	var no = 0;
	var canvas ;
	// = document.getElementById("image-comment");
	var ctx;
	var elem,context;

	var selected = false;
	var drag = false;
	var imgdata ;
	var lastimg;
	var countcropped = 0;
	var creating = false;


	var $canvas ;
	var canvasOffset; 
	var offsetX;
	var offsetY;
	var scrollX ;
	var scrollY ;
	var $gambar = [];
	var  startX, endX, startY, endY,mouseIsDown;

	function getMousePos(canvas, evt) {
	    var rect = canvas.getBoundingClientRect();
	    return {
	        x: evt.clientX - rect.left,
	        y: evt.clientY - rect.top
	    };
	}

	function setCanvas(){
		$canvas = $("#image-comment");
		canvasOffset = $canvas.offset();
		offsetX = canvasOffset.left;
		offsetY = canvasOffset.top;
		scrollX = $canvas.scrollLeft();
		scrollY = $canvas.scrollTop();
	}
	
	// variables to save last mouse position
	// used to see how far the user dragged the mouse
	// and then move the text by that distance
	var startX;
	var startY;

	// an array to hold text objects
	var texts = [];

	// this var will hold the index of the hit-selected text
	var selectedText = -1;

	 //end from drag

	 //selectable
	 function drawSquare() {
	    var w = endX - startX;
	    var h = endY - startY;
	    var offsetX = (w < 0) ? w : 0;
	    var offsetY = (h < 0) ? h : 0;
		width = Math.abs(w);
	    height = Math.abs(h);
	    context.beginPath();
	    context.clearRect(0, 0, elemt.width, elemt.height);
	    context.putImageData(imgdata,0,0);
	    context.rect(startX + offsetX, startY + offsetY, width, height);
	    context.lineWidth = 1;
	    context.strokeStyle = 'white';
	    context.stroke();
	}


	 $(document).on('click','#select-ok',function(){
	 	// alert('masuk');
		$.fn.wPaint.selectable=true;
		$.fn.wPaint.tag_number = false;
		alert($.fn.wPaint.selectable);
		alert($.fn.wPaint.tag_number);

	 });

	function reloadTab(){ 	
		$("#content-tab > div").hide(); // Initially hide all content
		$("#tabs li:first a").attr("id","current"); // Activate first tab
		$("#content-tab > div:first").fadeIn(); // Show first tab content 
		}
		function resetTabs(){
		$("#content-tab > div").hide(); //Hide all content
		$("#tabs a").attr("id",""); //Reset id's      
		// alert('reset OK');
	}


	$('#term').bjqs({
	animtype      : 'slide',
	height        : "570",
	width         : '1100',
	responsive    : true,
	randomstart   : true
	});

	$('li.bjqs-next a').html(' ');
	$('li.bjqs-prev a').html(' ');




	$container = $('.container');
	$container.imagesLoaded( function(){
	$container.isotope({
	// filter:'.one',
	itemSelector : '.img-progres',
	// itemSelector : '.alltabs',
	masonry: {
	columnWidth: 1,
	layoutMode: 'masonry'
	}

	});
	});


	$(document).on('change', '.filter-progres-select', function(e) {
	$('#form-filter-progres').submit();
	});

	$(document).on('click', '.full-screen', function(e) {
	$('.control_toggle').toggleClass('hide_controls');
	$('.about').toggleClass("aboutshow");
	$('.full-screen').toggleClass("invisible");
	});

	$(document).on('click','.gantiwarna',function(){
	// alert($(this).attr('warna'));
	warna = $(this).attr('warna');
	// $("#image-comment").data("jqScribble").update({brushColor: warna});
	// alert(warna);
	});
	var  realWidth;
	var  realHeight;
	$(document).on('click','.wPaint-menu-icon-name-clear',function(e){
	// alert('masuk');
	// $('#wrap-text-comment').html(" ");
	// = 1;
	// number = 0; 


	});
	$(document).on('click','.icon-comment',function(){
	// $('#image-comment').remove();
	id_pcm = $(this).attr('id_comment');
	// alert(id_pcm);
	// wPaint
	$('#wrap-image-desc').show();
	$('#tools-brush').show();
	var index = $('.icon-comment').index(this);
	var id =  $(this).attr('phid');
	var url = '<?php echo Yii::app()->request->baseUrl; ?>/img/comment/'+id+'';
	// alert(url);  
	$('#sky').attr('src',url);
	var imk = $("#sky");
	// Create dummy image to get real size
	$("<img>").attr("src", $(imk).attr("src")).load(function(){
	realWidth = this.width*0.8;
	realHeight = this.height*0.8;
	// $('#image-comment').attr('width',realWidth);
	//         	$('#image-comment').attr('height',realHeight);
	$('#wPaint').attr('height',realHeight);
	$('#wPaint').attr('width',realWidth);

	$('#wPaint').css('height',realHeight);
	$('#wPaint').css('width',realWidth);

	$('.wPaint-canvas-bg').attr('height',realHeight);
	$('.wPaint-canvas-bg').attr('width',realWidth);


	$('.wPaint-canvas').attr('height',realHeight);
	$('.wPaint-canvas').attr('width',realWidth);

	$('.wPaint-canvas-temp').attr('height',realHeight);
	$('.wPaint-canvas-temp').attr('width',realWidth);

	$('#image-comment').attr('height',realHeight);
	$('#image-comment').attr('width',realWidth);
	});


	$('#full-black').show();
	$('#wrap-comment').show();
	// $('#image-comment').css('background-image','url(.<?php echo Yii::app()->request->baseUrl; ?>/js/paint/img/comment/'+id+')');

	$('#wPaint').css('background-image','url('+url+')');
	$('#wPaint').css('background-size','100% 100%');




	// saveImg: saveImg,
	// loadImgBg: loadImgBg
	// loadImgFg: b
	// alert(url);
	$('#wPaint').wPaint({
		mode : 'pencil',
		// menuOffsetLeft: -35,
		// menuOffsetTop: -50
	});
	$(".wPaint-canvas").attr("id","image-comment");
	// canvas = document.getElementById("image-comment");
	// ctx = canvas.getContext('2d');
	elem = document.getElementById('image-comment');
	context = elem.getContext('2d');
	// $('#wPaint-canvas-bg').css('background-image','url(<?php echo Yii::app()->request->baseUrl; ?>/img/comment/'+id+')');
	window.scrollTo(0, 0);
	// $("#image-comment").jqScribble();
	});


	function getPosition(element){
	var xPosition = 0;
	var yPosition = 0;

	while (element) {
	xPosition += (element.offsetLeft - element.scrollLeft + element.clientLeft);
	yPosition += (element.offsetTop - element.scrollTop + element.clientTop);
	element = element.offsetParent;
	}
	return {x : xPosition, y : yPosition};
	}
	var numShapes;
	var shapes;
	var dragIndex;
	var dragging;
	var mouseX;
	var mouseY;
	var dragHoldX;
	var dragHoldY;

	function removeTagNumber(){

	  for (var i = 0; i < texts.length; i++) {
        var text = texts[i];
        context.clearRect(text.x-10, text.y-23, 40, 35);
        // context.fillStyle = "";
        // context.fillRect(text.x, text.y-23, 25, 35);
        // alert(text.x+ " "+text.y);
        // context.fillStyle = text.color;
        // context.fillText(text.text, text.x, text.y);
  	  }
  	  //   for (var i = 0; i < texts.length; i++) {
	    //     var text = texts[i];
	    //     context.fillStyle = text.color;
	    //     context.fillText(text.text, text.x, text.y);
	    // }
  	  // alert('removed');
	}
	$(document).on('dblclick','#image-comment',function(e){
	// alert('masuk');
	removeTagNumber();
	imgData = context.getImageData(0, 0, elem.width, elem.height);
	// alert($('#image-comment').attr(''))
	// alert(JSON.stringify(elem));
	
	var elemLeft = elem.offsetLeft;
	var elemTop = elem.offsetTop;
	var elements = [];	
	var parentPosition = getPosition(e.currentTarget);		
	// alert(elemLeft+" "+ele);
	// elem = document.getElementById('image-comment');
	elemLeft = e.offsetLeft;
	elemTop = e.offsetTop;
	var x = e.clientX - parentPosition.x; 
	var y = e.clientY - parentPosition.y ;
	// alert(x+" "+y);
	console.log(x, y);
	context.font = '28pt Calibri';

	// context.fillStyle =
	 // $.fn.wPaint.exist_color;


	// alert($.fn.wPaint.exist);
	// context.fillText(no,x,y);

	//new
	no++;
	 var text = {
	 	color : $.fn.wPaint.exist_color,
        text: no,
        x: x,
        y: y
    };
    text.width = context.measureText(text.text).width;
    text.height = 50;
    texts.push(text);
    // alert(JSON.stringify(texts));
    setCanvas();
    draw();

	//end new
	$('#btn-add-comment').trigger('click');

	});
	// $(document).on('mouseup','#wrap-image-desc',function(e){
	// 	// alert('masuk');
	// });


	// function mouseDownListener(evt) {
	// var i;
	// //We are going to pay attention to the layering order of the objects so that if a mouse down occurs over more than object,
	// //only the topmost one will be dragged.
	// var highestIndex = -1;

	// //getting mouse position correctly, being mindful of resizing that may have occured in the browser:
	// var bRect = theCanvas.getBoundingClientRect();
	// mouseX = (evt.clientX - bRect.left)*(theCanvas.width/bRect.width);
	// mouseY = (evt.clientY - bRect.top)*(theCanvas.height/bRect.height);
	// // alert(mouseX);
	// // alert(mouseY);
	// // alert(JSON.stringify(bRect));

	// //find which shape was clicked
	// for (i=0; i < numShapes; i++) {
	// if	(hitTest(shapes[i], mouseX, mouseY)) {
	// // alert(JSON.stringify(shapes[i]));
	// dragging = true;
	// if (i > highestIndex) {
	// //We will pay attention to the point on the object where the mouse is "holding" the object:
	// dragHoldX = mouseX - shapes[i].x;
	// dragHoldY = mouseY - shapes[i].y;
	// highestIndex = i;
	// dragIndex = i;
	// }
	// }
	// }

	// if (dragging) {
	// window.addEventListener("mousemove", mouseMoveListener, false);
	// }
	// theCanvas.removeEventListener("mousedown", mouseDownListener, false);


	// window.addEventListener("mouseup", mouseUpListener, false);

	// //code below prevents the mouse down from having an effect on the main browser window:
	// if (evt.preventDefault) {
	// evt.preventDefault();
	// } //standard
	// else if (evt.returnValue) {
	// evt.returnValue = false;
	// } //older IE
	// return false;
	// }

	$(document).on('click','.btn-all-projects',function(e){
	$('#all-project-client').show();

	});


	$(document).on('click','#btn-save-comment',function(e){
	var jumlah  = $('.description').length;
	var id_comment = $(this).attr('id_comment');
	// alert(id_pcm);
	// exit;
	var des;

	var des_no;
	var myarray = [];

	// description
	for(var a=0;a<jumlah;a++){
	nilai = $('.description').eq(a).val();
	if (nilai==''){
	alert('Description cannot blank');
	exit;
	}
	des_no = $('.description-number').eq(a).html();
	myarray.push({"no":""+des_no+"","value":""+nilai+""});

	}
	if (jumlah!=0){
	$.ajax({
	url:'<?php echo Yii::app()->createUrl('comment/send') ?>',
	type : "GET",
	data :{
	id_pcm : id_pcm,
	data : myarray
	},
	beforeSend:function(cek){
	$('#full-loader').show();

	},
	success:function(data){
	// alert(data);
	UploadPic(data);

	}
	});
	}else{
	alert('Description cannot blank');
	}

	});

	$(document).on('click','.resend-invitation',function(){
	if (confirm('resend email invitation ? ')){
	// e.preventDefaultdraw	// alert('submit ');
	var email = $(this).attr('email');
	// alert(email);
	$.ajax({
	url : '<?php echo Yii::app()->createUrl('member/resendinvite'); ?>',
	data: 'email='+email,
	type: 'GET',
	beforeSend: function(){
	$('.close-dialog').hide();
	$('.loader').show();

	// $('.close').hide();
	// $('#submit-invite').attr('disabled',true);

	},
	success: function(datas){
	$('.loader').hide();
	$('.close-dialog').show();

	alert('email invitation has been sent');
	reloadList();
	// alert(datas);
	// if (datas=='succes'){
	// 	$('.succes-invite').html('succes invited');								
	// }else{
	// 	$('.error-invite').html(datas);
	// }
	// $('.loader').hide();
	// $('.close').show();
	// $('#submit-invite').attr('disabled',false);
	},
	error: function(data){
	alert('connection timeout please recheck internet connection');
	closeDialog();
	// $('.loader').hide();
	// $('.close').show();
	// $('#email').focus();
	// $('#submit-invite').attr('disabled',false);
	}

	});
	}
	});

	$(document).on('click','#invite-employee',function(){
	// alert('masuk');
	$('#full-black').show();
	$('#wrap-invite').show();
	$('#email').focus();


	});

	$(document).on('click','#btn-setting',function(){
	$('#full-black').show();
	$('#wrap-setting').show();
	// resetTabs();
	reloadSetting();

	reloadTab();
	// $('#email').focus();
	});
	$(document).on('click','#btn-list-employee',function(){
	// alert('masuk');
	$('#full-black').show();
	$('#wrap-list-employee').show();
	reloadList();

	});

	function reloadList(){
	$("#wrap-list-employee").load('<?php echo Yii::app()->createUrl('member/listsubmember'); ?>');
	}
	function reloadSetting(){
	$("#wrap-setting").load('<?php echo Yii::app()->createUrl('member/membersetting'); ?>');
	}


	$(document).on('submit','#form-invite-employee',function(e){
	e.preventDefault();
	// alert('submit ');
	$.ajax({
	url : '<?php echo Yii::app()->createUrl('member/sendinvite'); ?>',
	data: 'email='+$('#email').val(),
	type: 'GET',
	beforeSend: function(){
	$('.loader').show();
	$('.close').hide();
	$('#submit-invite').attr('disabled',true);

	},
	success: function(datas){
	// alert(datas);
	if (datas=='succes'){
	$('.succes-invite').html('succes invited');								
	}else{
	$('.error-invite').html(datas);
	}
	$('.loader').hide();
	$('.close').show();
	$('#submit-invite').attr('disabled',false);
	},
	error: function(data){
	alert('connection timeout');
	closeDialog();
	}
	// error
	});
	});
	function closeDialog(){
		$('#all-project-client').hide();
		$('#wrap-image-desc').hide();
		$('#full-black').hide();
		$('.loader').hide();
		$('.close').show();
		$('#wrap-list-employee').hide();
		$('#wrap-invite').hide();
		$('#wrap-setting').hide();
		$('#wrap-comment').hide();
		$('.error-invite').html(' ');
		$('.succes-invite').html(' ');
		$('#email').val(' ');
		$('#submit-invite').attr('disabled',false);
		$('#wrap-text-comment').html(" ");
		$('#tools-brush').hide();	
		texts = [];
		no = 0;
		number = 0;
	}
	function UploadPic(id_head) {
	var canvas = document.getElementById('image-comment');
	var context = canvas.getContext('2d');
	var dataUrl = canvas.toDataURL();
	$.ajax({
	url:'<?php echo Yii::app()->createUrl('comment/saveimage') ?>',
	type : "POST",
	beforeSend : function(){
	},
	data :{
	imgBase64 : dataUrl,
	id : id_head

	},
	// success:function(data){
	// 	UploadPic();
	// }
	}).done(function(o){
	// close();
		alert('comment has sent')
		closeDialog();
		$('	#full-loader').	hide();
		// alert(o);
		});
	}
	$(document).on('click','.close-dialog',function(){
	closeDialog();

	// $('#wrap-invite').hide();

	});

	var myUrl = window.location.href; //get URL
	var myUrlTab = myUrl.substring(myUrl.indexOf("#")); // For mywebsite.com/tabs.html#tab2, myUrlTab = #tab2     
	var myUrlTabName = myUrlTab.substring(0,4); // For the above example, myUrlTabName = #tab

	reloadTab();
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

	$(document).on('click','#btn-add-comment',function(e){
		number = number + 1;
		var row = "<tr class='row-comment'>"+
		"<td class='description-number' style='width:30px;'>"+number+"</td>"+
		"<td><textarea class='description'>"
		+"</textarea></td>"+
		'</tr>'; 
		$('#wrap-text-comment').append(row);
	});
	
	$(document).on('click','.delete-desc-comment',function(e){
		// alert(number);
		var index = $('.delete-desc-comment').index(this);
		$('.row-comment').eq(index).remove();
		number = $('.row-comment').length;
	});


	
	// variables used to get mouse position on the canvas
	var imgData;

	function draw() {
		// removeTagNumber();
	    // context.clearRect(0, 0, elem.width, elem.height);
	    // alert(JSON.stringify(texts));
	    for (var i = 0; i < texts.length; i++) {
	        var text = texts[i];
	        context.fillStyle = text.color;
	        context.fillText(text.text, text.x, text.y);
	    }
	    // context.putImageData(imgData, 0, 0);
	    // alert('drawed');
	}

	// test if x,y is inside the bounding box of texts[textIndex]
	function textHittest(x, y, textIndex) {
	    var text = texts[textIndex];
	    // alert(x);
	    // alert(y);
	    // alert(textIndex);
	    // alert(JSON.stringify(text));
	    return (x >= text.x && x <= text.x + text.width && y >= text.y - text.height && y <= text.y);
	}

	// handle mousedown events
	// iterate through texts[] and see if the user
	// mousedown'ed on one of them
	// If yes, set the selectedText to the index of that text
	function handleMouseDown(e) {
	    e.preventDefault();
	    startX = parseInt(e.clientX - offsetX);
	    startY = parseInt(e.clientY - offsetY);
	    // Put your mousedown stuff here
	    for (var i = 0; i < texts.length; i++) {
	        if (textHittest(startX, startY, i)) {
	            selectedText = i;
	        }
	    }
	    // alert('handle mouse down')

	}

	// done dragging
	function handleMouseUp(e) {
	    e.preventDefault();
	    selectedText = -1;
	}

	// also done dragging
	function handleMouseOut(e) {
	    e.preventDefault();
	    selectedText = -1;
	}

	// handle mousemove events
	// calc how far the mouse has been dragged since
	// the last mousemove event and move the selected text
	// by that distance
	function handleMouseMove(e) {
	    if (selectedText < 0) {
	        return;
	    }

	    // $canvas.css('cursor','move');
	    e.preventDefault();
	    mouseX = parseInt(e.clientX - offsetX);
	    mouseY = parseInt(e.clientY - offsetY);

	    // Put your mousemove stuff here
	    var dx = mouseX - startX;
	    var dy = mouseY - startY;
	    startX = mouseX;
	    startY = mouseY;

	    var text = texts[selectedText];
	    text.x += dx;
	    text.y += dy;
	    context.clearRect(0, 0, elem.width, elem.height);
	    draw();
	}

	// listen for mouse events
	var isDown;
	$(document).on('mousedown','#image-comment',function (e) {
	     if ($.fn.wPaint.tag_number==true && $.fn.wPaint.selectable==false) {
	     	isDown = true;
	     	removeTagNumber();
	     	imgData = context.getImageData(0, 0, elem.width, elem.height);
    		handleMouseDown(e);
	     }else if ($.fn.wPaint.selectable==true && $.fn.wPaint.tag_number==false){
	     	// alert('selectable true');
	        var pos = getMousePos(canvas, eve);
	        startX = endX = pos.x;
	        startY = endY = pos.y;
	        mouseIsDown = 1;
		}

	});
	$(document).on('mousemove','#image-comment',function (e) {
    	 if ($.fn.wPaint.tag_number==true && $.fn.wPaint.selectable==false) {
		     	// removeTagNumber();
	    	handleMouseMove(e);
	    	if (isDown){
		    	reloadCanvas();
	    	}
	     }else
	      
	});
	$(document).on('mouseup','#image-comment',function (e) {
	     if ($.fn.wPaint.tag_number==true){
		    // reloadCanvas();

		    handleMouseUp(e);
		    // isDown = false;


		    // alert(isDown);





	   //  draw();
	     }
	     
	    // alert('down');
	    // alert('up');
	});
	$(document).on('mouseout','#image-comment',function (e) {
	     if ($.fn.wPaint.tag_number==true)   
	    	handleMouseOut(e);
	});

	$(document).on('mouseout','.wPaint-menu-icon-name-clear',function (e) {
		draw();
	});
// 	$("#image-comment").dblclick(function (e) {
//     // handleMouseOut(e);
//     // alert('123');
//     // var xx = e.clientX - offsetX;
//     // var yy = e.clientY - offsetY;
//     // // alert(exist_color);
//     // var color_exist = $.fn.wPaint.exist_color;
//     // ctx.font = "30px verdana";
//     // ctx.fillText("ini",xx,yy);
//     //  var text = {
//     //  	color : color_exist,
//     //     text: no++,
//     //     x: xx,
//     //     y: yy
//     // };
//     // // alert(JSON.stringify(text));
//     // text.width = ctx.measureText(text.text).width;
//     // text.height = 50;
//     // texts.push(text);
//     // draw();


// });










































	function reloadCanvas(){
		// removeTagNumber();
		
		context.clearRect(0, 0, elem.width, elem.height);
		context.putImageData(imgData, 0, 0);
		draw();


	}
	$(document).on('click','.wPaint-menu-icon',function(e){
		 $.fn.wPaint.tag_number = false;
	});
	$(document).on('click','.wPaint-menu-icon-name-drag',function(e){
		 $.fn.wPaint.tag_number = true;
		 // remo
		 removeTagNumber();
		 imgData = context.getImageData(0, 0, elem.width, elem.height);
		 draw();

		 // alert('masuk');
	});

	var count = 1;
	// $(document).on('click','#remove',function(e){
	// 	removeTagNumber();
	// });
	// $(document).on('click','#cek',function(e){
	// 	// var imgData = context.getImageData(0, 0, elem.width, elem.height);
	// 	// context.clearRect(0, 0, elem.width, elem.height);
	// 	// alert('cleared');
	// 	context.clearRect(0, 0, elem.width, elem.height);
	// 	context.putImageData(imgData, 0, 0);
	// 	draw();
	// 	// if (count>1){
	// 	// 	context.restore();
	// 	// 	alert('restored');
	// 	// }else{
	// 	// 	alert('saved');
	// 	// context.save();
	// 	// 	count ++;

	// 	// }
	// 	// var parameter = $.fn.wPaint.defaults;
	// 	// alert(JSON.stringify(parameter))
	// 	 // alert( $.fn.wPaint.tag_number);
	// 	 $.fn.wPaint.tag_number = true;
	// 	 // alert( $.fn.wPaint.tag_number);

	// 	// elem.onmousedown = alert('masuk');
	// 	// elem.onmousemove = null;
	// 	// elem.onmouseup = alert('masuk');
	// 	// // $("#image-comment").mousedown(function (e) {
	// 	// //    // console.log('null')
	// 	// // });
	// 	// alert('setted');
	// });
	     // $(document) .on('mousedown','#image-comment', function(e){
	     // 	alert('masuk mouse down')
	     // });
		// var anu = $('#image-comment');
		// var anu = $('#image-comment');
		// anu.onclick = function(e){
		// 	alert('masuk');
		// }
	// 	// canvas = document.getElementById('image-comment');
	// 	// canvas = document.getElementById('image-comment');
	// 	canvas = document.getElementById('image-comment');
	// 	ctx = canvas.getContext("2d");

	// 	// canvas.bind("mousemove", function(e) {
	// 	canvas.onmousedown = myDown;
	// 	canvas.onmouseup = myUp;
	// 		// canvas.bind("mousedown",myDown);
	// 		// canvas.bind("mouseUpListener",myU);
	// 	 // alert(e);
	// 	 // alert(JSON.stringify(e));
	// 	//   alert( "User clicked on 'foo.'" );
	// 	// });

	// });

  function fileOnload(e) {
        var $img = $('<img>', { src: e.target.result });
        // var canvas = $('#image-comment')[0];
        // var context = canvas.getContext('2d');

        $img.load(function() {
            context.drawImage(this, 0, 40);
        });

        var gambar_array = {
        	gambar : 'gambar',
        	x : 0 ,
        	y : 10 
        };
        // alert(JSON.stringify(gambar_array));
    }
	$(document).on('change','#cek-file',function(e) {

        var file = e.target.files[0],
            imageType = /image.*/;

        if (!file.type.match(imageType))
            return;

        var reader = new FileReader();
        reader.onload = fileOnload;
        reader.readAsDataURL(file);        
        // alert(JSON.stringify(file));

    });

}); //end on ready
</script>
