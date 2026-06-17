<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package CloseClient
 */
?>

<section class="no-results not-found section section-lg text-center reveal">
    <div class="container container-narrow py-xl">
        <header class="page-header mb-5">
            <span class="section-tag"><?php echo esc_html( get_theme_mod( 'closeclient_label_none_tag', 'ZERO RESULTS' ) ); ?></span>
            <h1 class="hero-headline gradient-text"><?php echo esc_html( get_theme_mod( 'closeclient_label_none_title', 'No Strategic Matches Found.' ) ); ?></h1>
        </header>

        <div class="page-content glass p-5">
            <?php
            if ( is_home() && current_user_can( 'publish_posts' ) ) :

                printf(
                    '<p class="lead text-muted">' . wp_kses(
                        get_theme_mod( 'closeclient_label_none_publish_cta', 'Ready to initiate your first authority post? <a href="%1$s" class="text-accent">Begin the protocol here</a>.' ),
                        array(
                            'a' => array(
                                'href' => array(),
                                'class' => array(),
                            ),
                        )
                    ) . '</p>',
                    esc_url( admin_url( 'post-new.php' ) )
                );

            elseif ( is_search() ) :
                ?>

                <p class="lead text-muted mb-5"><?php echo esc_html( get_theme_mod( 'closeclient_label_none_search', 'No strategic matches were found for your query. Refine your keywords or consult the central repository.' ) ); ?></p>
                <div class="search-form-wrapper max-w-500 mx-auto">
                    <?php get_search_form(); ?>
                </div>

            <?php
            else :
                ?>

                <p class="lead text-muted mb-5"><?php echo esc_html( get_theme_mod( 'closeclient_label_none_general', 'Our archives do not contain the specific data you are requesting. Refine your parameters or return to the growth hub.' ) ); ?></p>
                <div class="search-form-wrapper max-w-500 mx-auto">
                    <?php get_search_form(); ?>
                </div>

            <?php
            endif;
            ?>
        </div>
    </div>
</section>
