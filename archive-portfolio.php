<?php
/**
 * The template for displaying portfolio archives
 *
 * @package CloseClient
 */

get_header();
?>

<main id="primary" class="site-main">
    <header class="archive-header section section-xl text-center bg-dark overflow-hidden">
        <div class="mesh-gradient"></div>
        <div class="hero-bg-glow"></div>
        <div class="container">
            <span class="section-tag reveal"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_archive_tag', 'PROOF OF ARCHITECTURE' ) ); ?></span>
            <h1 class="hero-headline gradient-text mb-4"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_archive_title', 'Engineered Success Case Studies' ) ); ?></h1>
            <p class="lead text-muted mt-4 max-w-800 mx-auto fs-5"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_archive_desc', 'Deep dives into the technical and psychological infrastructure behind 8-figure authority brands.' ) ); ?></p>
        </div>
    </header>

    <div class="container section">
        <?php
        $terms = get_terms( array( 'taxonomy' => 'portfolio_cat', 'hide_empty' => true ) );
        if ( ! empty( $terms ) ) : ?>
            <div class="archive-filters mb-5 pb-5 d-flex justify-content-center gap-3 reveal">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'portfolio' ) ); ?>" class="filter-link glass p-2 px-4 small fw-bold active"><?php echo esc_html__( 'All Stories', 'closeclient' ); ?></a>
                <?php foreach ( $terms as $term ) : ?>
                    <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="filter-link glass p-2 px-4 small fw-bold"><?php echo esc_html( $term->name ); ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ( have_posts() ) : ?>
            <div class="portfolio-grid bento-grid reveal-stagger">
                <?php
                $i = 0;
                while ( have_posts() ) :
                    the_post();
                    $i++;
                    // Custom Bento Distribution: 8-4-4-4-8
                    $span = ( $i % 5 == 1 || $i % 5 == 0 ) ? 'bento-span-8' : 'bento-span-4';
                    $metric = get_post_meta( get_the_ID(), '_portfolio_metric', true );
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( "portfolio-item cc-card p-0 border-0 $span overflow-hidden" ); ?>>
                        <div class="portfolio-card-inner d-flex flex-column h-100">
                            <div class="portfolio-image-wrap position-relative overflow-hidden" style="height: 380px;">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" class="d-block h-100">
                                        <?php the_post_thumbnail( 'large', array(
                                            'class' => 'w-100 h-100 object-cover transition-all',
                                            'loading' => 'lazy',
                                            'alt' => the_title_attribute( array( 'echo' => false ) )
                                        ) ); ?>
                                    </a>
                                <?php else : ?>
                                    <div class="glass h-100 d-flex align-items-center justify-content-center">
                                        <span class="h1 mb-0 opacity-10">ARCH.<?php echo $i; ?></span>
                                    </div>
                                <?php endif; ?>

                                <?php if ( $metric ) : ?>
                                    <div class="portfolio-metric-badge position-absolute top-0 end-0 m-4">
                                        <div class="glass p-3 px-4 border-accent rounded-pill">
                                            <span class="d-block small text-accent fw-black letter-spacing-xs" style="font-size: 0.5rem; line-height: 1;">KEY METRIC</span>
                                            <span class="h6 mb-0 text-white fw-black"><?php echo esc_html( $metric ); ?></span>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="portfolio-overlay-gradient"></div>
                            </div>

                            <div class="portfolio-content-wrap p-5 flex-grow-1 bg-secondary d-flex flex-column border-top border-secondary">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <span class="section-tag small mb-0" style="font-size: 0.55rem; padding-left: 0;"><?php echo esc_html__( 'PROTOCOL ANALYSIS', 'closeclient' ); ?></span>
                                    <span class="small text-white-50 opacity-20 fw-black">NO.0<?php echo $i; ?></span>
                                </div>
                                <h3 class="h3 mb-4 tracking-tighter"><a href="<?php the_permalink(); ?>" class="text-white text-decoration-none hover-text-accent transition-all"><?php the_title(); ?></a></h3>
                                <p class="text-muted small mb-5 opacity-70 lead" style="line-height: 1.6;"><?php echo wp_trim_words( get_the_excerpt(), 30 ); ?></p>

                                <div class="mt-auto pt-4 border-top border-white-10 d-flex justify-content-between align-items-center">
                                    <a href="<?php the_permalink(); ?>" class="cc-button cc-button-secondary py-2 px-4" style="font-size: 0.65rem;">Analyze Blueprint →</a>
                                    <div class="d-flex gap-2 opacity-30">
                                        <div class="status-dot-mini bg-accent" style="width: 4px; height: 4px;"></div>
                                        <span class="small fw-bold" style="font-size: 0.45rem; letter-spacing: 0.1em;">ENCRYPTED</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination mt-5 text-center">
                <?php the_posts_navigation(); ?>
            </div>
        <?php endif; ?>
    </div>

    <?php get_template_part( 'template-parts/sections/section-booking-cta' ); ?>
</main>

<?php
get_footer();
