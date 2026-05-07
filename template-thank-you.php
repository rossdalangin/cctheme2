<?php
/**
 * Template Name: Thank You
 *
 * @package CloseClient
 */

get_header();
?>

<main id="primary" class="site-main thank-you-page">
    <?php
    $content = get_the_content();
    if ( empty( $content ) ) {
        get_template_part( 'template-parts/sections/section-thank-you' );
    } else {
        echo '<div class="container py-xl">' . apply_filters( 'the_content', $content ) . '</div>';
    }
    ?>
</main>

<?php
get_footer();
