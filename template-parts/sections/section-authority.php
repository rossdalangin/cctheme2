<?php
/**
 * Authority Logos Section Template Part
 *
 * @package CloseClient
 */
?>

<section class="section section-lg section-authority text-center reveal">
    <div class="container py-xl glass rounded-xl border-accent-soft">
        <p class="section-tag small mb-4"><?php echo esc_html( get_theme_mod( 'closeclient_authority_tag', 'ARCHITECTING GLOBAL DOMINANCE' ) ); ?></p>
        <div class="container-narrow">
            <p class="lead text-muted mb-5"><?php echo esc_html( get_theme_mod( 'closeclient_authority_desc', 'Our high-fidelity protocols are trusted and featured by the industry\'s most demanding curators of digital expertise and high-ticket scale.' ) ); ?></p>
        </div>

        <div class="logo-bar d-flex justify-content-center align-items-center flex-wrap gap-5">
            <?php
            $has_custom = false;
            for ( $i = 1; $i <= 5; $i++ ) {
                $logo = get_theme_mod( "closeclient_authority_logo_$i" );
                if ( $logo ) {
                    echo '<div class="authority-logo"><img src="' . esc_url( $logo ) . '" alt="Authority Logo"></div>';
                    $has_custom = true;
                }
            }

            if ( ! $has_custom ) : ?>
                <div class="authority-logo-text">FORBES</div>
                <div class="authority-logo-text">WIRED</div>
                <div class="authority-logo-text">INC.</div>
                <div class="authority-logo-text">BUSINESS INSIDER</div>
            <?php endif; ?>
        </div>
    </div>
</section>
