<?php
 /**
  * Title: 404 Error Page
  * Slug: profiler/error-404
  * Categories: profiler
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:heading {"style":{"typography":{"fontSize":"clamp(4rem, 20vw, 10rem)","fontWeight":"200","lineHeight":"1"}},"textColor":"foreground","className":"has-text-align-center"} -->
<h2 class="has-text-align-center has-foreground-color has-text-color" style="font-size:clamp(4rem, 20vw, 10rem);font-weight:200;line-height:1"> <?php _e( '4', 'profiler' ); ?><mark style="background-color: rgba(0, 0, 0, 0)" class="has-inline-color has-secondary-color"><?php _e( '0', 'profiler' ); ?></mark><?php _e( '4', 'profiler' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php _e( 'This page could not be found. Maybe try a search?', 'profiler' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search Now","width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","backgroundColor":"primary","textColor":"white"} /--></div>
<!-- /wp:group -->