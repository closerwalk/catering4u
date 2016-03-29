<?php

/* @var $this SiteController */



$this->pageTitle=Yii::app()->name;

?>



<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>-->
<div id="myHome">
<h2>A Unique, Full-Service Catering Company</h2> 
<p>Specializing in custom event creation. Our event team can handle every aspect of your party, including menu design, rental needs, location selection, valet services,  lighting, photography and event design. Our progressive and perfectionist attitude sets us apart from other companies and is what gives each event a signature style. We are the best at what we do and we know it…..our goal is to prove it to you.</p>

<h2>Fabulous Food, Fantastic Flare</h2>
Rest assured, your food will taste as fabulous as it looks. From preparation to presentation, we take pride in providing unique hors d'oeuvres, buffets and complete formal sit-down meals that are not only delicious to the mouth, but also to the eye. Because we are an established 10 year veteran of the event production and catering industry, our resources and capabilities are endless.  If we are simply providing food for an office event, or producing a wedding or fundraiser for 500 guests, you can count on amazing food.
</div>
<?php $this->widget('application.extensions.social.social', array(
    'style'=>'horizontal', 
        'networks' => array(
        'twitter'=>array(
            'data-via'=>'https://twitter.com/#!/CateringSrv4U', //http://twitter.com/#!/YourPageAccount if exists else leave empty
            ), 
        'googleplusone'=>array(
            "size"=>"medium",
            "annotation"=>"bubble",
        ), 
        'facebook'=>array(
            'href'=>'http://www.facebook.com/pages/Cateringservices4ucom/197212180349295/',//asociate your page http://www.facebook.com/page 
            'action'=>'recommend',//recommend, like
            'colorscheme'=>'light',
            'width'=>'120px',
            )
        )
));?>

