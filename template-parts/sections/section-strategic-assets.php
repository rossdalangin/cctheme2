<?php
/**
 * Strategic Assets Section
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_assets_headline', 'Elite Authority Asset Suite' );
$desc     = get_theme_mod( 'closeclient_assets_desc', 'Strategic frameworks and high-fidelity protocols engineered for 8-figure coaches and consultants.' );
?>

<section id="strategic-assets" class="section section-lg bg-black overflow-hidden">
    <div class="mesh-gradient"></div>
    <div class="container">
        <div class="section-header text-center reveal mb-5">
            <span class="section-tag"><?php echo esc_html__( 'THE BLUEPRINTS', 'closeclient' ); ?></span>
            <h2 class="section-headline gradient-text"><?php echo esc_html( $headline ); ?></h2>
            <p class="lead text-muted mt-4 max-w-800 mx-auto"><?php echo esc_html( $desc ); ?></p>
        </div>

        <div class="bento-grid pt-lg">
            <?php
            $assets = array(
                array(
                    'title' => 'Authority Playbook',
                    'desc'  => 'The definitive high-ticket positioning protocol for absolute market dominance.',
                    'icon'  => '📖',
                    'span'  => 'bento-span-4'
                ),
                array(
                    'title' => 'Scaling Framework 100K',
                    'desc'  => 'Mathematical roadmap to reach $100k/mo through high-fidelity infrastructure.',
                    'icon'  => '📈',
                    'span'  => 'bento-span-8'
                ),
                array(
                    'title' => 'Elite User Guide',
                    'desc'  => 'Operational protocol for maximizing efficiency within your authority ecosystem.',
                    'icon'  => '🛡️',
                    'span'  => 'bento-span-7'
                ),
                array(
                    'title' => 'VSL Script Protocol',
                    'desc'  => 'The "Big Domino" script engineered for high-intent, high-ticket conversion.',
                    'icon'  => '🎬',
                    'span'  => 'bento-span-5'
                ),
                array(
                    'title' => 'Marketing Roadmap',
                    'desc'  => 'Tactical client acquisition systems for 8-figure agencies.',
                    'icon'  => '🎯',
                    'span'  => 'bento-span-5'
                ),
                array(
                    'title' => 'Business Framework',
                    'desc'  => 'Strategic operational foundations for sustainable multi-year scale.',
                    'icon'  => '🏢',
                    'span'  => 'bento-span-7'
                )
            );

            foreach ( $assets as $asset ) : ?>
                <div class="asset-card cc-card reveal d-flex flex-column <?php echo esc_attr($asset['span']); ?>">
                    <div class="asset-icon mb-4" style="font-size: 2.5rem;"><?php echo $asset['icon']; ?></div>
                    <h3 class="h4 mb-3 text-white"><?php echo esc_html($asset['title']); ?></h3>
                    <p class="text-muted small mb-5 lead"><?php echo esc_html($asset['desc']); ?></p>
                    <div class="mt-auto">
                        <a href="#audit" class="cc-button cc-button-secondary w-100"><?php echo esc_html__( 'Secure Strategic Asset →', 'closeclient' ); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
