<?php
/**
 * Template part for a newsletter opt-in section
 *
 * @package CloseClient
 */
?>

<section class="section section-lg section-newsletter text-center reveal">
    <div class="container container-narrow py-xl glass border-accent rounded-xl shadow-premium bento-style-card">
        <div class="newsletter-icon-badge mb-4">
            <span class="badge bg-accent text-dark rounded-pill py-2 px-4 fw-black letter-spacing-lg" style="font-size: 0.65rem;">HIGH-FIDELITY INSIGHTS</span>
        </div>
        <span class="section-tag small mb-2"><?php echo esc_html__( 'THE AUTHORITY CIRCLE', 'closeclient' ); ?></span>
        <h2 class="section-headline gradient-text mt-2 h1"><?php echo esc_html( get_theme_mod( 'closeclient_newsletter_title', 'The Authority Circle' ) ); ?></h2>
        <p class="section-subheadline lead text-muted mb-5 px-md-5 mx-auto max-w-600"><?php echo esc_html( get_theme_mod( 'closeclient_newsletter_text', 'Weekly insights on authority positioning, technical performance, and scaling systems.' ) ); ?></p>

        <div class="newsletter-form-container max-w-500 mx-auto">
            <?php $custom_action = get_theme_mod( 'closeclient_newsletter_form_action' ); ?>
            <form class="newsletter-form-inline d-flex gap-2 flex-wrap flex-md-nowrap mb-4" action="<?php echo esc_url( $custom_action ); ?>" method="<?php echo $custom_action ? 'POST' : 'GET'; ?>">
                <input type="email" name="email" class="flex-grow-1 bg-dark border-secondary" placeholder="<?php echo esc_attr( get_theme_mod( 'closeclient_newsletter_placeholder', 'Business Email' ) ); ?>" required style="height: 60px;">
                <button type="submit" class="cc-button px-5 h-60"><?php echo esc_html( get_theme_mod( 'closeclient_newsletter_button', 'Join the Circle' ) ); ?></button>
            </form>
            <div class="d-flex justify-content-center align-items-center gap-3 opacity-50">
                <span class="small text-muted d-flex align-items-center gap-1"><?php echo closeclient_get_svg('check'); ?> Zero Spam</span>
                <span class="small text-muted d-flex align-items-center gap-1"><?php echo closeclient_get_svg('check'); ?> Weekly Protocol</span>
                <span class="small text-muted d-flex align-items-center gap-1"><?php echo closeclient_get_svg('check'); ?> Opt-out anytime</span>
            </div>
        </div>
    </div>
</section>
