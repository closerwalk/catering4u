<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

/*$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);*/
?>
<br/>


<div class="myform" style="width:600px">
<form action="<?php echo Yii::app()->baseUrl;?>/webformmailer.php" method="post" class="contact_form">
<table border="0" width="600px"  cellpadding="0" cellspacing="0">
<thead>
<th><h2>Request A Quote</h2></th>
</thead>
					<tbody><tr><th>
						<label>Date of Event: </label>
					</th>
					<td>
						<!--<input style="width:150px;cursor:pointer;" name="eventdate" id="eventdate" type="text" onclick="" >-->
                       <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                        'name'=>'publishDate',
						'cssFile'=>false,
						/*'themeUrl'=>'/js/jquery-ui-1.8/themes',
     					 'theme'=>'ui-lightness',*/
                        // additional javascript options for the date picker plugin
                        'options'=>array(
                            'showAnim'=>'fold',
                        ),
                        'htmlOptions'=>array( 
                            'style'=>'height:20px;'
                          	 ),
                         )); ?>
						<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/calendar_setup.js"></script>
                        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/form.setup.js"></script>
                        <input type="hidden" name="subject" value="Contact Form" /> 
					</td></tr>
					<tr><th><label>Event City: </label></th>
					<td><input name="zipcode" id="zipcode" type="text" autocomplete="off" class="ac_input"></td></tr>
					
					<tr><th><label>Event Type: </label></th>
					<td>
						<select name="eventtype" id="eventtype">
							<option selected="selected" value="">Select One</option>
							<option value="Anniversary Party">Anniversary Party</option>
							<option value="Baby Shower">Baby Shower</option>
							<option value="Barbecue / Picnic">Barbecue / Picnic</option>
							<option value="Birthday Party">Birthday Party</option>
							<option value="Bridal Shower">Bridal Shower</option>
							<option value="Craft Services">Craft Services</option>
							<option value="Corporate Event">Corporate Event</option>
							<option value="Dinner Party">Dinner Party</option>
							<option value="Family Reunion">Family Reunion</option>
							<option value="Fundraiser / Benefit Function">Fundraiser / Benefit Function</option>
							<option value="Graduation Party">Graduation Party</option>
							<option value="Holiday Party">Holiday Party</option>
							<option value="Luncheon Office Party">Luncheon Office Party</option>
							<option value="Religious Event">Religious Event</option>
							<option value="School Event">School Event</option>
							<option value="Wedding">Wedding</option>
						</select>
					</td></tr>
					<tr><th><label>Event Location: </label></th>
					<td>
						<input class="radio" name="events" type="Radio" value="1" id="needavanue">I need a location<br>
						<input class="radio" name="events" type="Radio" value="2" id="alreadyneedavanue">I already have a location<br>
					</td></tr>
					<tr><th><label>Name: </label></th><td><input name="name" id="name" type="text"></td></tr>
					<script language="javascript" type="text/javascript">
					function CheckAndFocus(control, noofchars, focusControl) {	    
						if(document.getElementById(control).value.length == noofchars) {   
							document.getElementById(focusControl).focus(); }               
					}  
					</script>
                    <tr><th><label>Number of Guests: </label></th>
					<td><input name="number_of_guest" id="number_of_guest" type="text" autocomplete="off" class="" maxlength="7" size="7"></td></tr>
					<tr><th><label>Phone: </label></th>
					<td>
						(<input class="phone_3" name="phone1" id="phone1" maxlength="3" size="4" type="text" onkeyup="CheckAndFocus('phone1',3,'phone2')">)
						<input class="phone_3" name="phone2" id="phone2" maxlength="3" size="3" type="text" onkeyup="CheckAndFocus('phone2',3,'phone3')">&nbsp;
						<input class="phone_4" name="phone3" id="phone3" maxlength="4" size="4" type="text" onkeyup="CheckAndFocus('phone3',4,'phoneext')">&nbsp;
						Ext:<input class="phone_4" name="phoneext" id="phoneext" type="text" maxlength="4" size="4">
					</td></tr>
					<tr><th><label>Email: </label></th><td><input name="email" id="email" type="text"></td></tr>
					<tr><th></th><td></td></tr>
					<tr><td colspan="2"><input class="submit" type="Submit" value="Submit"></td></tr>
					</tbody></table>
</form>
<div id="myInfo">
<h2>Phone:</h2> <h4>(818) 406-6808</h4>
<h2>Email:</h2><h4><a href="mailto:info@cateringservices4u.com">info@cateringservices4u.com</a></h4>

</div>
</div><!-- form -->

