<?php
/**
 * The template for displaying the blog (home) page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CloseClient
 */

get_header();
?>

	<main id="primary" class="site-main">

        <header class="page-header section section-xl text-center reveal bg-dark overflow-hidden">
            <div class="mesh-gradient"></div>
            <div class="hero-bg-glow"></div>
            <div class="container">
                <span class="section-tag reveal"><?php echo esc_html( get_theme_mod( 'closeclient_blog_title', 'Strategic Insights' ) ); ?></span>
                <h1 class="hero-headline gradient-text"><?php echo esc_html( get_theme_mod( 'closeclient_blog_description', 'Definitive strategic protocols for 8-figure authority and digital scale.' ) ); ?></h1>
            </div>
        </header>

		<div class="container section-sm">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            // FEATURED POST SECTION (Always check on first page)
            if ( 1 === $paged ) : ?>
                <div class="featured-post-wrapper mb-5 pb-5">
                    <?php
                    $featured_query = new WP_Query( array( 'posts_per_page' => 1 ) );
                    if ( $featured_query->have_posts() ) :
                        while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
                            <div class="featured-post-item reveal">
                                <div class="featured-image">
                                    <?php closeclient_post_thumbnail(); ?>
                                </div>
                                <div class="featured-content glass p-5">
                                    <div class="post-meta section-tag mb-3"><?php closeclient_posted_on(); ?></div>
                                    <h2 class="h1 mb-4"><a href="<?php the_permalink(); ?>" class="text-white text-decoration-none hover-text-accent transition-all"><?php the_title(); ?></a></h2>
                                    <div class="post-excerpt text-muted mb-5 lead"><?php the_excerpt(); ?></div>
                                    <a href="<?php the_permalink(); ?>" class="cc-button cc-button-secondary"><?php echo esc_html( get_theme_mod( 'closeclient_blog_btn_text', 'Read Deep Dive →' ) ); ?></a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            <?php endif; ?>

            <?php if ( have_posts() ) : ?>
                <div class="blog-posts-grid bento-grid reveal-stagger">
                    <?php
                    $i = 0;
                    while ( have_posts() ) : the_post();
                        $i++;
                        $span = ( $i % 3 == 1 ) ? 'bento-span-8' : 'bento-span-4';
                        set_query_var( 'closeclient_reveal_class', 'no-reveal' );
                        ?>
                        <div class="<?php echo esc_attr($span); ?>">
                            <?php get_template_part( 'template-parts/content/content', 'archive' ); ?>
                        </div>
                    <?php endwhile; ?>
                </div>

                <div class="pagination-wrapper mt-5 pt-5 text-center reveal">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => esc_html__( '← Previous', 'closeclient' ),
                        'next_text' => esc_html__( 'Next →', 'closeclient' ),
                    ) );
                    ?>
                </div>

            <?php elseif ( 1 !== $paged ) : ?>
                <?php get_template_part( 'template-parts/content/content-none' ); ?>
            <?php endif; ?>
        </div>

        <?php get_template_part( 'template-parts/sections/section-booking-cta' ); ?>

	</main><!-- #main -->

<?php
get_footer();
