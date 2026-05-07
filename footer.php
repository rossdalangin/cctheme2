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
            <div class="container d-flex align-items-center gap-5 overflow-hidden">
                <span class="small fw-black letter-spacing-lg text-white-50 uppercase tracking-widest opacity-50 flex-shrink-0" style="z-index: 10; background: var(--c-bg); padding-right: 20px;"><?php echo esc_html( get_theme_mod( 'closeclient_footer_ribbon_tag', esc_html__( 'TRUSTED BY INNOVATORS AT:', 'closeclient' ) ) ); ?></span>
                <div class="ticker-mode-wrapper overflow-hidden flex-grow-1">
                    <div class="ticker-mode-content d-flex gap-5 opacity-30 grayscale invert">
                        <?php
                        $logos = get_theme_mod( 'closeclient_footer_ribbon_logos', 'STRATEGY.CO, ELITE.IO, CORE.ENGINE, VORTEX.MEDIA, ATLAS.SYS, NEXUS.BND, OMNI.CORP, QUANTUM.LEAD' );
                        $logos_array = explode( ',', $logos );
                        // Output twice for seamless loop
                        for ($i = 0; $i < 2; $i++) {
                            foreach ( $logos_array as $logo ) :
                                echo '<span class="h5 mb-0 fw-black whitespace-nowrap">' . esc_html( trim( $logo ) ) . '</span>';
                            endforeach;
                        }
                        ?>
                    </div>
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
                <!-- Column 1: Branding -->
                <div class="footer-column footer-branding bento-span-3">
                    <div class="footer-logo mb-4">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="h4 text-white text-decoration-none fw-black tracking-tighter">' . get_bloginfo( 'name' ) . '.</a>';
                        }
                        ?>
                    </div>
                    <p class="footer-about text-muted small mb-4">
                        <?php echo esc_html( get_theme_mod( 'closeclient_footer_about', esc_html__( 'Engineering high-fidelity digital infrastructure for the world\'s most ambitious authorities.', 'closeclient' ) ) ); ?>
                    </p>
                    <div class="footer-social-links d-flex gap-3">
                        <?php
                        $socials = array( 'linkedin', 'twitter', 'youtube', 'instagram' );
                        foreach ( $socials as $social ) :
                            $link = get_theme_mod( "closeclient_social_{$social}", '#' );
                            if ( $link && '#' !== $link ) : ?>
                                <a href="<?php echo esc_url( $link ); ?>" class="social-icon" target="_blank" rel="noopener">
                                    <?php echo closeclient_get_svg( $social ); ?>
                                </a>
                            <?php endif;
                        endforeach; ?>
                    </div>
                </div>

                <!-- Column 2: Solutions -->
                <div class="footer-column bento-span-2">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col2_title', esc_html__( 'The Protocol', 'closeclient' ) ) ); ?></h3>
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

                <!-- Column 3: Strategic Assets -->
                <div class="footer-column bento-span-2">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col3_title', esc_html__( 'Strategic', 'closeclient' ) ) ); ?></h3>
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

                <!-- Column 4: Resources -->
                <div class="footer-column bento-span-2">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col4_title', esc_html__( 'Company', 'closeclient' ) ) ); ?></h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-3',
                            'menu_id'        => 'footer-menu-3',
                            'container'      => false,
                            'fallback_cb'    => 'closeclient_footer_3_fallback',
                            'menu_class'     => 'list-unstyled small text-muted',
                        )
                    );
                    ?>
                </div>

                <!-- Column 5: Command -->
                <div class="footer-column bento-span-3">
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col5_title', esc_html__( 'Command', 'closeclient' ) ) ); ?></h3>
                    <p class="small text-muted mb-4"><?php echo esc_html( get_theme_mod( 'closeclient_footer_cta_text_label', esc_html__( 'Ready to engineer your scale?', 'closeclient' ) ) ); ?></p>
                    <a href="<?php echo esc_url( get_theme_mod( 'closeclient_header_cta_link', '#audit' ) ); ?>" class="cc-button footer-cta-btn">
                        <?php echo esc_html( get_theme_mod( 'closeclient_header_cta_text', esc_html__( 'Initiate Audit →', 'closeclient' ) ) ); ?>
                    </a>
                </div>
            </div>

            <div class="footer-bottom mt-5 pt-5 border-top border-secondary">
                <div class="footer-disclaimer mb-4">
                    <p class="small text-muted mb-0"><?php echo esc_html( get_theme_mod( 'closeclient_footer_disclaimer', esc_html__( 'Consulting and engineering services are subject to terms. Results may vary by market.', 'closeclient' ) ) ); ?></p>
                </div>

                <div class="site-info d-flex justify-content-between align-items-center flex-wrap gap-5">
                    <div class="d-flex align-items-center gap-3">
                        <p class="copyright small text-muted mb-0"><?php echo esc_html( get_theme_mod( 'closeclient_footer_copyright', esc_html__( '© CloseClient. All rights reserved.', 'closeclient' ) ) ); ?></p>
                        <div class="operational-status d-flex align-items-center gap-2 ps-3 border-start border-secondary">
                            <span class="status-dot-mini"></span>
                            <span class="small text-white-50 fw-bold letter-spacing-xs opacity-50 uppercase" style="font-size: 0.6rem;">System: 100% Operational</span>
                        </div>
                    </div>
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
