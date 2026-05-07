<?php
/**
 * The template for displaying category pages
 *
 * @package CloseClient
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if ( have_posts() ) : ?>

            <header class="page-header section section-xl text-center reveal bg-dark overflow-hidden">
                <div class="mesh-gradient"></div>
                <div class="hero-bg-glow"></div>
                <?php
                the_archive_title( '<h1 class="hero-headline gradient-text mb-4">', '</h1>' );
                the_archive_description( '<div class="archive-description text-muted py-md max-w-800 mx-auto fs-5">', '</div>' );
                ?>
            </header>

            <div class="blog-layout-wrapper section py-xl">
                <div class="blog-posts-grid">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content/content', 'archive' );
                    endwhile;

                    the_posts_navigation();
                    ?>
                </div>

                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <?php get_sidebar(); ?>
                <?php endif; ?>
            </div>

        <?php else : ?>
            <div class="section">
                <?php get_template_part( 'template-parts/content/content', 'none' ); ?>
            </div>
        <?php endif; ?>
    </div>

    <?php get_template_part( 'template-parts/sections/section-booking-cta' ); ?>
</main>

<?php
get_footer();
