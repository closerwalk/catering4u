<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Catering Services 4 U</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" media="screen, projection" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />



</head>

<body>

<div id="header"> 

  <div id="logo">

    <!--<h1>Catering Services For You</h1>-->

   <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo_1.PNG" style="margin-top:3px;" />

    <h3><a href="http://cateringservices4u.com/">	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More than just catering</a></h3>

    

  </div>

  

  <div id="menu">

		<?php $this->widget('zii.widgets.CMenu',array(

			'items'=>array(

				array('label'=>'Home', 'url'=>array('/site/index')),

				array('label'=>'Menu', 'url'=>array('/menuitems')),

				array('label'=>'Services', 'url'=>array('/services')),

				array('label'=>'Book Us', 'url'=>array('/site/contact')),

				

			),

		)); ?>

  </div>

</div>

<div id="splash">

<?php



$this->widget('application.extensions.nivoslider.ENivoSlider', array(

	'htmlOptions'=>array('style'=>'width: 875px; height: 300px; margin-top:10px;'),

    'images'=>array( //@array images with images arrays.

      		

 			 	 array('src'=>Yii::app()->theme->baseUrl.'/images/img4.jpg', 'url'=>array('/site/page?view=about'), 'caption'=>'EVENTS'),

			 	 array('src'=>Yii::app()->theme->baseUrl.'/images/img14.jpg', 'url'=>array('/site/page?view=about'), 'caption'=>'WEDDINGS'),

			 	 array('src'=>Yii::app()->theme->baseUrl.'/images/img15.jpg', 'url'=>array('/site/page?view=about'), 'caption'=>'FINE FOODS'),	 

        ),

    )

);



?>





<!--<a href="http://cateringservices4u.com/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/img4.jpg" alt="" width="877" height="300" />--></a></div>

<div id="content">

  <div id="colOne">

    <?php echo $content; ?>

   

  </div>

  <div id="colTwo">
   <br />
   <br />
   <br />
   <br />
   <br />

  <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.jpg" height="250" width="180" style="float:right; z-index:100;" />

  

    <h3>What we offer</h3>

    <ul>

      

      <li><a href="<?php echo Yii::app()->baseUrl; ?>/eventplanning">Event Planning</a></li>

      <li><a href="<?php echo Yii::app()->baseUrl; ?>/weddings">Weddings</a></li>

      <li><a href="<?php echo Yii::app()->baseUrl; ?>/makeup">Make-up</a></li>

      <li><a href="<?php echo Yii::app()->baseUrl; ?>/photoshoots">Photo Shoots</a></li>

      <li><a href="<?php echo Yii::app()->baseUrl; ?>/entertainment">Entertainment</a></li>

    

    </ul>

    

  </div>

  <div style="clear: both;">&nbsp;</div>

</div>


<div id="footer">

<br/>
  <p>(c) <?php echo date( 'Y', time() ); ?> Design by Ken Goddard. <a href="http://imaginationnetsolutions.com" title="Imagination Net Solutions " target="_blank">Imagination Net Solutions </a></p>

</div>

</body>

</html>

