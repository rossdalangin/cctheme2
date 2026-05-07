<?php
/**
 * About Section Template Part
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_about_headline_home', 'We Architect High-Fidelity Digital Ecosystems for 8-Figure Authorities.' );
$p1 = get_theme_mod( 'closeclient_about_text_p1', 'Most agencies peddle "pretty" designs that act as a liability. We engineer tactical digital assets that function as your most elite, 24/7 global sales force, pre-selling your expertise before you even enter the room.' );
$p2 = get_theme_mod( 'closeclient_about_text_p2', 'By fusing surgical technical precision with deep-rooted conversion psychology, we eliminate the structural friction and "authority-debt" that kills high-ticket growth at scale.' );
$btn = get_theme_mod( 'closeclient_about_button_text', 'Explore the Protocol' );
$img = get_theme_mod( 'closeclient_about_image' );
?>

<section id="about" class="section section-lg section-about">
    <div class="container">
        <div class="bento-grid">
            <div class="about-image bento-span-5 reveal">
                <?php if ( $img ) : ?>
                    <img src="<?php echo esc_url( $img ); ?>" alt="About Me" class="aspect-square">
                <?php else : ?>
                    <div class="about-placeholder h-100 min-h-400"></div>
                <?php endif; ?>
            </div>

            <div class="about-content bento-span-7 glass p-5 p-md-5 reveal">
                <span class="section-tag"><?php echo esc_html( get_theme_mod( 'closeclient_about_tag_home', 'THE METHODOLOGY' ) ); ?></span>
                <h2 class="section-headline gradient-text mb-5"><?php echo esc_html( $headline ); ?></h2>
                <div class="about-text mb-5">
                    <p class="lead text-muted mb-4"><?php echo esc_html( $p1 ); ?></p>
                    <p class="text-muted"><?php echo esc_html( $p2 ); ?></p>
                </div>

                <?php
                $methodology = get_theme_mod( 'closeclient_about_methodology', 'Performance-First Engineering, Psych-Driven UI/UX Design, Conversion-Focused Architecture' );
                if ( $methodology ) : ?>
                    <div class="about-pillars mb-5 d-flex flex-column gap-3">
                        <?php
                        $pillars = explode( ',', $methodology );
                        foreach ( array_slice($pillars, 0, 3) as $pillar ) : ?>
                            <div class="pillar-item d-flex align-items-center gap-3">
                                <span class="text-accent"><?php echo closeclient_get_svg('check'); ?></span>
                                <span class="small text-white-50 fw-bold"><?php echo esc_html( trim($pillar) ); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="cc-button cc-button-secondary">
                    <?php echo esc_html( $btn ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
