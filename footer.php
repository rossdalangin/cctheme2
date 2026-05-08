<?php
/**
 * The template for displaying the footer
 *
 * @package CloseClient
 */

?>

    <?php if ( ! is_page_template( 'template-canvas.php' ) ) : ?>
	<footer id="colophon" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
        <?php if ( get_theme_mod( 'closeclient_show_authority_ribbon', '1' ) === '1' ) : ?>
            <div class="authority-ribbon border-bottom border-secondary mb-5 reveal">
                <div class="container d-flex align-items-center gap-5 overflow-hidden">
                    <div class="d-flex align-items-center gap-3 flex-shrink-0" style="z-index: 10; background: var(--c-bg); padding-right: 20px;">
                        <div class="live-dot-mini"></div>
                        <span class="small fw-black letter-spacing-lg text-white-50 uppercase tracking-widest opacity-50"><?php echo esc_html( get_theme_mod( 'closeclient_footer_ribbon_tag', 'TRUSTED BY INNOVATORS AT:' ) ); ?></span>
                    </div>
                    <div class="ticker-mode-wrapper overflow-hidden flex-grow-1">
                        <div class="ticker-mode-content d-flex gap-5 opacity-20 grayscale">
                            <?php
                            $logos = get_theme_mod( 'closeclient_footer_ribbon_logos', 'STRATEGY.CO, ELITE.IO, CORE.ENGINE, VORTEX.MEDIA, ATLAS.SYS, NEXUS.BND, OMNI.CORP, QUANTUM.LEAD' );
                            $logos_array = explode( ',', $logos );
                            // Output twice for seamless loop
                            for ($i = 0; $i < 2; $i++) {
                                foreach ( $logos_array as $logo ) :
                                    echo '<span class="small mb-0 fw-bold whitespace-nowrap uppercase letter-spacing-lg">' . esc_html( trim( $logo ) ) . '</span>';
                                endforeach;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

		<div class="container">
            <?php if ( get_theme_mod( 'closeclient_footer_newsletter_show', '0' ) === '1' ) : ?>
                <div class="footer-newsletter-wrap mb-5 pb-5 border-bottom border-secondary">
                    <?php get_template_part( 'template-parts/sections/section-newsletter' ); ?>
                </div>
            <?php endif; ?>

            <div class="footer-grid bento-grid reveal-stagger">
                <!-- Column 1: Branding -->
                <div class="footer-column footer-branding bento-span-4 position-relative overflow-hidden">
                    <div class="footer-watermark">CC</div>
                    <div class="footer-logo mb-4">
                        <?php
                        if ( has_custom_logo() ) {
                            the_custom_logo();
                        } else {
                            echo '<a href="' . esc_url( home_url( '/' ) ) . '" class="h4 text-white text-decoration-none fw-black tracking-tighter">' . get_bloginfo( 'name' ) . '.</a>';
                        }
                        ?>
                        <span class="d-block small text-white-50 opacity-30 fw-bold letter-spacing-lg mt-2 node-sync-label" style="font-size: 0.5rem; text-transform: uppercase;">Authority Infrastructure</span>
                    </div>
                    <p class="footer-about text-muted small mb-5">
                        <?php echo esc_html( get_theme_mod( 'closeclient_footer_about', 'Engineering high-fidelity digital infrastructure for the world\'s most ambitious high-ticket authorities.' ) ); ?>
                    </p>

                    <div class="footer-social-links d-flex gap-3 align-items-center mb-5">
                        <?php
                        if ( current_user_can('manage_options') ) : ?>
                            <a href="<?php echo admin_url('admin.php?page=authority-hub'); ?>" class="social-icon" title="Terminal Access">
                                <?php echo closeclient_get_svg('terminal'); ?>
                            </a>
                        <?php endif;
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

                    <div class="footer-contact-info">
                        <?php
                        $f_email = get_theme_mod( 'closeclient_contact_email', 'solutions@closeclient.io' );
                        $f_phone = get_theme_mod( 'closeclient_contact_phone', '+1 (888) 555-0123' );
                        if ($f_email) echo '<div class="small text-muted mb-2 d-flex align-items-center gap-2">'.closeclient_get_svg('email').' '.esc_html($f_email).'</div>';
                        if ($f_phone) echo '<div class="small text-muted mb-2 d-flex align-items-center gap-2">'.closeclient_get_svg('phone').' '.esc_html($f_phone).'</div>';
                        ?>
                    </div>
                </div>

                <!-- Column 2: Navigation -->
                <div class="footer-column bento-span-4 px-lg-5 d-flex flex-column">
                    <div class="footer-icon-tag mb-3 opacity-20"><?php echo closeclient_get_svg('protocol'); ?></div>
                    <h3 class="footer-title h6 mb-4"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col2_title', 'Navigation' ) ); ?></h3>

                    <div class="footer-nav-grid mb-auto">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-1',
                                'menu_id'        => 'footer-menu-1',
                                'container'      => false,
                                'fallback_cb'    => 'closeclient_footer_1_fallback',
                                'menu_class'     => 'list-unstyled small text-muted mb-4',
                            )
                        );

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

                    <div class="footer-meta-nav mt-5 pt-4 border-top border-white-10">
                         <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-3',
                                'menu_id'        => 'footer-menu-3',
                                'container'      => false,
                                'fallback_cb'    => 'closeclient_footer_3_fallback',
                                'menu_class'     => 'list-unstyled small text-muted d-flex flex-wrap gap-4',
                            )
                        );
                        ?>
                    </div>
                </div>

                <!-- Column 3: Terminal Command -->
                <div class="footer-column bento-span-4 footer-command">
                    <div class="footer-icon-tag mb-3 opacity-20"><?php echo closeclient_get_svg('terminal'); ?></div>
                    <h3 class="footer-title h6"><?php echo esc_html( get_theme_mod( 'closeclient_footer_col5_title', 'Command' ) ); ?></h3>
                    <p class="small text-muted mb-4"><?php echo esc_html( get_theme_mod( 'closeclient_footer_cta_text_label', 'Ready to engineer your authority?' ) ); ?></p>

                    <div class="footer-system-search mb-4">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="position-relative">
                                <input type="search" class="search-field small py-3 ps-4" style="font-size: 0.7rem; border-radius: 8px; letter-spacing: 0.1em; background: rgba(255,255,255,0.02);" placeholder="SEARCH PROTOCOLS..." value="<?php echo get_search_query(); ?>" name="s" />
                                <button type="submit" class="search-submit social-icon position-absolute end-0 top-0 h-100 border-0 bg-transparent px-3 text-accent" style="width: auto; height: 100%; border-radius: 0;"><?php echo closeclient_get_svg('arrow-right'); ?></button>
                            </div>
                        </form>
                    </div>

                    <div class="footer-quick-diagnostic mb-4">
                        <div class="position-relative cursor-pointer trigger-audit-modal">
                            <input type="text" class="small py-2 border-accent opacity-50 w-100" style="font-size: 0.65rem; background: rgba(var(--c-accent-rgb), 0.05); pointer-events: none;" placeholder="INITIATE DIAGNOSTIC..." readonly />
                            <span class="position-absolute end-0 top-0 h-100 d-flex align-items-center px-3 text-accent"><?php echo closeclient_get_svg('protocol'); ?></span>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( get_theme_mod( 'closeclient_header_cta_link', '#audit' ) ); ?>" class="cc-button footer-cta-btn w-100 text-center">
                        <?php echo esc_html( get_theme_mod( 'closeclient_footer_cta_btn_text', 'Initiate Audit Protocol →' ) ); ?>
                    </a>
                </div>
            </div>

            <!-- Infrastructure Console: Technical Telemetry Layer -->
            <div class="footer-console glass border-accent rounded-lg mt-5 p-4 reveal">
                <div class="console-grid d-flex flex-wrap justify-content-between align-items-center gap-5">
                    <div class="console-specs d-flex gap-5 opacity-40">
                        <div class="spec-item small fw-bold" style="font-size: 0.55rem; letter-spacing: 0.1em;"><span class="text-accent">SYSTEM:</span> CC.ALPHA</div>
                        <div class="spec-item small fw-bold" style="font-size: 0.55rem; letter-spacing: 0.1em;"><span class="text-accent">CORE:</span> INFRA.V2</div>
                        <div class="spec-item small fw-bold" style="font-size: 0.55rem; letter-spacing: 0.1em;"><span class="text-accent">SYNC:</span> ACTIVE</div>
                        <div class="spec-item d-none d-lg-block small fw-bold" style="font-size: 0.55rem; letter-spacing: 0.1em;"><span class="text-accent">NODE:</span> DC.01</div>
                        <div class="spec-item d-none d-xl-block small fw-bold" style="font-size: 0.55rem; letter-spacing: 0.1em;"><span class="text-accent">SESSION:</span> <span data-session-timer>00:00</span></div>
                    </div>

                    <div class="console-diagnostics d-flex gap-5 flex-grow-1 justify-content-center opacity-60" role="status" aria-live="polite" aria-label="System Telemetry">
                        <div class="diag-item d-flex align-items-center gap-3">
                            <span class="small fw-black" style="font-size: 0.5rem; letter-spacing: 0.1em;">ENCR:</span>
                            <span class="small text-accent fw-bold" style="font-size: 0.55rem; width: 60px; display: inline-block;" data-encryption-cipher>AES-256</span>
                        </div>
                        <div class="diag-item d-flex align-items-center gap-3">
                            <span class="small fw-black" style="font-size: 0.5rem; letter-spacing: 0.1em;">LATENCY:</span>
                            <span class="small text-accent fw-bold" style="font-size: 0.55rem;" data-latency>0.04 MS</span>
                        </div>
                        <div class="diag-item d-flex align-items-center gap-3">
                            <span class="small fw-black" style="font-size: 0.5rem; letter-spacing: 0.1em;">LOAD:</span>
                            <span class="small text-accent fw-bold" style="font-size: 0.55rem;" data-load>14%</span>
                        </div>
                        <div class="diag-item d-none d-md-flex align-items-center gap-2" style="height: 12px;">
                            <div class="system-health-bar bg-accent opacity-50" style="width: 3px; animation: health-grow 1.2s infinite ease-in-out;"></div>
                            <div class="system-health-bar bg-accent opacity-50" style="width: 3px; animation: health-grow 0.8s infinite ease-in-out 0.2s;"></div>
                            <div class="system-health-bar bg-accent opacity-50" style="width: 3px; animation: health-grow 1.5s infinite ease-in-out 0.4s;"></div>
                        </div>
                    </div>

                    <div class="console-actions d-flex align-items-center gap-4">
                         <div class="footer-quick-diagnostic d-none d-md-block">
                            <div class="position-relative cursor-pointer trigger-audit-modal">
                                <input type="text" class="small py-2 border-accent opacity-50" style="font-size: 0.55rem; background: rgba(var(--c-accent-rgb), 0.05); pointer-events: none; width: 160px;" placeholder="INITIATE DIAGNOSTIC..." readonly />
                                <span class="position-absolute end-0 top-0 h-100 d-flex align-items-center px-3 text-accent"><?php echo closeclient_get_svg('protocol'); ?></span>
                            </div>
                        </div>
                        <div class="operational-status d-flex align-items-center gap-2" aria-live="polite">
                            <span class="status-dot-mini" style="background: <?php echo esc_attr( get_theme_mod( 'closeclient_footer_status_color', '#10B981' ) ); ?>; box-shadow: 0 0 8px <?php echo esc_attr( get_theme_mod( 'closeclient_footer_status_color', '#10B981' ) ); ?>80;"></span>
                            <span class="small text-white-50 fw-bold letter-spacing-xs uppercase" style="font-size: 0.6rem;"><?php echo esc_html( get_theme_mod( 'closeclient_footer_status_text', 'System: 100% Operational' ) ); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom mt-5 pt-5 border-top border-secondary">
                <div class="footer-global-footprint d-flex justify-content-center gap-5 mb-5 opacity-20 reveal" aria-label="Global Operations Times">
                    <div class="small fw-black" style="font-size: 0.55rem; letter-spacing: 0.2em;">NYC / <span class="live-clock" data-offset="-5">--:--</span></div>
                    <div class="small fw-black" style="font-size: 0.55rem; letter-spacing: 0.2em;">LDN / <span class="live-clock" data-offset="0">--:--</span></div>
                    <div class="small fw-black" style="font-size: 0.55rem; letter-spacing: 0.2em;">SIN / <span class="live-clock" data-offset="8">--:--</span></div>
                    <div class="small fw-black" style="font-size: 0.55rem; letter-spacing: 0.2em;">SYD / <span class="live-clock" data-offset="11">--:--</span></div>
                </div>
                <div class="footer-disclaimer mb-4">
                    <p class="small text-muted mb-0"><?php echo esc_html( get_theme_mod( 'closeclient_footer_disclaimer', 'Consulting and engineering services are subject to terms. Results may vary by market.' ) ); ?></p>
                </div>

                <div class="site-info d-flex justify-content-between align-items-center flex-wrap gap-5">
                    <div class="d-flex align-items-center gap-3">
                        <p class="copyright small text-muted mb-0">
                            <?php
                            $copyright = get_theme_mod( 'closeclient_footer_copyright', '© {year} CloseClient. All rights reserved.' );
                            echo esc_html( str_replace( '{year}', date('Y'), $copyright ) );
                            ?>
                        </p>
                    </div>
                    <div class="footer-meta-links small text-muted d-flex align-items-center">
                         <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="text-muted text-decoration-none me-3 hover-text-white transition-all"><?php echo esc_html( get_theme_mod( 'closeclient_footer_privacy_label', 'Privacy Policy' ) ); ?></a>
                         <span class="opacity-10 me-3">/</span>
                         <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>" class="text-muted text-decoration-none me-3 hover-text-white transition-all"><?php echo esc_html( get_theme_mod( 'closeclient_footer_terms_label', 'Terms of Service' ) ); ?></a>
                         <div class="secure-connection-badge ms-3 d-none d-md-flex align-items-center gap-2 opacity-30">
                            <span style="font-size: 0.5rem;"><?php echo closeclient_get_svg('check'); ?></span>
                            <span class="fw-black uppercase" style="font-size: 0.45rem; letter-spacing: 0.1em;">TLS 1.3 ACTIVE</span>
                         </div>
                         <div class="verification-seal ms-3 d-none d-md-flex align-items-center gap-2 opacity-30 ps-3 border-start border-secondary">
                            <span class="fw-black uppercase" style="font-size: 0.45rem; letter-spacing: 0.1em;">VERIFIED INFRASTRUCTURE</span>
                            <span style="font-size: 0.6rem; color: var(--c-accent);"><?php echo closeclient_get_svg('protocol'); ?></span>
                         </div>
                    </div>

                    <a href="#page" class="back-to-top social-icon small text-accent text-decoration-none d-flex align-items-center gap-2" style="width: auto; height: auto; border: none; background: transparent;">
                        <span class="back-to-top-text"><?php echo esc_html( get_theme_mod( 'closeclient_footer_back_top', 'BACK TO TOP ↑' ) ); ?></span>
                        <span class="back-to-top-icon"><?php echo closeclient_get_svg('arrow-right', 'rotate-n90'); ?></span>
                    </a>
                </div>
            </div>
		</div>
	</footer><!-- #colophon -->
    <?php endif; ?>


    <?php if ( get_theme_mod( 'closeclient_show_floating_cta', false ) ) : ?>
        <a href="#audit" class="floating-cta cc-button">
            <?php echo esc_html( get_theme_mod( 'closeclient_header_cta_text', 'Apply for Strategic Audit →' ) ); ?>
        </a>
    <?php endif; ?>
</div><!-- #page -->

<?php get_template_part( 'template-parts/content/audit-modal' ); ?>

<?php wp_footer(); ?>

</body>
</html>
