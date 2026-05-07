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

        <div class="portfolio-grid bento-grid">
            <?php
            $portfolio_query = new WP_Query( array(
                'post_type'      => 'portfolio',
                'posts_per_page' => 4,
            ) );

            if ( $portfolio_query->have_posts() ) :
                $i = 0;
                while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
                    $i++;
                    $span = ( $i == 1 ) ? 'bento-span-7' : ( ( $i == 2 ) ? 'bento-span-5' : ( ( $i == 3 ) ? 'bento-span-5' : 'bento-span-7' ) );
                    $metric = get_post_meta( get_the_ID(), '_portfolio_metric', true );
                    ?>
                    <div class="portfolio-item-card cc-card reveal <?php echo esc_attr($span); ?> p-0 overflow-hidden d-flex flex-column h-100">
                        <div class="portfolio-image" style="height: 250px; overflow: hidden; position: relative;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                            <?php else : ?>
                                <div class="glass h-100 d-flex align-items-center justify-content-center opacity-30">
                                    <span class="h1 mb-0">💎</span>
                                </div>
                            <?php endif; ?>
                            <?php if ( $metric ) : ?>
                                <div class="portfolio-metric-badge badge bg-accent text-white" style="position: absolute; top: 20px; right: 20px; font-size: 0.6rem; font-weight: 900; padding: 8px 15px; border-radius: 100px;"><?php echo esc_html( $metric ); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="portfolio-content p-5 flex-grow-1 d-flex flex-column">
                            <span class="section-tag small mb-3" style="font-size: 0.6rem;"><?php echo esc_html__( 'SUCCESS STORY', 'closeclient' ); ?></span>
                            <h3 class="h4 mb-3 text-white"><?php the_title(); ?></h3>
                            <div class="text-muted small mb-5 lead"><?php the_excerpt(); ?></div>
                            <div class="mt-auto">
                                <a href="<?php the_permalink(); ?>" class="cc-button cc-button-secondary w-100"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_btn', 'Analyze Protocol →' ) ); ?></a>
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
