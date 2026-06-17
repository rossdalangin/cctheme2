<?php
/**
 * Portfolio Section Template Part
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_portfolio_headline', 'Engineered Success Case Studies' );
$tag      = get_theme_mod( 'closeclient_portfolio_tag', 'PROOF OF ARCHITECTURE' );
?>

<section id="portfolio" class="section section-lg section-portfolio bg-dark overflow-hidden">
    <div class="mesh-gradient"></div>
    <div class="container">
        <div class="section-header text-center reveal mb-5">
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
                    // Maximum Impact Asymmetrical Distribution
                    // Card 1: Lead (8 cols), Card 2: Stack (4 cols), Card 3: Stack (4 cols), Card 4: Footer (8 cols)
                    $span = ( $i == 1 || $i == 4 ) ? 'bento-span-8' : 'bento-span-4';
                    $metric = get_post_meta( get_the_ID(), '_portfolio_metric', true );
                    ?>
                    <article class="portfolio-item-card cc-card <?php echo esc_attr($span); ?> p-0 overflow-hidden d-flex flex-column h-100 border-0">
                        <div class="portfolio-image-wrap position-relative overflow-hidden">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="d-block h-100">
                                    <?php the_post_thumbnail( 'large', array(
                                        'class' => 'w-100 h-100 object-cover transition-all',
                                        'loading' => 'lazy',
                                        'alt' => the_title_attribute( array( 'echo' => false ) )
                                    ) ); ?>
                                </a>
                            <?php else : ?>
                                <div class="glass h-100 d-flex align-items-center justify-content-center opacity-30">
                                    <span class="h1 mb-0 opacity-10">ARCH.<?php echo $i; ?></span>
                                </div>
                            <?php endif; ?>

                            <div class="portfolio-overlay-gradient"></div>
                        </div>

                        <div class="portfolio-content p-5 flex-grow-1 d-flex flex-column bg-secondary border-top border-secondary">
                            <?php if ( $metric ) : ?>
                                <div class="portfolio-metric-badge mb-4">
                                    <div class="d-inline-flex align-items-center gap-2 py-1 px-3 border border-accent rounded-pill" style="background: rgba(var(--c-accent-rgb), 0.1);">
                                        <span class="small text-accent fw-black letter-spacing-lg" style="font-size: 0.5rem;"><?php echo esc_html( $metric ); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="section-tag small mb-0" style="font-size: 0.55rem; padding-left: 0;"><?php echo esc_html__( 'PROTOCOL ANALYSIS', 'closeclient' ); ?></span>
                                <span class="small text-white-50 opacity-20 fw-black">CASE NO.0<?php echo $i; ?></span>
                            </div>
                            <h3 class="<?php echo ($span == 'bento-span-8') ? 'h2' : 'h4'; ?> mb-4 tracking-tighter"><a href="<?php the_permalink(); ?>" class="text-white text-decoration-none hover-text-accent transition-all"><?php the_title(); ?></a></h3>
                            <div class="text-muted small mb-5 lead opacity-80" style="font-size: 0.95rem; line-height: 1.7;"><?php echo wp_trim_words( get_the_excerpt(), ( $span == 'bento-span-8' ? 40 : 20 ) ); ?></div>

                            <div class="mt-auto pt-4 border-top border-white-10 d-flex justify-content-between align-items-center">
                                <a href="<?php the_permalink(); ?>" class="cc-button cc-button-secondary py-2 px-4" style="font-size: 0.65rem;"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_btn', 'Analyze Protocol →' ) ); ?></a>
                                <div class="d-flex gap-2 opacity-30">
                                    <div class="status-dot-mini bg-accent" style="width: 4px; height: 4px;"></div>
                                    <span class="small fw-bold" style="font-size: 0.45rem; letter-spacing: 0.1em;">ENCRYPTED</span>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="portfolio-empty-card cc-card bento-span-12 p-5 text-center reveal">
                    <p class="text-muted mb-0"><?php echo esc_html( get_theme_mod( 'closeclient_portfolio_empty_text', 'New success stories are currently undergoing technical audit. Check back soon.' ) ); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
