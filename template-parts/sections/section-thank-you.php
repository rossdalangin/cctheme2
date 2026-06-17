<?php
/**
 * Thank You Section Template Part
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_thankyou_headline_tpl', 'Strategic Inquiry Initiated.' );
$text     = get_theme_mod( 'closeclient_thankyou_text_tpl', 'A lead architect will perform a preliminary diagnostic scan of your digital footprint before contacting you within 24 business hours.' );
?>

<section class="section section-lg section-thank-you text-center">
    <div class="container container-narrow reveal">
        <div class="glass p-5 rounded-xl border-accent shadow-premium">
            <div class="check-icon-large text-accent mb-4" style="font-size: 4rem;">✓</div>
            <h1 class="h1 gradient-text mb-4"><?php echo esc_html( $headline ); ?></h1>
            <p class="lead text-muted mb-5"><?php echo esc_html( $text ); ?></p>

            <div class="next-steps mt-5 pt-5 border-top border-secondary">
                <h3 class="h5 mb-4 text-white"><?php echo esc_html( get_theme_mod( 'closeclient_thankyou_wait_title', 'Operational Protocol...' ) ); ?></h3>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <div class="step-card glass p-4 text-start bento-span-6">
                        <span class="small text-accent fw-bold"><?php echo esc_html( get_theme_mod( 'closeclient_thankyou_insights_text', 'Explore our latest high-fidelity engineering insights' ) ); ?></span>
                        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="cc-button cc-button-secondary w-100 mt-3"><?php echo esc_html( get_theme_mod( 'closeclient_thankyou_blog_btn', 'Access Strategic Insights' ) ); ?></a>
                    </div>
                    <div class="step-card glass p-4 text-start bento-span-6">
                        <span class="small text-accent fw-bold"><?php echo esc_html( get_theme_mod( 'closeclient_thankyou_stories_text', 'Examine our recent architectural success stories' ) ); ?></span>
                        <a href="<?php echo esc_url( home_url( '/case-studies' ) ); ?>" class="cc-button cc-button-secondary w-100 mt-3"><?php echo esc_html( get_theme_mod( 'closeclient_thankyou_cases_btn', 'Analyze Case Studies' ) ); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
