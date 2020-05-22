<?php
function theme_enqueue_styles() {
$parent_style = 'parent-style';
wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) ); } add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function wpb_demo_shortcode() { 
 
// Things that you want to do. 
$message = '<div class="CustomRequestBanner">
<h2 style="text-align: center; color: #282828;font-weight: bold;margin-top:10px;">Requesting Custom Designs</h2>
<center>
<table class="CustomRequestBanner" style="width: 100%; margin-left: auto; margin-right: auto;">
<tbody>
<tr>
<td style="width: 33%;">
<h2 style="text-align: center; color: #81d742;font-size:15px;">Step 1</h2>
</td>
<td style="width: 33%;">
<h2 style="text-align: center; color: #81d742;font-size:15px;">Step 2</h2>
</td>
<td style="width: 33%;">
<h2 style="text-align: center; color: #81d742;font-size:15px;">Step 3</h2>
</td>
</tr>
<tr>
<td style="width: 33%;">
<p style="text-align: center;">&nbsp;Send Description of desired design, along with contact information.</p>
</td>
<td style="width: 33%;">
<p style="text-align: center;">Check e-mail for a quotation.</p>
</td>
<td style="width: 33%;">
<p style="text-align: center;">Reply to email for confirmation or any other enquiries.&nbsp;</p>
</td>
</tr>
</tbody>
</table></center>
  </div>'; 
 
// Output needs to be return
return $message;
} 
// register shortcode
add_shortcode('CustomDesignBanner', 'wpb_demo_shortcode'); 
?>