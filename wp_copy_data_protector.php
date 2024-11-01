<?php

/*
  Plugin Name: WP Copy Data Protector
  Plugin URI: http://www.rutujacreation.com/
  Description: [Including IE9, IE10] - WP Copy Data Protector is protect your Content, Images and Disable Right Click, CTRL+A, CTRL+C, CTRL+X, CTRL+U AND CTRL+P.
  Version: 1.1
  Author: Rupesh Jorkar(RJ)
  Author URI: http://www.rutujacreation.com/
  License: GPLv2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action('wp_head', 'wp_copy_data_protector');

function wp_copy_data_protector() { ?>

<noscript><div style="position:fixed; top:0px; left:0px; z-index:999999; height:100%; width:100%; background-color:#FFFFFF"><div style="font-family: Arial, Helvetica, sans-serif; font-size: 20px; background-color:#FF0000; padding: 10pt;">JavaScript must be enabled in order for you to see "WP Copy Data Protect" effect. However, it seems JavaScript is either disabled or not supported by your browser. To see full result of "WP Copy Data Protector", enable JavaScript by changing your browser options, then <a href="<?=get_bloginfo('url');?>">try again</a>.</div></div></noscript>

<script type="text/javascript">
window.onload = function() {
if (typeof document.body.onselectstart!="undefined")
	document.body.onselectstart=function(){return false}
else if (typeof document.body.style.MozUserSelect!="undefined")
	document.body.style.MozUserSelect="none"
else 
	document.body.onmousedown=function(){return false}
document.body.style.cursor = "default"
}
</script>

<script type="text/javascript">
function mousecheck(e) {
try { if (event.button == 2||event.button == 3) return false; }
catch (e) { if (e.which == 3) return false; }
}
	document.oncontextmenu = function() { return false; }
	document.ondragstart   = function() { return false; }
	document.onmousedown   = mousecheck;
</script>

<script type="text/javascript">

//if (top.location != self.location) top.location.replace(self.location);
</script>

<style type="text/css">
* : (input, textarea) {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
}
img {
	    -webkit-touch-callout: none;
	    -webkit-user-select: none;		
    }
</style>
<!--
/***
**
*** Below code for set IE-9 IE-10 
**
-->
	<script type='text/javascript'>
window.addEventListener("keydown",function (e) {
	var key;
	if(window.event){
		key = window.event.keyCode;
		if(e.ctrlKey && (key == 65 || key == 67 || key == 85 || key == 80 || key == 83 )){
			
			alert("Key combination CTRL + "+String.fromCharCode(key) +" has been disabled.");
			return false;
		}else{
			return true;
		}
	}else{
		key = e.which;
		if(e.keyCode == 123 || ( e.ctrlKey && (key == 65 || key == 67 || key == 85 || key == 80 || key == 83))){
			e.preventDefault();
			return false;
		}else{
			return true;
		}
	}
});
</script>
<?php 
} 
?>