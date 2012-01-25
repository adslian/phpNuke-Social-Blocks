<?php

/**
 * @author Enrique Montes <emontes@dstr.net>
 * @version 1.0
 * @package phpNuke Social Blocks
 * @link https://github.com/emontes/phpNuke-Social-Blocks
 * Documentation on FB: http://developers.facebook.com/docs/reference/plugins/comments/
 */

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}
$furl = "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$fwidth = 470;  //width of the displaying area
$fnumposts = 2; //number of posts to show
$fbuserid = "";
$fbappid = "";

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
$content ="<div class=\"fb-comments\" data-href=\"$furl\" data-num-posts=\"$fnumposts\" data-width=\"$fwidth\"></div>";
if ($fbuserid <> ""){
	$content .= "<meta property=\"fb:admins\" content=\"$fbuserid\"/>";
}

if ($fbappid <> ""){
	$content .= "<meta property=\"fb:app_id\" content=\"$fbappid\"/>";
}

?>