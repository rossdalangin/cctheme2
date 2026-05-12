<?php
/**
 * Template Name: Services Template
 *
 * @package CloseClient
 */

get_header();

$headline    = get_theme_mod( 'closeclient_services_hero_headline_tpl', 'The Protocol for Strategic Dominance.' );
$subheadline = get_theme_mod( 'closeclient_services_subheadline_tpl', 'We don\'t build pages; we engineer the tactical infrastructure required to command your market and scale beyond your current ceiling with mathematical certainty.' );
?>

<main class="position-relative overflow-hidden" id="primary" class="site-main"><div class="blueprint-watermark opacity-05">TECHNICAL_BLUEPRINT_V2.0</div>
    <div class="container section section-xl text-center reveal overflow-hidden">
        <div class="mesh-gradient"></div>
        <div class="hero-bg-glow"></div>
        <span class="section-tag reveal"><?php echo esc_html( get_theme_mod( 'closeclient_label_service_archive_tag', 'OUR CAPABILITIES' ) ); ?></span>
        <h1 class="hero-headline gradient-text reveal"><?php echo esc_html( $headline ); ?></h1>
        <div class="container-narrow">
            <p class="hero-subheadline py-md text-muted lead reveal"><?php echo esc_html( $subheadline ); ?></p>
        </div>
    </div>

    <div class="container section">
        <?php
        $services_query = new WP_Query( array(
            'post_type'      => 'service',
            'posts_per_page' => 12,
        ) );

        if ( $services_query->have_posts() ) : ?>
            <div class="archive-service-grid bento-grid reveal-stagger">
                <?php
                $i = 0;
                while ( $services_query->have_posts() ) :
                    $services_query->the_post();
                    $i++;
                    $span = ( $i % 5 == 1 || $i % 5 == 0 ) ? 'bento-span-8' : 'bento-span-4';
                    $icons = array('⚡', '💎', '🚀', '🎯', '🔥', '🛡️');
                    $icon = isset($icons[$i-1]) ? $icons[$i-1] : '⚡';
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( "service-item cc-card no-reveal $span" ); ?>>
                        <div class="service-icon mb-4"><?php echo $icon; ?></div>
                        <h3 class="h4 mb-3"><a href="<?php the_permalink(); ?>" class="text-white text-decoration-none hover-text-accent transition-all"><?php the_title(); ?></a></h3>
                        <div class="text-muted small mb-4 lead"><?php the_excerpt(); ?></div>

                        <?php
                        $blueprint = get_post_meta( get_the_ID(), '_service_blueprint', true );
                        if ( $blueprint ) : ?>
                            <div class="service-mini-features mb-4 d-flex flex-wrap gap-2">
                                <?php
                                $items = array_slice(explode( ',', $blueprint ), 0, 2);
                                foreach ( $items as $item ) : ?>
                                    <span class="badge bg-secondary text-white-50 border-0 p-2 px-3 small fw-bold" style="font-size: 0.65rem;"><?php echo esc_html( trim($item) ); ?></span>
                                <?php endforeach; ?>
                                <span class="badge bg-accent text-white border-0 p-2 px-3 small fw-bold" style="font-size: 0.65rem;"><?php echo esc_html__( 'ELITE SYSTEM', 'closeclient' ); ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="mt-auto">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="cc-button cc-button-secondary read-more-btn"><?php echo esc_html( get_theme_mod( 'closeclient_label_service_btn', 'System Details →' ) ); ?></a>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <div class="glass p-5 text-center reveal">
                <p class="text-muted"><?php echo esc_html__( 'No systems currently deployed in the protocol repository.', 'closeclient' ); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <?php get_template_part( 'template-parts/sections/section-process' ); ?>
    <?php get_template_part( 'template-parts/sections/section-pricing' ); ?>
    <?php get_template_part( 'template-parts/sections/section-booking-cta' ); ?>
</main>

<?php
get_footer();
