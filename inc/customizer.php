<?php
/**
 * CloseClient Customizer functionality
 * AUTO-GENERATED - Triple-Lock Sync
 */

function closeclient_hex_to_rgb( $hex ) {
    $hex = str_replace( '#', '', $hex );
    if ( strlen( $hex ) == 3 ) {
        $r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
        $g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
        $b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
    } else {
        $r = hexdec( substr( $hex, 0, 2 ) );
        $g = hexdec( substr( $hex, 2, 2 ) );
        $b = hexdec( substr( $hex, 4, 2 ) );
    }
    return "$r, $g, $b";
}

function closeclient_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'closeclient_brand_panel', array( 'title' => '1. Elite Brand Identity' ) );
    $wp_customize->add_panel( 'closeclient_homepage_panel', array( 'title' => '3. Homepage Sections' ) );
    $wp_customize->add_panel( 'closeclient_layout_panel', array( 'title' => '2. Strategic Layout Control' ) );
    $wp_customize->add_panel( 'closeclient_pages_panel', array( 'title' => '4. Page Templates' ) );

    $wp_customize->add_section( 'closeclient_about_tpl', array( 'title' => 'About Template', 'panel' => 'closeclient_pages_panel' ) );
    $wp_customize->add_section( 'closeclient_booking', array( 'title' => 'Booking CTA', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_colors', array( 'title' => 'Theme Colors', 'panel' => 'closeclient_brand_panel' ) );
    $wp_customize->add_section( 'closeclient_contact_tpl', array( 'title' => 'Contact Template', 'panel' => 'closeclient_pages_panel' ) );
    $wp_customize->add_section( 'closeclient_faq', array( 'title' => 'FAQ', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_forms', array( 'title' => 'Form & CRM Actions', 'panel' => 'closeclient_brand_panel' ) );
    $wp_customize->add_section( 'closeclient_hero', array( 'title' => '1. Hero Content', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_labels', array( 'title' => 'Global UI Labels', 'panel' => 'closeclient_pages_panel' ) );
    $wp_customize->add_section( 'closeclient_layout_section', array( 'title' => 'Global Layout', 'panel' => 'closeclient_layout_panel' ) );
    $wp_customize->add_section( 'closeclient_leadmagnet_tpl', array( 'title' => 'Lead Magnet Template', 'panel' => 'closeclient_pages_panel' ) );
    $wp_customize->add_section( 'closeclient_portfolio', array( 'title' => 'Portfolio', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_authority_section', array( 'title' => 'Authority & Proof', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_pricing', array( 'title' => 'Pricing', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_process', array( 'title' => 'Process', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_services', array( 'title' => 'Services', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_social', array( 'title' => 'Social Media Links', 'panel' => 'closeclient_layout_panel' ) );
    $wp_customize->add_section( 'closeclient_stats', array( 'title' => 'Stats & Impact', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_team', array( 'title' => 'Team', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_testimonials', array( 'title' => 'Testimonials', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_thankyou_tpl', array( 'title' => 'Thank You Template', 'panel' => 'closeclient_pages_panel' ) );
    $wp_customize->add_section( 'closeclient_typography', array( 'title' => 'Typography', 'panel' => 'closeclient_brand_panel' ) );
    $wp_customize->add_section( 'closeclient_utilities', array( 'title' => '5. Theme Setup & Tools' ) );
    $wp_customize->add_section( 'closeclient_vsl', array( 'title' => '2. VSL Training', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_assets', array( 'title' => 'Strategic Assets', 'panel' => 'closeclient_homepage_panel' ) );
    $wp_customize->add_section( 'closeclient_footer_section', array( 'title' => 'Strategic Footer', 'panel' => 'closeclient_layout_panel' ) );

    $labels = array();

    $defaults = closeclient_get_defaults();
    $post_message_keys = array(
        'closeclient_primary_color', 'closeclient_secondary_color', 'closeclient_accent_color',
        'closeclient_bg_color', 'closeclient_text_color', 'closeclient_button_hover',
        'closeclient_container_width', 'closeclient_content_width', 'closeclient_body_size',
        'closeclient_h1_size', 'closeclient_letter_spacing', 'closeclient_line_height'
    );

    foreach ($defaults as $key => $val) {
        $transport = in_array($key, $post_message_keys) ? 'postMessage' : 'refresh';

        $wp_customize->add_setting( $key, array(
            'default' => $val,
            'sanitize_callback' => (strpos($key, 'headline') !== false || strpos($key, 'text') !== false || strpos($key, 'desc') !== false || strpos($key, 'subheadline') !== false) ? 'wp_kses_post' : 'sanitize_text_field',
            'transport' => $transport
        ) );

        $section = 'closeclient_labels';
        if (strpos($key, 'color') !== false) $section = 'closeclient_colors';
        elseif (strpos($key, 'font') !== false || strpos($key, 'size') !== false || strpos($key, 'weight') !== false || strpos($key, 'spacing') !== false || strpos($key, 'line_height') !== false) $section = 'closeclient_typography';
        elseif (strpos($key, 'hero') !== false) $section = 'closeclient_hero';
        elseif (strpos($key, 'vsl') !== false) $section = 'closeclient_vsl';
        elseif (strpos($key, 'service') !== false) $section = 'closeclient_services';
        elseif (strpos($key, 'portfolio') !== false) $section = 'closeclient_portfolio';
        elseif (strpos($key, 'authority_logo') !== false) $section = 'closeclient_authority_section';
        elseif (strpos($key, 'logo_ticker') !== false) $section = 'closeclient_authority_section';
        elseif (strpos($key, 'authority_') !== false) $section = 'closeclient_authority_section';
        elseif (strpos($key, 'stat') !== false) $section = 'closeclient_stats';
        elseif (strpos($key, 'team') !== false) $section = 'closeclient_team';
        elseif (strpos($key, 'faq') !== false) $section = 'closeclient_faq';
        elseif (strpos($key, 'pricing') !== false || strpos($key, 'plan') !== false) $section = 'closeclient_pricing';
        elseif (strpos($key, 'process') !== false) $section = 'closeclient_process';
        elseif (strpos($key, 'booking') !== false) $section = 'closeclient_booking';
        elseif (strpos($key, 'social') !== false) $section = 'closeclient_social';
        elseif (strpos($key, 'width') !== false || strpos($key, 'header') !== false) $section = 'closeclient_layout_section';
        elseif (strpos($key, 'footer') !== false) $section = 'closeclient_footer_section';
        elseif (strpos($key, 'form_action') !== false || strpos($key, 'shortcode') !== false) $section = 'closeclient_forms';
        elseif (strpos($key, 'product') !== false) $section = 'closeclient_products';
        elseif (strpos($key, 'leadmagnet') !== false || strpos($key, 'lm_') !== false) $section = 'closeclient_leadmagnet_tpl';
        elseif (strpos($key, 'newsletter') !== false) $section = 'closeclient_forms';
        elseif (strpos($key, 'strategic_assets') !== false || strpos($key, 'assets_') !== false) $section = 'closeclient_assets';
        elseif (strpos($key, 'about') !== false) $section = 'closeclient_about_tpl';

        $label = isset($labels[$key]) ? $labels[$key] : $key;

        if ($key === 'closeclient_color_preset') {
            $wp_customize->add_control( $key, array(
                'label' => $label,
                'section' => 'closeclient_colors',
                'type' => 'select',
                'choices' => array(
                    'deep-onyx' => 'Deep Onyx (Default)',
                    'royal-indigo' => 'Royal Indigo',
                    'forest-expert' => 'Forest Expert',
                    'midnight-gold' => 'Midnight Gold',
                )
            ) );
        } elseif (strpos($key, 'color') !== false) {
            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array( 'label' => $label, 'section' => $section ) ) );
        } elseif (strpos($key, 'show_') !== false || $key === 'closeclient_header_sticky' || $key === 'closeclient_hero_typewriter') {
            $wp_customize->add_control( $key, array( 'label' => $label, 'section' => $section, 'type' => 'checkbox' ) );
        } elseif (strpos($key, 'authority_logo_') !== false || $key === 'closeclient_about_image') {
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $key, array( 'label' => $label, 'section' => $section ) ) );
        } elseif (strpos($key, 'headline') !== false || strpos($key, 'text') !== false || strpos($key, 'desc') !== false || strpos($key, 'subheadline') !== false || strpos($key, 'note') !== false || strpos($key, 'scarcity') !== false || strpos($key, 'disclaimer') !== false || strpos($key, 'about') !== false || strpos($key, 'methodology') !== false || strpos($key, 'search') !== false || strpos($key, 'general') !== false || strpos($key, 'placeholder') !== false) {
            $wp_customize->add_control( $key, array( 'label' => $label, 'section' => $section, 'type' => 'textarea' ) );
        } else {
            $wp_customize->add_control( $key, array( 'label' => $label, 'section' => $section ) );
        }
    }

    $wp_customize->add_setting( 'closeclient_gen_trigger', array( 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'closeclient_gen_trigger', array(
        'label' => 'Recreate Starter Pages',
        'description' => '<a href="' . admin_url('?closeclient_action=generate&_wpnonce=' . wp_create_nonce('closeclient_utility_action')) . '" class="button button-primary">Generate Now</a>',
        'section' => 'closeclient_utilities',
        'type' => 'hidden'
    ) ) );

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => function() { return get_bloginfo( 'name' ); },
        ) );
    }
}
add_action( 'customize_register', 'closeclient_customize_register' );

function closeclient_customize_css() {
    $preset = get_theme_mod( 'closeclient_color_preset', 'deep-onyx' );
    $presets = array(
        'deep-onyx' => array( 'accent' => '#6366F1', 'bg' => '#020203', 'primary' => '#020203', 'secondary' => '#0A0A0B' ),
        'royal-indigo' => array( 'accent' => '#818CF8', 'bg' => '#0F172A', 'primary' => '#0F172A', 'secondary' => '#1E293B' ),
        'forest-expert' => array( 'accent' => '#10B981', 'bg' => '#064E3B', 'primary' => '#064E3B', 'secondary' => '#065F46' ),
        'midnight-gold' => array( 'accent' => '#FBBF24', 'bg' => '#171717', 'primary' => '#171717', 'secondary' => '#262626' ),
    );
    $current = isset($presets[$preset]) ? $presets[$preset] : $presets['deep-onyx'];
    $accent = get_theme_mod( 'closeclient_accent_color', $current['accent'] );
    $bg = get_theme_mod( 'closeclient_bg_color', $current['bg'] );
    $primary = get_theme_mod( 'closeclient_primary_color', $current['primary'] );
    $secondary = get_theme_mod( 'closeclient_secondary_color', $current['secondary'] );
    $text = get_theme_mod( 'closeclient_text_color', '#F9FAFB' );
    $accent_rgb = closeclient_hex_to_rgb($accent);
    ?>
    <style type="text/css">
        :root {
            --c-accent: <?php echo $accent; ?>;
            --c-accent-rgb: <?php echo $accent_rgb; ?>;
            --c-accent-hover: <?php echo get_theme_mod( 'closeclient_button_hover', '#4F46E5' ); ?>;
            --c-primary: <?php echo $primary; ?>;
            --c-secondary: <?php echo $secondary; ?>;
            --c-bg: <?php echo $bg; ?>;
            --c-text: <?php echo $text; ?>;
            --container-width: <?php echo get_theme_mod( 'closeclient_container_width', '1200' ); ?>px;
            --content-width: <?php echo get_theme_mod( 'closeclient_content_width', '800' ); ?>px;
            --heading-font: '<?php echo get_theme_mod( 'closeclient_heading_font', 'Inter' ); ?>', sans-serif;
            --body-font: '<?php echo get_theme_mod( 'closeclient_body_font', 'Inter' ); ?>', sans-serif;
            --h1-size: <?php echo get_theme_mod( 'closeclient_h1_size', '4.5' ); ?>rem;
            --body-size: <?php echo get_theme_mod( 'closeclient_body_size', '18' ); ?>px;
            --letter-spacing: <?php echo get_theme_mod( 'closeclient_letter_spacing', '-0.022' ); ?>em;
            --line-height: <?php echo get_theme_mod( 'closeclient_line_height', '1.6' ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'closeclient_customize_css' );
