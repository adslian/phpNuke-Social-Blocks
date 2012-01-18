<?php

/**
 * @author Enrique Montes <emontes@dstr.net>
 * @version 1.0
 * @package phpNuke Social Blocks
 * @link https://github.com/emontes/phpNuke-Social-Blocks
 */

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

$faceurl = "http://www.facebook.com/pages/Fun-Vacation-World/328531917165895";
$fwidth = 600;  //width of the displaying area
$fheight = 800; //height of the displaying area

?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
$content ="<div class=\"fb-like-box\" data-href=\"$faceurl\" data-width=\"$fwidth\" data-height=\"$fheight\" data-show-faces=\"false\" data-stream=\"true\" data-header=\"false\"></div>";
?>