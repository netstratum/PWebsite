<!DOCTYPE html>
<html lang="en-US" style="" class=" js no-touch csstransforms3d csstransitions webkit chrome win js js">
<!--<![endif]-->
<?php include('header.php'); ?>
<!-- content -->
<script>
function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if( !regex.test( email ) ) {
    return false;
  } else {
    return true;
  }
}
jQuery( document ).ready(function( $ ) {
var n=0,e=0;m=0
  $('#submit_button').click(function()
  { 
  if($('#name_input').val()=='')
  {  $('#name_input').css('border','1px solid #F00');
   $('#name_input').attr("placeholder", "Name cannot be blank");}
  else
  { $('#name_input').css('border','1px solid #cccccc');n=1}
  
   if($('#email_input').val()=='')
  {  $('#email_input').css('border','1px solid #F00');
   $('#email_input').attr("placeholder", "Email cannot be blank");}
  else
  { 
	if(!IsEmail($('#email_input').val()))
	{$('#email_input').val('');
	 $('#email_input').attr("placeholder", "Invalid Email Address");
	}else
	{
	$('#email_input').css('border','1px solid #cccccc');e=1;}
	}
  
  
   if($('#message_input').val()=='')
  {  $('#message_input').css('border','1px solid #F00');
   $('#message_input').attr("placeholder", "Name cannot be blank");}
  else
  { $('#message_input').css('border','1px solid #cccccc');m=1;}
  if(m==1 && e==1 && n==1)
  {
   $('#contact_us').submit();
   $('#name_input').val('');
   $('#email_input').val('');
   $('#subject_input').val('');
   $('#message_input').val('');
   $('.ajax-loader').css('visibility','visible');
    $('.ajax-loader').fadeOut('slow');
  }
  
  
 
  });
});
</script>
<div class='content'>
<div class='container'>
 <div class="row">
    <h2 style='margin: 0 0 0px 0;'><strong>Contact</strong> Us</h2>                
<div id="builder-column-523b0d53b6146" class="span6">
    <div id="builder-module-523b0d9b82fe2" class="module rich-text">
	<h4 class="pull-top">Get in <strong>touch</strong></h4>
<ul class="unstyled" style='font-size:18px;'>
<li><em class="icon-map-marker"></em> <strong>Office:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 Red Barn Lane Flemington,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 NJ 08822</li><br>
 <li><em class="icon-phone"></em> <strong>Phone:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(908) 313-3313
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(908) 500-6037</li><br>
 <li><em class="icon-envelope"></em> <strong>Email:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRASAD@PRAXIOTECH.COM

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
MOHITHA@PRAXIOTECH.COM</li>
</ul>
<hr>

</div>
        </div>
		<div id="builder-column-523b0d53b6123" class="span6 column_first">
            <div id="builder-module-523b0d58af76f" class="module rich-text">
<div class="wpcf7" id="wpcf7-f4-p12-o1"><form id='contact_us' action="contactpost.php" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="4">
<input type="hidden" name="_wpcf7_version" value="3.5.4">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p12-o1">
<input type="hidden" name="_wpnonce" value="bcca98b18b">
</div>
<div class="row controls">
<div class="span3 control-group">
		<label>Your name *</label><span class="wpcf7-form-control-wrap your-name"><input id='name_input' type="text" name="your-name" value="" size="40" maxlength="100" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required span3" aria-required="true"></span>
	</div>
<div class="span3 control-group">
		<label>Your email address *</label><span class="wpcf7-form-control-wrap your-email"><input id='email_input' type="email" name="your-email" value="" size="40" maxlength="100" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email span3" aria-required="true"></span>
	</div>
</div>
<div class="row controls">
<div class="span6 control-group">
		<label>Subject</label><span class="wpcf7-form-control-wrap your-subject"><input type="text" id='subject_input' name="your-subject" value="" size="40" maxlength="100" class="wpcf7-form-control wpcf7-text span6"></span>
	</div>
</div>
<div class="row controls">
<div class="span6 control-group">
		<label>Message *</label><span class="wpcf7-form-control-wrap your-message"><textarea id='message_input' name="your-message" cols="40" rows="10" maxlength="5000" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required span6" aria-required="true"></textarea></span>
	</div>
</div>
<div class="btn-toolbar">
    <input type="button" id='submit_button' value="Send Message" class="wpcf7-form-control wpcf7-submit btn btn-primary btn-large"><img class="ajax-loader" src="images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"><span class="arrow hlb hidden-phone appear-animation" data-appear-animation="rotateInUpLeft"></span>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
</div>
        </div>
                </div>
</div></div>
<!-- /content -->
        <!-- footer -->
<?php include('footer.php');?>    
	<!-- /footer -->
    </div>
<!-- wrapper --></body></html>