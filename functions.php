<?php
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	function my_theme_enqueue_styles() {
		wp_enqueue_style( 'listingpr-parent-style', get_template_directory_uri() . '/style.css' );
	}
	
	/* ============== Listingpro Sharing ============ */	
	if(!function_exists('listingpro_sharing')){
		function listingpro_sharing() {
			?>
			<a class="reviews-quantity">
				<span class="reviews-stars">
					<i class="fa fa-share-alt"></i>
				</span>
				<?php echo esc_html__('Share', 'listingpro');?>
			</a>
			<div class="md-overlay hide"></div>
			<ul class="social-icons post-socials smenu">
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('facebook'); ?>" target="_blank"><!-- Facebook icon by Icons8 -->
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('twitter'); ?>" target="_blank"><!-- twitter icon by Icons8 -->
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('linkedin'); ?>" target="_blank"><!-- linkedin icon by Icons8 -->
						<i class="fa fa-linkedin"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('pinterest'); ?>" target="_blank"><!-- pinterest icon by Icons8 -->
						<i class="fa fa-pinterest"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('reddit'); ?>" target="_blank"><!-- reddit icon by Icons8 -->
						<i class="fa fa-reddit"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('stumbleupon'); ?>" target="_blank"><!-- stumbleupon icon by Icons8 -->
						<i class="fa fa-stumbleupon"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo listingpro_social_sharing_buttons('del'); ?>" target="_blank"><!-- delicious icon by Icons8 -->
						<i class="fa fa-delicious"></i>
					</a>
				</li>
			</ul>
			<?php
		}
	}
	
	/* ============== Listingpro Sharing ============ */

if( !function_exists('listingpro_sharing_v2' ) ){
    function listingpro_sharing_v2()
    {
        ?>
        <a href="" class="lp-single-sharing"><i class="fa fa-share-alt" aria-hidden="true"></i> <?php echo esc_html__('Share', 'listingpro');?></a>
        <div class="md-overlay hide"></div>
        <div class="social-icons post-socials smenu">
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('facebook'); ?>" target="_blank"><!-- Facebook icon by Icons8 -->
                    <i class="fa fa-facebook"></i>
                </a>
            </div>
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('twitter'); ?>" target="_blank"><!-- twitter icon by Icons8 -->
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('linkedin'); ?>" target="_blank"><!-- linkedin icon by Icons8 -->
                    <i class="fa fa-linkedin"></i>
                </a>
            </div>
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('pinterest'); ?>" target="_blank"><!-- pinterest icon by Icons8 -->
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('reddit'); ?>" target="_blank"><!-- reddit icon by Icons8 -->
                    <i class="fa fa-reddit"></i>
                </a>
            </div>
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('stumbleupon'); ?>" target="_blank"><!-- stumbleupon icon by Icons8 -->
                    <i class="fa fa-stumbleupon"></i>
                </a>
            </div>
            <div>
                <a href="<?php echo listingpro_social_sharing_buttons('del'); ?>" target="_blank"><!-- delicious icon by Icons8 -->
                    <i class="fa fa-delicious"></i>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
    }
}

?>
