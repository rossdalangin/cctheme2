<?php
/**
 * Process Section Template Part
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_process_headline', 'The Authority Protocol' );
$tag      = get_theme_mod( 'closeclient_process_tag', 'OUR PROCESS' );
?>

<section id="process" class="section section-lg section-process bg-secondary overflow-hidden">
    <div class="container">
        <div class="section-header text-center reveal">
            <div class="d-flex justify-content-center mb-4">
                <span class="badge bg-accent text-dark rounded-pill py-2 px-4 fw-black letter-spacing-lg" style="font-size: 0.65rem;">HIGH-FIDELITY DEPLOYMENT</span>
            </div>
            <span class="section-tag"><?php echo esc_html( $tag ); ?></span>
            <h2 class="section-headline gradient-text"><?php echo esc_html( $headline ); ?></h2>
            <p class="section-subheadline text-muted lead max-w-600 mx-auto opacity-70">The exact architectural roadmap we use to engineer absolute market dominance and scale 8-figure authorities.</p>
        </div>

        <div class="process-list pt-lg mt-5">
            <?php
            $process_query = new WP_Query( array(
                'post_type'      => 'process',
                'posts_per_page' => 4,
                'meta_key'       => '_step_order',
                'orderby'        => 'meta_value_num',
                'order'          => 'ASC'
            ) );

            if ( $process_query->have_posts() ) :
                $i = 0;
                while ( $process_query->have_posts() ) : $process_query->the_post();
                    $i++;
                    $order = get_post_meta( get_the_ID(), '_step_order', true );
                    $align_class = ( $i % 2 == 0 ) ? 'step-right' : 'step-left';
                    ?>
                    <div class="process-step-modern reveal <?php echo esc_attr($align_class); ?>">
                        <div class="process-dot"></div>
                        <div class="process-step-content glass p-4 p-md-5">
                            <div class="step-num-modern gradient-text h2 mb-3">0<?php echo esc_html($order); ?></div>
                            <h3 class="h3 mb-3"><?php the_title(); ?></h3>
                            <div class="text-muted lead small mb-4"><?php the_content(); ?></div>

                            <?php
                            $deliverables = get_post_meta( get_the_ID(), '_step_deliverables', true );
                            if ( $deliverables ) : ?>
                                <div class="step-deliverables pt-4 border-top border-secondary">
                                    <span class="small text-accent fw-bold uppercase letter-spacing-1 d-block mb-3"><?php echo esc_html__( 'CORE DELIVERABLES:', 'closeclient' ); ?></span>
                                    <ul class="list-unstyled mb-0 d-flex flex-wrap gap-x-4 gap-y-2">
                                        <?php
                                        $items = explode( ',', $deliverables );
                                        foreach ( $items as $item ) : ?>
                                            <li class="small text-white-50"><span class="text-accent me-2">✓</span><?php echo esc_html( trim($item) ); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else :
                // Fallback to Customizer
                for ( $i = 1; $i <= 3; $i++ ) :
                    $title = get_theme_mod( "closeclient_process_step_{$i}_title" );
                    $text  = get_theme_mod( "closeclient_process_step_{$i}_text" );

                    if ( empty($title) ) {
                        $defaults = array( 1 => 'The Technical Audit', 2 => 'The Ecosystem Build', 3 => 'The Scale Protocol' );
                        $title = $defaults[$i];
                    }
                    if ( empty($text) ) {
                        $defaults = array(
                            1 => 'A deep-dive diagnostic scan of your current authority leaks, technical debt, and revenue bottlenecks.',
                            2 => 'Rapid, high-fidelity installation of your core authority infrastructure, lead filters, and conversion assets.',
                            3 => 'Continuous technical optimization and strategic traffic injection to reach your $100k/mo+ targets with absolute certainty.'
                        );
                        $text = $defaults[$i];
                    }
                    $align_class = ( $i % 2 == 0 ) ? 'step-right' : 'step-left';
                    ?>
                    <div class="process-step-modern reveal <?php echo esc_attr($align_class); ?>">
                        <div class="process-dot"></div>
                        <div class="process-step-content glass p-4 p-md-5">
                            <div class="step-num-modern gradient-text h2 mb-3">0<?php echo $i; ?></div>
                            <h3 class="h3 mb-3"><?php echo esc_html( $title ); ?></h3>
                            <p class="text-muted lead small"><?php echo esc_html( $text ); ?></p>
                        </div>
                    </div>
                <?php endfor;
            endif; ?>
        </div>
    </div>
</section>
