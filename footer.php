<?php
/**
 * The template for displaying the footer
 *
 * @package CloseClient
 */

?>

    <?php if ( ! is_page_template( 'template-canvas.php' ) ) : ?>
	<footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
        <div class="authority-ribbon border-bottom border-secondary mb-5 reveal">
            <div class="container d-flex justify-content-between align-items-center flex-wrap gap-5">
                <span class="small fw-black letter-spacing-lg text-white-50 uppercase tracking-widest opacity-50"><?php echo esc_html( get_theme_mod( 'closeclient_footer_ribbon_tag', esc_html__( 'TRUSTED BY INNOVATORS AT:', 'closeclient' ) ) ); ?></span>
                <div class="d-flex gap-5 flex-wrap opacity-30 grayscale invert ticker-mode">
                    <?php
                    $logos = get_theme_mod( 'closeclient_footer_ribbon_logos', 'STRATEGY.CO, ELITE.IO, CORE.ENGINE, VORTEX.MEDIA' );
                    $logos_array = explode( ',', $logos );
                    foreach ( $logos_array as $logo ) :
                        echo '<span class="h5 mb-0 fw-black">' . esc_html( trim( $logo ) ) . '</span>';
                    endforeach;
                    ?>
                </div>
            </div>
        </div>

		<div class="container">
            <?php if ( get_theme_mod( 'closeclient_footer_newsletter_show', '0' ) === '1' ) : ?>
                <div class="footer-newsletter-wrap mb-5 pb-5 border-bottom border-secondary">
                    <?php get_template_part( 'template-parts/sections/section-newsletter' ); ?>
                </div>
            <?php endif; ?>

            <div class="footer-grid bento-grid reveal-stagger">
                <!-- Column 1: Branding & About -->
                <div class="footer-column footer-branding bento-span-5">
                    <div class="footer-logo mb-4">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="h4 text-white text-decoration-none">' . get_bloginfo( 'name' ) . '</a>';
                        }
                        ?>
                    </div>
                    <p class="footer-about text-muted small mb-4">
                        <?php echo esc_html( get_theme_mod( 'closeclient_footer_about', esc_html__( 'Engineering the future of digital authority for the world\'s most ambitious brands.', 'closeclient' ) ) ); ?>
                    </p>
                    <div class="footer-social-links d-flex gap-3">
                        <?php
                        $socials = array( 'twitter', 'facebook', 'linkedin', 'instagram', 'youtube' );
                        foreach ( $socials as $social ) :
                            $link = get_theme_mod( "closeclient_social_{$social}", '#' );
                            if ( $link && '#' !== $link ) : ?>
                                <a href="<?php echo esc_url( $link ); ?>" class="social-icon" target="_blank" rel="noopener" title="<?php echo esc_attr( ucfirst( $social ) ); ?>">
                                    <span class="screen-reader-text"><?php echo esc_html( ucfirst( $social ) ); ?></span>
                                    <?php echo closeclient_get_svg( $social ); ?>
                                </a>
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>

                <!-- Column 2: Solutions -->
                <div class="footer-column bento-span-2">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col2_title', esc_html__( 'Solutions', 'closeclient' ) ) ); ?></h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-1',
                            'menu_id'        => 'footer-menu-1',
                            'container'      => false,
                            'fallback_cb'    => 'closeclient_footer_1_fallback',
                            'menu_class'     => 'list-unstyled small text-muted',
                        )
                    );
                    ?>
                </div>

                <!-- Column 3: Resources -->
                <div class="footer-column bento-span-2">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col3_title', esc_html__( 'Resources', 'closeclient' ) ) ); ?></h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-2',
                            'menu_id'        => 'footer-menu-2',
                            'container'      => false,
                            'fallback_cb'    => 'closeclient_footer_2_fallback',
                            'menu_class'     => 'list-unstyled small text-muted',
                        )
                    );
                    ?>
                </div>

                <!-- Column 4: Connect/CTA -->
                <div class="footer-column bento-span-3">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col4_title', esc_html__( 'Connect', 'closeclient' ) ) ); ?></h3>
                    <p class="small text-muted mb-5"><?php echo esc_html( get_theme_mod( 'closeclient_footer_cta_text_label', esc_html__( 'Ready to engineer your authority?', 'closeclient' ) ) ); ?></p>
                    <a href="<?php echo esc_url( get_theme_mod( 'closeclient_header_cta_link', '#audit' ) ); ?>" class="cc-button footer-cta-btn">
                        <?php echo esc_html( get_theme_mod( 'closeclient_header_cta_text', esc_html__( 'Apply for Your Authority Audit →', 'closeclient' ) ) ); ?>
                    </a>
                </div>
            </div>

            <div class="footer-bottom mt-5 pt-5 border-top border-secondary">
                <div class="footer-disclaimer mb-4">
                    <p class="small text-muted mb-0"><?php echo esc_html( get_theme_mod( 'closeclient_footer_disclaimer', esc_html__( 'Consulting and engineering services are subject to terms. Results may vary by market.', 'closeclient' ) ) ); ?></p>
                </div>

                <div class="site-info d-flex justify-content-between align-items-center flex-wrap gap-5">
                    <p class="copyright small text-muted mb-0"><?php echo esc_html( get_theme_mod( 'closeclient_footer_copyright', esc_html__( '© CloseClient. All rights reserved.', 'closeclient' ) ) ); ?></p>
                    <div class="footer-meta-links small text-muted">
                         <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="text-muted text-decoration-none me-3"><?php echo esc_html( get_theme_mod( 'closeclient_footer_privacy_label', esc_html__( 'Privacy Policy', 'closeclient' ) ) ); ?></a>
                         <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>" class="text-muted text-decoration-none"><?php echo esc_html( get_theme_mod( 'closeclient_footer_terms_label', esc_html__( 'Terms of Service', 'closeclient' ) ) ); ?></a>
                    </div>

                    <a href="#page" class="back-to-top small text-accent text-decoration-none">
                        <?php echo esc_html( get_theme_mod( 'closeclient_footer_back_top', esc_html__( 'BACK TO TOP ↑', 'closeclient' ) ) ); ?>
                    </a>
                </div>
            </div>
		</div>
	</footer><!-- #colophon -->
    <?php endif; ?>

    <?php if ( get_theme_mod( 'closeclient_show_floating_cta', false ) ) : ?>
        <a href="#audit" class="floating-cta cc-button">
            <?php echo esc_html( get_theme_mod( 'closeclient_header_cta_text', 'Apply for Your Authority Audit →' ) ); ?>
        </a>
    <?php endif; ?>
</div><!-- #page -->

<?php get_template_part( 'template-parts/content/audit-modal' ); ?>

<?php wp_footer(); ?>

</body>
</html>
