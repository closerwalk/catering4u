<?php
/* @var $this MenuitemsController */
/* @var $data Menuitems */
Yii::app()->clientScript->registerScript('MyScript',"

		
		 
		  $('#content').css('paddingRight','25px');
		  $('#content').css('paddingLeft','3px');

	     ", 
	   
	   CCLientScript::POS_END);
?>


    <?php 
		if($data->menugroup->menugroup !=$this->flag_key) {
		echo '<h2>'.$data->menugroup->menugroup.'</h2>';
		$this->counter=1;
		}
		$this->flag_key = $data->menugroup->menugroup;
	?>
   
<div id="cs4ucontainer">
<div id="cs4urow">
        <div id="cs4uleft">
     <h4><?php   echo '#'.$this->counter++.''; ?></h4>
		</div>
        <div id="cs4umiddle">  
	<?php   echo '<h4>'.strtoupper(CHtml::encode($data->entree)).'</h4>';
       ?>  
       </div>
    <div id"cs4uright">
  <h4> <?php   echo CHtml::encode($data->price); ?></h4>
   </div>
</div>
<div id="cs4urow">
  <div id="cs4uleft">
     &nbsp;
  </div>  
  <div id="cs4umiddle">  
	<h5><?php echo CHtml::encode($data->descriptions); ?></h5>
  </div>
      
</div>
</div>

<!--	<br />-->


         