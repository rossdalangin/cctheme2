<?php
/**
 * Testimonials Section Template Part - BEAUTIFIED
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_testimonials_headline', 'Strategic Authority Proof' );
$tag      = get_theme_mod( 'closeclient_testimonials_tag', 'THE VALIDATION' );
?>

<section id="testimonials" class="section section-lg section-testimonials bg-black position-relative overflow-hidden">
    <div class="mesh-gradient opacity-20"></div>
    <div class="container position-relative">
        <div class="section-header text-center reveal mb-6">
            <span class="section-tag"><?php echo esc_html( $tag ); ?></span>
            <h2 class="section-headline gradient-text"><?php echo esc_html( $headline ); ?></h2>
            <p class="text-muted small uppercase letter-spacing-2 mt-3"><?php echo esc_html( get_theme_mod('closeclient_testimonials_sub', 'VERIFIED ROI ARCHITECTURE') ); ?></p>
        </div>

        <div class="bento-grid">
            <?php
            $testimonials_query = new WP_Query( array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 4,
            ) );

            if ( $testimonials_query->have_posts() ) :
                $i = 0;
                while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
                    $i++;
                    $rating = get_post_meta( get_the_ID(), '_testimonial_rating', true );
                    $company = get_post_meta( get_the_ID(), '_testimonial_company', true );
                    $result  = get_post_meta( get_the_ID(), '_testimonial_result', true );

                    // Asymmetrical Bento distribution for 4 items
                    if ($i == 1) $span = 'bento-span-7';
                    elseif ($i == 2) $span = 'bento-span-5';
                    elseif ($i == 3) $span = 'bento-span-4';
                    else $span = 'bento-span-8';
                    ?>
                    <div class="testimonial-item-v2 cc-card glass-premium reveal h-100 d-flex flex-column <?php echo esc_attr($span); ?>">
                        <div class="testimonial-inner p-5 p-md-6 h-100 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-5">
                                <div class="testimonial-rating-v2 d-flex gap-1">
                                    <?php
                                    $stars = intval($rating) ?: 5;
                                    for ( $s = 1; $s <= 5; $s++ ) {
                                        $active = ($s <= $stars) ? 'active' : '';
                                        echo '<span class="star-dot ' . $active . '"></span>';
                                    }
                                    ?>
                                </div>
                                <?php if ( $result ) : ?>
                                    <div class="testimonial-result-tag small fw-black text-accent letter-spacing-xs uppercase" style="font-size: 0.5rem;"><?php echo esc_html( $result ); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="testimonial-content-v2 flex-grow-1 position-relative">
                                <div class="quote-mark-large opacity-05">“</div>
                                <div class="testimonial-text-v2 lead text-white opacity-90 mb-5">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                            <div class="testimonial-client-v2 d-flex align-items-center gap-4 mt-auto pt-5 border-top border-white-05">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="client-avatar-v2">
                                        <?php the_post_thumbnail( 'thumbnail', array(
                                            'class' => 'w-100 h-100 object-cover',
                                            'loading' => 'lazy',
                                            'alt' => the_title_attribute( array( 'echo' => false ) )
                                        ) ); ?>
                                    </div>
                                <?php else : ?>
                                    <div class="client-avatar-v2-placeholder bg-secondary d-flex align-items-center justify-content-center">
                                        <span class="small opacity-30 fw-bold"><?php echo substr(get_the_title(), 0, 1); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="client-meta-v2">
                                    <h4 class="h6 mb-1 text-white fw-bold letter-spacing-1"><?php the_title(); ?></h4>
                                    <?php if ( $company ) : ?>
                                        <div class="client-company-v2 small text-accent-soft uppercase letter-spacing-1 fw-black" style="font-size: 0.55rem;"><?php echo esc_html( $company ); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                // Fallback High-Fidelity
                for ( $i = 1; $i <= 3; $i++ ) :
                    $text = get_theme_mod( "closeclient_testimonial_{$i}_text", "The digital architecture CloseClient engineered allowed us to triple our lead quality while liquidating manual sales effort by 60%. Their systems are absolute." );
                    $name = get_theme_mod( "closeclient_testimonial_{$i}_name", "Brand Partner" );
                    $res  = get_theme_mod( "closeclient_testimonial_{$i}_result", "3.4x ROI ENGINEERED" );
                    $span = ($i == 1) ? 'bento-span-8' : 'bento-span-4';
                    ?>
                    <div class="testimonial-item-v2 cc-card glass-premium reveal h-100 d-flex flex-column <?php echo esc_attr($span); ?>">
                        <div class="testimonial-inner p-5 p-md-6 h-100 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start mb-5">
                                <div class="testimonial-rating-v2 d-flex gap-1">
                                    <?php for ( $s = 1; $s <= 5; $s++ ) echo '<span class="star-dot active"></span>'; ?>
                                </div>
                                <div class="testimonial-result-tag small fw-black text-accent letter-spacing-xs uppercase" style="font-size: 0.5rem;"><?php echo esc_html( $res ); ?></div>
                            </div>
                            <div class="testimonial-content-v2 flex-grow-1 position-relative">
                                <div class="quote-mark-large opacity-05">“</div>
                                <div class="testimonial-text-v2 lead text-white opacity-90 mb-5"><?php echo esc_html( $text ); ?></div>
                            </div>
                            <div class="testimonial-client-v2 d-flex align-items-center gap-4 mt-auto pt-5 border-top border-white-05">
                                <div class="client-avatar-v2-placeholder bg-secondary d-flex align-items-center justify-content-center">
                                    <span class="small opacity-30 fw-bold">CP</span>
                                </div>
                                <div class="client-meta-v2">
                                    <h4 class="h6 mb-1 text-white fw-bold letter-spacing-1"><?php echo esc_html( $name ); ?></h4>
                                    <div class="client-company-v2 small text-accent-soft uppercase letter-spacing-1 fw-black" style="font-size: 0.55rem;">STRATEGIC PARTNER</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor;
            endif; ?>
        </div>
    </div>
</section>
