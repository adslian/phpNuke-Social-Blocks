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

$domain = "turista.com.mx";
$fwidth = 300;  //width of the displaying area
$fheight = 300; //height of the displaying area

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
$content ="<div class=\"fb-activity\" data-site=\"$domain\" data-width=\"$fwidth\" data-height=\"$fheight\" data-header=\"true\" data-recommendations=\"false\"></div>";
?>