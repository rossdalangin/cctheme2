<?php
/**
 * The template for displaying single portfolio items
 *
 * @package CloseClient
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        $challenge = get_post_meta( get_the_ID(), '_portfolio_challenge', true );
        $solution  = get_post_meta( get_the_ID(), '_portfolio_solution', true );
        $outcome   = get_post_meta( get_the_ID(), '_portfolio_outcome', true );
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header text-center section section-lg bg-dark overflow-hidden">
                <div class="mesh-gradient"></div>
                <div class="container">
                    <span class="section-tag"><?php echo esc_html( get_theme_mod( 'closeclient_label_portfolio_single', 'PROTOCOL ANALYSIS' ) ); ?></span>
                    <?php the_title( '<h1 class="entry-title hero-headline gradient-text reveal">', '</h1>' ); ?>
                    <div class="portfolio-meta text-muted mt-4 reveal py-md">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <span class="small"><i class="text-accent opacity-50">#</i> AUTHORITY PROTOCOL</span>
                            <span class="small"><i class="text-accent opacity-50">#</i> HIGH-FIDELITY SCALE</span>
                            <span class="small"><i class="text-accent opacity-50">#</i> STRATEGIC ROI</span>
                        </div>
                        <div class="mt-4 max-w-600 mx-auto">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </header>

            <div class="container section py-xl">
                <div class="portfolio-featured-image mb-5 reveal py-md">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="aspect-hero rounded-lg overflow-hidden border border-secondary shadow-2xl">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="entry-content container-narrow reveal py-lg">
                    <?php if ( $challenge ) : ?>
                        <div class="case-study-block glass p-5 border-accent mb-5">
                            <h2 class="h4 mb-4 text-accent d-flex align-items-center gap-3">
                                <span class="badge bg-accent text-dark rounded-circle" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 14px;">01</span>
                                <?php echo esc_html( get_theme_mod( 'closeclient_label_challenge', '01. Diagnostic: The Strategic Challenge' ) ); ?>
                            </h2>
                            <div class="text-muted ps-md-5"><?php echo wp_kses_post( $challenge ); ?></div>
                        </div>
                    <?php endif; ?>

                    <?php if ( $solution ) : ?>
                        <div class="case-study-block glass p-5 mb-5">
                            <h2 class="h4 mb-4 text-white d-flex align-items-center gap-3">
                                <span class="badge bg-secondary text-white rounded-circle" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 14px;">02</span>
                                <?php echo esc_html( get_theme_mod( 'closeclient_label_solution', '02. Deployment: The Architectural Protocol' ) ); ?>
                            </h2>
                            <div class="text-muted ps-md-5"><?php echo wp_kses_post( $solution ); ?></div>
                        </div>
                    <?php endif; ?>

                    <?php if ( $outcome ) : ?>
                        <div class="case-study-block glass p-5 outcome-block border-bottom border-accent">
                            <h2 class="h4 mb-4 text-white d-flex align-items-center gap-3">
                                <span class="badge bg-accent text-dark rounded-circle" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 14px;">03</span>
                                <?php echo esc_html( get_theme_mod( 'closeclient_label_outcome', '03. Performance: The Strategic ROI' ) ); ?>
                            </h2>
                            <div class="h3 fw-bold mb-0 ps-md-5 gradient-text"><?php echo wp_kses_post( $outcome ); ?></div>
                        </div>
                    <?php endif; ?>

                    <?php $metric = get_post_meta( get_the_ID(), '_portfolio_metric', true ); ?>
                    <?php if ( $metric ) : ?>
                        <div class="case-study-metric glass p-5 border-accent mb-4 text-center">
                            <span class="section-tag small"><?php echo esc_html__( 'KEY PERFORMANCE METRIC', 'closeclient' ); ?></span>
                            <div class="h1 gradient-text mb-0 mt-2"><?php echo esc_html( $metric ); ?></div>
                        </div>
                    <?php endif; ?>

                    <div class="main-body mt-5">
                        <?php the_content(); ?>
                    </div>

                    <?php
                    $next_post = get_next_post();
                    if ( $next_post ) : ?>
                        <div class="next-case-study mt-5 pt-5 border-top border-secondary">
                            <div class="glass p-5 reveal d-flex justify-content-between align-items-center flex-wrap gap-4">
                                <div>
                                    <span class="section-tag small mb-2"><?php echo esc_html__( 'NEXT SUCCESS STORY', 'closeclient' ); ?></span>
                                    <h4 class="h3 mb-0 text-white"><?php echo esc_html( $next_post->post_title ); ?></h4>
                                </div>
                                <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="cc-button cc-button-secondary"><?php echo esc_html__( 'Analyze Protocol →', 'closeclient' ); ?></a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </article>

        <?php get_template_part( 'template-parts/sections/section-booking-cta' ); ?>

        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
