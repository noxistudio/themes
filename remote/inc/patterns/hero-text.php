<?php
/**
 * Hero text
 */
return array(
	'title'      => __( 'Hero text', 'remote' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"wide"} -->
    <div class="wp-block-group alignwide"><!-- wp:spacer {"height":"32px"} -->
    <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.17"}},"fontSize":"huge"} -->
    <p class="has-huge-font-size" style="line-height:1.17">' . esc_html__( 'Hi, I’m Tiffany! After years of long commutes and crowded offices, I’m now a happy advocate for remote work.', 'remote' ) . '</p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer -->
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->',
);
