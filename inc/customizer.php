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

    $labels = array(
        'closeclient_about_button_text' => 'About Button Text',
        'closeclient_about_expertise_tag' => 'About Expertise Tag',
        'closeclient_about_headline_home' => 'About Headline Home',
        'closeclient_about_headline_tpl' => 'About Headline Template',
        'closeclient_about_hero_tag' => 'About Hero Tag',
        'closeclient_about_image' => 'About Image',
        'closeclient_about_method_text' => 'About Method Text',
        'closeclient_about_method_title' => 'About Method Title',
        'closeclient_about_methodology' => 'About Methodology',
        'closeclient_about_stat_1_label' => 'About Stat 1 Label',
        'closeclient_about_stat_1_val' => 'About Stat 1 Val',
        'closeclient_about_stat_2_label' => 'About Stat 2 Label',
        'closeclient_about_stat_2_val' => 'About Stat 2 Val',
        'closeclient_about_tag_home' => 'About Tag Home',
        'closeclient_about_text_p1' => 'About Text P1',
        'closeclient_about_text_p2' => 'About Text P2',
        'closeclient_about_text_tpl' => 'About Text Template',
        'closeclient_about_values' => 'About Values',
        'closeclient_about_values_tag' => 'About Values Tag',
        'closeclient_about_values_title' => 'About Values Title',
        'closeclient_accent_color' => 'Accent Color',
        'closeclient_assets_desc' => 'Assets Desc',
        'closeclient_assets_headline' => 'Assets Headline',
        'closeclient_assets_item_1_desc' => 'Assets Item 1 Desc',
        'closeclient_assets_item_1_link' => 'Assets Item 1 Link',
        'closeclient_assets_item_1_tag' => 'Assets Item 1 Tag',
        'closeclient_assets_item_1_title' => 'Assets Item 1 Title',
        'closeclient_assets_item_2_desc' => 'Assets Item 2 Desc',
        'closeclient_assets_item_2_link' => 'Assets Item 2 Link',
        'closeclient_assets_item_2_tag' => 'Assets Item 2 Tag',
        'closeclient_assets_item_2_title' => 'Assets Item 2 Title',
        'closeclient_assets_item_3_desc' => 'Assets Item 3 Desc',
        'closeclient_assets_item_3_link' => 'Assets Item 3 Link',
        'closeclient_assets_item_3_tag' => 'Assets Item 3 Tag',
        'closeclient_assets_item_3_title' => 'Assets Item 3 Title',
        'closeclient_assets_item_4_desc' => 'Assets Item 4 Desc',
        'closeclient_assets_item_4_link' => 'Assets Item 4 Link',
        'closeclient_assets_item_4_tag' => 'Assets Item 4 Tag',
        'closeclient_assets_item_4_title' => 'Assets Item 4 Title',
        'closeclient_audit_modal_btn' => 'Audit Modal Btn',
        'closeclient_audit_modal_desc' => 'Audit Modal Desc',
        'closeclient_audit_modal_email_placeholder' => 'Audit Modal Email Placeholder',
        'closeclient_audit_modal_name_placeholder' => 'Audit Modal Name Placeholder',
        'closeclient_audit_modal_tag' => 'Audit Modal Tag',
        'closeclient_audit_modal_title' => 'Audit Modal Title',
        'closeclient_author_tag' => 'Author Tag',
        'closeclient_authority_desc' => 'Authority Desc',
        'closeclient_authority_logo_$i' => 'Authority Logo $i',
        'closeclient_authority_tag' => 'Authority Tag',
        'closeclient_bg_color' => 'Bg Color',
        'closeclient_blog_btn_text' => 'Blog Btn Text',
        'closeclient_blog_description' => 'Blog Description',
        'closeclient_blog_sidebar' => 'Blog Sidebar',
        'closeclient_blog_title' => 'Blog Title',
        'closeclient_body_font' => 'Body Font',
        'closeclient_booking_headline' => 'Booking Headline',
        'closeclient_booking_link' => 'Booking Link',
        'closeclient_booking_note' => 'Booking Note',
        'closeclient_booking_scarcity' => 'Booking Scarcity',
        'closeclient_booking_subheadline' => 'Booking Subheadline',
        'closeclient_booking_text' => 'Booking Text',
        'closeclient_comments_closed_text' => 'Comments Closed Text',
        'closeclient_comments_plural_title' => 'Comments Plural Title',
        'closeclient_comments_singular_title' => 'Comments Singular Title',
        'closeclient_comments_submit_label' => 'Comments Submit Label',
        'closeclient_contact_btn_text' => 'Contact Btn Text',
        'closeclient_contact_direct_desc' => 'Contact Direct Desc',
        'closeclient_contact_direct_title' => 'Contact Direct Title',
        'closeclient_contact_email' => 'Contact Email',
        'closeclient_contact_email_label' => 'Contact Email Label',
        'closeclient_contact_form_action' => 'Contact Form Action',
        'closeclient_contact_form_not_configured_text' => 'Contact Form Not Configured Text',
        'closeclient_contact_form_shortcode' => 'Contact Form Shortcode',
        'closeclient_contact_headline_tpl' => 'Contact Headline Template',
        'closeclient_contact_message_label' => 'Contact Message Label',
        'closeclient_contact_name_label' => 'Contact Name Label',
        'closeclient_contact_phone' => 'Contact Phone',
        'closeclient_contact_subheadline_tpl' => 'Contact Subheadline Template',
        'closeclient_contact_tag_tpl' => 'Contact Tag Template',
        'closeclient_default_layout' => 'Default Layout',
        'closeclient_faq_a1' => 'Faq A1',
        'closeclient_faq_a2' => 'Faq A2',
        'closeclient_faq_a3' => 'Faq A3',
        'closeclient_faq_a4' => 'Faq A4',
        'closeclient_faq_footer_btn' => 'Faq Footer Btn',
        'closeclient_faq_footer_text' => 'Faq Footer Text',
        'closeclient_faq_headline' => 'Faq Headline',
        'closeclient_faq_q1' => 'Faq Q1',
        'closeclient_faq_q2' => 'Faq Q2',
        'closeclient_faq_q3' => 'Faq Q3',
        'closeclient_faq_q4' => 'Faq Q4',
        'closeclient_faq_tag' => 'Faq Tag',
        'closeclient_floating_cta_threshold' => 'Floating CTA Threshold',
        'closeclient_footer_about' => 'Footer About',
        'closeclient_footer_back_top' => 'Footer Back Top',
        'closeclient_footer_col2_title' => 'Footer Col2 Title',
        'closeclient_footer_col3_title' => 'Footer Col3 Title',
        'closeclient_footer_copyright' => 'Footer Copyright',
        'closeclient_footer_cta_btn_text' => 'Footer CTA Btn Text',
        'closeclient_footer_cta_text_label' => 'Footer CTA Text Label',
        'closeclient_footer_disclaimer' => 'Footer Disclaimer',
        'closeclient_footer_newsletter_show' => 'Footer Newsletter Show',
        'closeclient_footer_privacy_label' => 'Footer Privacy Label',
        'closeclient_footer_ribbon_bg' => 'Footer Ribbon Bg',
        'closeclient_footer_ribbon_color' => 'Footer Ribbon Color',
        'closeclient_footer_ribbon_logos' => 'Footer Ribbon Logos',
        'closeclient_footer_ribbon_speed' => 'Footer Ribbon Speed',
        'closeclient_footer_ribbon_tag' => 'Footer Ribbon Tag',
        'closeclient_footer_status_color' => 'Footer Status Color',
        'closeclient_footer_status_text' => 'Footer Status Text',
        'closeclient_footer_terms_label' => 'Footer Terms Label',
        'closeclient_form_not_configured_text' => 'Form Not Configured Text',
        'closeclient_header_cta_link' => 'Header CTA Link',
        'closeclient_header_cta_text' => 'Header CTA Text',
        'closeclient_heading_font' => 'Heading Font',
        'closeclient_hero_cta' => 'Hero CTA',
        'closeclient_hero_cta_link' => 'Hero CTA Link',
        'closeclient_hero_headline' => 'Hero Headline',
        'closeclient_hero_image' => 'Hero Image',
        'closeclient_hero_proof_text' => 'Hero Proof Text',
        'closeclient_hero_subheadline' => 'Hero Subheadline',
        'closeclient_hero_typewriter' => 'Hero Typewriter',
        'closeclient_label_404_btn' => 'Label 404 Btn',
        'closeclient_label_404_tag' => 'Label 404 Tag',
        'closeclient_label_404_text' => 'Label 404 Text',
        'closeclient_label_404_title' => 'Label 404 Title',
        'closeclient_label_all_stories' => 'Label All Stories',
        'closeclient_label_all_systems' => 'Label All Systems',
        'closeclient_label_archive' => 'Label Archive',
        'closeclient_label_challenge' => 'Label Challenge',
        'closeclient_label_continue_reading' => 'Label Continue Reading',
        'closeclient_label_edit_post' => 'Label Edit Post',
        'closeclient_label_included' => 'Label Included',
        'closeclient_label_next_post' => 'Label Next Post',
        'closeclient_label_none_general' => 'Label None General',
        'closeclient_label_none_publish_cta' => 'Label None Publish CTA',
        'closeclient_label_none_search' => 'Label None Search',
        'closeclient_label_none_tag' => 'Label None Tag',
        'closeclient_label_none_title' => 'Label None Title',
        'closeclient_label_outcome' => 'Label Outcome',
        'closeclient_label_page_links' => 'Label Page Links',
        'closeclient_label_popular' => 'Label Popular',
        'closeclient_label_portfolio_archive_desc' => 'Label Portfolio Archive Desc',
        'closeclient_label_portfolio_archive_tag' => 'Label Portfolio Archive Tag',
        'closeclient_label_portfolio_archive_title' => 'Label Portfolio Archive Title',
        'closeclient_label_portfolio_btn' => 'Label Portfolio Btn',
        'closeclient_label_portfolio_single' => 'Label Portfolio Single',
        'closeclient_label_prev_post' => 'Label Prev Post',
        'closeclient_label_read_more' => 'Label Read More',
        'closeclient_label_related' => 'Label Related',
        'closeclient_label_search' => 'Label Search',
        'closeclient_label_search_btn' => 'Label Search Btn',
        'closeclient_label_search_query' => 'Label Search Query',
        'closeclient_label_secure' => 'Label Secure',
        'closeclient_label_service_archive_desc' => 'Label Service Archive Desc',
        'closeclient_label_service_archive_tag' => 'Label Service Archive Tag',
        'closeclient_label_service_archive_title' => 'Label Service Archive Title',
        'closeclient_label_service_btn' => 'Label Service Btn',
        'closeclient_label_service_single' => 'Label Service Single',
        'closeclient_label_share' => 'Label Share',
        'closeclient_label_skip_link' => 'Label Skip Link',
        'closeclient_label_solution' => 'Label Solution',
        'closeclient_label_sys_nodes' => 'Label Sys Nodes',
        'closeclient_landing_headline_tpl' => 'Landing Headline Template',
        'closeclient_landing_text_tpl' => 'Landing Text Template',
        'closeclient_leadmagnet_headline_tpl' => 'Leadmagnet Headline Template',
        'closeclient_leadmagnet_inside_title' => 'Leadmagnet Inside Title',
        'closeclient_leadmagnet_mockup_text' => 'Leadmagnet Mockup Text',
        'closeclient_leadmagnet_tag_tpl' => 'Leadmagnet Tag Template',
        'closeclient_leadmagnet_text_tpl' => 'Leadmagnet Text Template',
        'closeclient_lm_benefits' => 'Lm Benefits',
        'closeclient_lm_button' => 'Lm Button',
        'closeclient_lm_form_action' => 'Lm Form Action',
        'closeclient_lm_headline' => 'Lm Headline',
        'closeclient_lm_image' => 'Lm Image',
        'closeclient_lm_subheadline' => 'Lm Subheadline',
        'closeclient_lm_tag' => 'Lm Tag',
        'closeclient_logo_ticker_tag' => 'Logo Ticker Tag',
        'closeclient_menu_label_about' => 'Menu Label About',
        'closeclient_menu_label_audit' => 'Menu Label Audit',
        'closeclient_menu_label_blog' => 'Menu Label Blog',
        'closeclient_menu_label_cases' => 'Menu Label Cases',
        'closeclient_menu_label_services' => 'Menu Label Services',
        'closeclient_menu_label_training' => 'Menu Label Training',
        'closeclient_newsletter_button' => 'Newsletter Button',
        'closeclient_newsletter_form_action' => 'Newsletter Form Action',
        'closeclient_newsletter_placeholder' => 'Newsletter Placeholder',
        'closeclient_newsletter_text' => 'Newsletter Text',
        'closeclient_newsletter_title' => 'Newsletter Title',
        'closeclient_portfolio_empty_text' => 'Portfolio Empty Text',
        'closeclient_portfolio_headline' => 'Portfolio Headline',
        'closeclient_portfolio_tag' => 'Portfolio Tag',
        'closeclient_pricing_headline' => 'Pricing Headline',
        'closeclient_pricing_tag' => 'Pricing Tag',
        'closeclient_pricing_trust_1' => 'Pricing Trust 1',
        'closeclient_pricing_trust_2' => 'Pricing Trust 2',
        'closeclient_pricing_trust_3' => 'Pricing Trust 3',
        'closeclient_primary_color' => 'Primary Color',
        'closeclient_privacy_content' => 'Privacy Content',
        'closeclient_process_headline' => 'Process Headline',
        'closeclient_process_tag' => 'Process Tag',
        'closeclient_product_btn_text' => 'Product Btn Text',
        'closeclient_product_empty_text' => 'Product Empty Text',
        'closeclient_products_desc' => 'Products Desc',
        'closeclient_products_headline' => 'Products Headline',
        'closeclient_products_tag' => 'Products Tag',
        'closeclient_sales_hero_cta_tpl' => 'Sales Hero CTA Template',
        'closeclient_sales_hero_headline_tpl' => 'Sales Hero Headline Template',
        'closeclient_sales_hero_subheadline_tpl' => 'Sales Hero Subheadline Template',
        'closeclient_sales_hero_tag_tpl' => 'Sales Hero Tag Template',
        'closeclient_sales_value_stack' => 'Sales Value Stack',
        'closeclient_sales_value_stack_desc' => 'Sales Value Stack Desc',
        'closeclient_sales_value_stack_title' => 'Sales Value Stack Title',
        'closeclient_secondary_color' => 'Secondary Color',
        'closeclient_service_1_text' => 'Service 1 Text',
        'closeclient_service_1_title' => 'Service 1 Title',
        'closeclient_service_2_text' => 'Service 2 Text',
        'closeclient_service_2_title' => 'Service 2 Title',
        'closeclient_service_3_text' => 'Service 3 Text',
        'closeclient_service_3_title' => 'Service 3 Title',
        'closeclient_service_4_text' => 'Service 4 Text',
        'closeclient_service_4_title' => 'Service 4 Title',
        'closeclient_services_headline' => 'Services Headline',
        'closeclient_services_hero_headline_tpl' => 'Services Hero Headline Template',
        'closeclient_services_subheadline_tpl' => 'Services Subheadline Template',
        'closeclient_services_tag' => 'Services Tag',
        'closeclient_show_authority_ribbon' => 'Show Authority Ribbon',
        'closeclient_show_floating_cta' => 'Show Floating CTA',
        'closeclient_show_footer_console' => 'Show Footer Console',
        'closeclient_show_footer_footprint' => 'Show Footer Footprint',
        'closeclient_show_preloader' => 'Show Preloader',
        'closeclient_sidebar_insight_tag' => 'Sidebar Insight Tag',
        'closeclient_sidebar_insight_text' => 'Sidebar Insight Text',
        'closeclient_sidebar_insight_title' => 'Sidebar Insight Title',
        'closeclient_site_layout_type' => 'Site Layout Type',
        'closeclient_social_facebook' => 'Social Facebook',
        'closeclient_social_instagram' => 'Social Instagram',
        'closeclient_social_linkedin' => 'Social Linkedin',
        'closeclient_social_twitter' => 'Social Twitter',
        'closeclient_social_youtube' => 'Social Youtube',
        'closeclient_stat_1_desc' => 'Stat 1 Desc',
        'closeclient_stat_1_label' => 'Stat 1 Label',
        'closeclient_stat_1_value' => 'Stat 1 Value',
        'closeclient_stat_2_desc' => 'Stat 2 Desc',
        'closeclient_stat_2_label' => 'Stat 2 Label',
        'closeclient_stat_2_value' => 'Stat 2 Value',
        'closeclient_stat_3_desc' => 'Stat 3 Desc',
        'closeclient_stat_3_label' => 'Stat 3 Label',
        'closeclient_stat_3_value' => 'Stat 3 Value',
        'closeclient_stat_4_desc' => 'Stat 4 Desc',
        'closeclient_stat_4_label' => 'Stat 4 Label',
        'closeclient_stat_4_value' => 'Stat 4 Value',
        'closeclient_stats_tag' => 'Stats Tag',
        'closeclient_sticky_cta_button' => 'Sticky CTA Button',
        'closeclient_sticky_cta_link' => 'Sticky CTA Link',
        'closeclient_sticky_cta_text' => 'Sticky CTA Text',
        'closeclient_sticky_cta_title' => 'Sticky CTA Title',
        'closeclient_team_1_name' => 'Team 1 Name',
        'closeclient_team_1_role' => 'Team 1 Role',
        'closeclient_team_2_name' => 'Team 2 Name',
        'closeclient_team_2_role' => 'Team 2 Role',
        'closeclient_team_3_name' => 'Team 3 Name',
        'closeclient_team_3_role' => 'Team 3 Role',
        'closeclient_team_4_name' => 'Team 4 Name',
        'closeclient_team_4_role' => 'Team 4 Role',
        'closeclient_team_headline' => 'Team Headline',
        'closeclient_team_tag' => 'Team Tag',
        'closeclient_terms_content' => 'Terms Content',
        'closeclient_testimonial_1_name' => 'Testimonial 1 Name',
        'closeclient_testimonial_1_result' => 'Testimonial 1 Result',
        'closeclient_testimonial_1_text' => 'Testimonial 1 Text',
        'closeclient_testimonial_2_name' => 'Testimonial 2 Name',
        'closeclient_testimonial_2_result' => 'Testimonial 2 Result',
        'closeclient_testimonial_2_text' => 'Testimonial 2 Text',
        'closeclient_testimonial_3_name' => 'Testimonial 3 Name',
        'closeclient_testimonial_3_result' => 'Testimonial 3 Result',
        'closeclient_testimonial_3_text' => 'Testimonial 3 Text',
        'closeclient_testimonial_4_name' => 'Testimonial 4 Name',
        'closeclient_testimonial_4_result' => 'Testimonial 4 Result',
        'closeclient_testimonial_4_text' => 'Testimonial 4 Text',
        'closeclient_testimonials_headline' => 'Testimonials Headline',
        'closeclient_testimonials_sub' => 'Testimonials Sub',
        'closeclient_testimonials_tag' => 'Testimonials Tag',
        'closeclient_thankyou_blog_btn' => 'Thankyou Blog Btn',
        'closeclient_thankyou_cases_btn' => 'Thankyou Cases Btn',
        'closeclient_thankyou_headline_tpl' => 'Thankyou Headline Template',
        'closeclient_thankyou_insights_text' => 'Thankyou Insights Text',
        'closeclient_thankyou_stories_text' => 'Thankyou Stories Text',
        'closeclient_thankyou_text_tpl' => 'Thankyou Text Template',
        'closeclient_thankyou_wait_title' => 'Thankyou Wait Title',
        'closeclient_vsl_headline' => 'VSL Headline',
        'closeclient_vsl_placeholder' => 'VSL Placeholder',
        'closeclient_vsl_tag' => 'VSL Tag',
        'closeclient_vsl_takeaways' => 'VSL Takeaways',
        'closeclient_vsl_video_url' => 'VSL Video URL',
    );

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
                'section' => "closeclient_colors",
                'type' => "select",
                'choices' => array(
                    'deep-onyx' => "Deep Onyx (Default)",
                    'royal-indigo' => "Royal Indigo",
                    'forest-expert' => "Forest Expert",
                    'midnight-gold' => "Midnight Gold",
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
        'label' => "Recreate Starter Pages",
        'description' => '<a href="' . admin_url('?closeclient_action=generate&_wpnonce=' . wp_create_nonce('closeclient_utility_action')) . '" class="button button-primary">Generate Now</a>',
        'section' => "closeclient_utilities",
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
