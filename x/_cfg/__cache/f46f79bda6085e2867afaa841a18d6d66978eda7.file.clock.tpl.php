<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-17 03:11:33
         compiled from "x/html/~blox/clock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65894925953c722c5774c98-75103881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f46f79bda6085e2867afaa841a18d6d66978eda7' => 
    array (
      0 => 'x/html/~blox/clock.tpl',
      1 => 1405548041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65894925953c722c5774c98-75103881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUPERDOMX' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c722c577dbb3_17781403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c722c577dbb3_17781403')) {function content_53c722c577dbb3_17781403($_smarty_tpl) {?><div id="clock" align="center" style="display: inline-block">
	<!-- <img title="<?php echo $_smarty_tpl->tpl_vars['SUPERDOMX']->value['version'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=15&q=100&f=png" align="absmiddle"/> -->
	<div id="time"></div>  
</div>
<script type="text/javascript">
	
	var BLINK_CLOCK = false;

	var clock = {
		setClock : function (time) {
			clock.time = new Date(time);
		},
		time : new Date()
	};

	function updateClock ( )
	{
	  var currentTime = clock.time;
	
	  var currentHours = currentTime.getHours ( );
	  var currentMinutes = currentTime.getMinutes ( );
	  var currentSeconds = currentTime.getSeconds ( );
	
	  // Pad the minutes and seconds with leading zeros, if required
	  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
	  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
	
	  // Choose either "AM" or "PM" as appropriate
	  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
	
	  // Convert the hours component to 12-hour format if needed
	  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
	
	  // Convert an hours component of "0" to "12"
	  currentHours = ( currentHours == 0 ) ? 12 : currentHours;

	  var blink = (BLINK_CLOCK) ? ':' : ' ';
	  BLINK_CLOCK = (BLINK_CLOCK) ? false : true;


		var d = clock.time;
		var month=new Array(12);
		month[0]="January";
		month[1]="February";
		month[2]="March";
		month[3]="April";
		month[4]="May";
		month[5]="June";
		month[6]="July";
		month[7]="August";
		month[8]="September";
		month[9]="October";
		month[10]="November";
		month[11]="December";
	
		var zodiac = clock.zodiac = ['♑','♒','♓','♈','♉','♊','♋','♌','♍','♎','♏','♐'];
		var trans = ['20','19','20','20','21','21','23','23','23','23','22','21'];
	  
	  // Compose the string for display - 
	  // var currentTimeString = (currentTime.format) ? 
	  // 	currentTime.format('F jS h:i(s) A') :
	  // 	month[d.getMonth()] + " "+ d.getDay() + " | hi | " + currentHours + blink + currentMinutes + " " + timeOfDay ; 
	
	  var currentTimeString = (typeof currentTime.format != 'undefined') ? 
	  	currentTime.format('F jS' + ' h:i(s) A') :
	  	month[d.getMonth()] + " "+ d.getDate() + " Z " + currentHours + blink + currentMinutes + " " + timeOfDay ; 


	  	var next = ( d.getDate() > trans[d.getMonth()] ) ? 1 : 0;

	  	next = ( d.getMonth() == 11 && next ) ? -11 : next

	  	currentTimeString = currentTimeString.replace('Z','<b>'+zodiac[d.getMonth()+next]+'</b>');

	

	  var point = '<span class="point">:</span>';
	  
	  //x4.theTimeIs = currentTime.format('h') + point + currentTime.format('i');// + point + currentTime.format('s');
	  
	  // Update the time display
	   
	  var digitalClock =  document.getElementById("digitalClock");
	  
	  if(digitalClock){
		  digitalClock.innerHTML = x4.theTimeIs;
	  }

	  document.getElementById("time").innerHTML = currentTimeString;
		
	  setTimeout(updateClock,500);
	}
	updateClock();	
</script><?php }} ?>
