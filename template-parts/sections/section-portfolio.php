<?php
/**
 * Portfolio Section Template Part
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_portfolio_headline', 'Engineered Success Case Studies' );
$tag      = get_theme_mod( 'closeclient_portfolio_tag', 'PROOF OF ARCHITECTURE' );
?>

<section id="portfolio" class="section section-lg section-portfolio bg-dark">
    <div class="container">
        <div class="section-header text-center reveal">
            <span class="section-tag"><?php echo esc_html( $tag ); ?></span>
            <h2 class="section-headline gradient-text"><?php echo esc_html( $headline ); ?></h2>
        </div>

        <div class="portfolio-grid bento-grid reveal-stagger">
            <?php
            $portfolio_query = new WP_Query( array(
                'post_type'      => 'portfolio',
                'posts_per_page' => 4,
            ) );

            if ( $portfolio_query->have_posts() ) :
                $i = 0;
                while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                    $i++;
                    $span = ( $i == 1 || $i == 4 ) ? 'bento-span-7' : 'bento-span-5';
                    $metric = get_post_meta( get_the_ID(), '_portfolio_metric', true );
                    ?>
                    <div class="portfolio-item-card cc-card <?php echo esc_attr($span); ?> p-0 overflow-hidden d-flex flex-column h-100 border-0">
                        <div class="portfolio-image-wrap position-relative overflow-hidden" style="height: 300px;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="d-block h-100">
                                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-100 h-100 object-cover' ) ); ?>
                                </a>
                            <?php else : ?>
                                <div class="glass h-100 d-flex align-items-center justify-content-center opacity-30">
                                    <span class="h1 mb-0">ARCH.<?php echo $i; ?></span>
                                </div>
                            <?php endif; ?>

                            <?php if ( $metric ) : ?>
                                <div class="portfolio-metric-badge position-absolute top-0 end-0 m-4">
                                    <div class="glass p-2 px-3 border-accent rounded-pill">
                                        <span class="h6 mb-0 text-white fw-black" style="font-size: 0.65rem;"><?php echo esc_html( $metric ); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="portfolio-content p-5 flex-grow-1 d-flex flex-column bg-secondary">
                            <span class="section-tag small mb-2" style="font-size: 0.55rem; padding-left: 0;"><?php echo esc_html__( 'PROTOCOL ANALYSIS', 'closeclient' ); ?></span>
                            <h3 class="h4 mb-3 text-white tracking-tighter"><a href="<?php the_permalink(); ?>" class="text-white text-decoration-none hover-text-accent transition-all"><?php the_title(); ?></a></h3>
                            <div class="text-muted small mb-5 lead opacity-80" style="font-size: 0.9rem;"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></div>
                            <div class="mt-auto">
                                <a href="<?php the_permalink(); ?>" class="cc-button cc-button-secondary py-2 px-4" style="font-size: 0.65rem;"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_btn', 'Analyze Protocol →' ) ); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="portfolio-empty-card cc-card reveal">
                    <p class="text-muted"><?php echo esc_html( get_theme_mod( 'closeclient_portfolio_empty_text', 'New success stories are currently undergoing technical audit. Check back soon.' ) ); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
