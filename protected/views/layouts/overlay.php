
<style>
#overlay{
  width:100% !important;
  height:100% !important;
  position:fixed !important;
  background:black !important;
  z-index:500 !important;
  padding-top:120px !important;
  resize: vertical !important;
  overflow: hidden !important;
  text-align: center !important;
}
#overlay .loader {
  position: absolute !important;
  top: 40% !important;
  left: 20px !important;
  right: 20px !important;
  background: black !important;
  color: white !important;
  transform: translateY(-50%) !important;
  overflow: hidden !important;
}
</style>
<div id="overlay" >
    <div class="loader">
       <img style="width:120px;height:70px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/gambar.png" alt="Loading" /><br>
        <!--[if IE]>
          <img style="width:40px;height:40px;" src="<?php echo Yii::app()->request->baseUrl; ?>/img/big-loader.gif" alt="Loading" />
        <![endif]-->
        <!--[if !IE]><!-->
          <i class="fa fa-cog fa-spin fa-5x"></i>
        <!--<![endif]-->
        
    </div>
</div>