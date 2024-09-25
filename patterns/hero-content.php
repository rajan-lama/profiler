<?php
 /**
  * Title: Hero Content
  * Slug: profiler/hero-content
  * Categories: profiler
  */
?>
<!-- wp:group {"metadata":{"name":"Hero Content"},"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","right":"30px","left":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="padding-top:80px;padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":14,"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"2px","color":"#111","radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/man.jpg" alt="" class="has-border-color wp-image-14" style="border-color:#111;border-width:2px;border-radius:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:60%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"var:preset|spacing|20","bottom":"0rem","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-group" style="padding-top:0rem;padding-right:var(--wp--preset--spacing--20);padding-bottom:0rem;padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"textColor":"lite-green","fontSize":"extra-large"} -->
<h2 class="wp-block-heading has-lite-green-color has-text-color has-extra-large-font-size"><?php _e ( 'I am John Doe.','profiler' ); ?> </h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size">- <span><?php _e ( 'Software Engineer','profiler' ); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php _e ( 'I am a WordPress based web designer &amp; front‑end developer focused on crafting clean &amp; user‑friendly experiences, I am passionate about building excellent software that improves the lives of those around me.','profiler' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:0px;margin-bottom:0px"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php _e ( 'More About Me','profiler' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"vivid-green-cyan","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-vivid-green-cyan-background-color has-background has-text-align-center wp-element-button"><?php _e ( 'Hire Me','profiler' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->