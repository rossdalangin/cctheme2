<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CloseClient
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found glass p-5 error-404-container text-center reveal section-lg">
			<header class="page-header mb-5">
                <span class="section-tag"><?php echo esc_html( get_theme_mod( 'closeclient_label_404_tag', '404 - SYSTEM DISRUPTION' ) ); ?></span>
				<h1 class="page-title h2 gradient-text"><?php echo esc_html( get_theme_mod( 'closeclient_label_404_title', 'Protocol Interrupted: Resource Not Found.' ) ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="lead text-muted mb-5"><?php echo esc_html( get_theme_mod( 'closeclient_label_404_text', 'The strategic asset you are looking for has either been relocated or is currently undergoing a technical audit. Return to the central hub to continue your authority journey.' ) ); ?></p>

				<?php get_search_form(); ?>

                <div class="cta-actions mt-5">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cc-button cc-button-secondary"><?php echo esc_html( get_theme_mod( 'closeclient_label_404_btn', 'Return to Central Hub' ) ); ?></a>
                </div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

        <?php get_template_part( 'template-parts/sections/section-booking-cta' ); ?>

	</main><!-- #main -->

<?php
get_footer();
