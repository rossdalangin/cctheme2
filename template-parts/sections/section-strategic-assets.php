<?php
/**
 * Strategic Assets Section
 *
 * @package CloseClient
 */

$headline = get_theme_mod( 'closeclient_assets_headline', 'Elite Authority Asset Suite' );
$desc     = get_theme_mod( 'closeclient_assets_desc', 'Strategic frameworks and high-fidelity protocols engineered for 8-figure coaches and consultants.' );
?>

<section class="section section-lg section-strategic-assets bg-dark overflow-hidden">
    <div class="mesh-gradient"></div>
    <div class="container">
        <div class="section-header text-center reveal mb-5">
            <span class="section-tag"><?php echo esc_html__( 'THE ECOSYSTEM', 'closeclient' ); ?></span>
            <h2 class="section-headline gradient-text"><?php echo esc_html( $headline ); ?></h2>
            <p class="section-subheadline text-muted lead max-w-600 mx-auto"><?php echo esc_html( $desc ); ?></p>
        </div>

        <div class="bento-grid reveal-stagger">
            <?php
            $icons = array('protocol', 'structure', 'terminal', 'asset');
            for ( $i = 1; $i <= 4; $i++ ) :
                $title = get_theme_mod( "closeclient_assets_item_{$i}_title" );
                $tag   = get_theme_mod( "closeclient_assets_item_{$i}_tag" );
                $item_desc  = get_theme_mod( "closeclient_assets_item_{$i}_desc" );
                $link  = get_theme_mod( "closeclient_assets_item_{$i}_link", '#audit' );
                $icon  = $icons[$i-1];

                if ( empty($title) ) continue;
                ?>
                <div class="cc-card asset-card bento-span-6 p-5 overflow-hidden position-relative">
                    <div class="asset-watermark opacity-05">CONFIDENTIAL</div>
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <span class="badge bg-accent text-dark rounded-pill py-1 px-3 fw-black" style="font-size: 0.55rem;"><?php echo esc_html($tag); ?></span>
                        <div class="text-accent opacity-30"><?php echo closeclient_get_svg($icon); ?></div>
                    </div>
                    <h3 class="h4 mb-3 text-white"><?php echo esc_html($title); ?></h3>
                    <p class="text-muted small mb-5 lead opacity-80"><?php echo esc_html($item_desc); ?></p>
                    <div class="mt-auto">
                        <a href="<?php echo esc_url($link); ?>" class="cc-button cc-button-secondary py-2 px-4 <?php echo ($link === '#audit') ? 'trigger-audit-modal' : ''; ?>" style="font-size: 0.65rem;">Request Secure Access →</a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
