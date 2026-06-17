<?php
/**
 * CloseClient functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CloseClient
 */

/**
 * Authority Growth Hub - Strategic Asset Integration
 */
function closeclient_authority_hub_page() {
    add_menu_page(
        'Authority Hub',
        'Authority Hub',
        'manage_options',
        'authority-hub',
        'closeclient_render_authority_hub',
        'dashicons-performance',
        3
    );
}
add_action( 'admin_menu', 'closeclient_authority_hub_page' );

function closeclient_render_authority_hub() {
    ?>
    <div class="wrap authority-hub-wrap" style="max-width: 1200px; margin: 40px auto; font-family: 'Inter', sans-serif;">
        <div style="background: #020203; color: #fff; padding: 80px 60px; border-radius: 32px; border: 1px solid rgba(255,255,255,0.08); box-shadow: 0 50px 120px rgba(0,0,0,0.8); position: relative; overflow: hidden;">
            <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(99,102,241,0.05) 0%, transparent 70%); pointer-events: none;"></div>

            <div style="text-align: center; margin-bottom: 70px; position: relative; z-index: 1;">
                <span style="font-size: 0.7rem; font-weight: 900; letter-spacing: 0.6em; color: #6366F1; text-transform: uppercase; display: block; margin-bottom: 25px; opacity: 0.8;">CENTRAL COMMAND PROTOCOL</span>
                <h1 style="font-size: 3.5rem; font-weight: 900; letter-spacing: -0.06em; margin-bottom: 25px; line-height: 0.9; color: #fff;">Authority Growth Hub</h1>
                <p style="font-size: 1.15rem; color: #94A3B8; max-width: 650px; margin: 0 auto; line-height: 1.7; font-weight: 500;">The definitive tactical repository for 8-figure agency scale and high-fidelity authority engineering.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px; margin-top: 50px; position: relative; z-index: 1;">
                <?php
                $docs = array(
                    'AUTHORITY_PLAYBOOK.md' => array('title' => 'Authority Playbook', 'icon' => '📖', 'desc' => 'The definitive protocol for absolute market dominance.'),
                    'SCALING_FRAMEWORK_100K.md' => array('title' => '100K Scaling Framework', 'icon' => '📈', 'desc' => 'Mathematical roadmap for high-fidelity revenue scale.'),
                    'BUSINESS_PLAN.md' => array('title' => 'Operational Blueprint', 'icon' => '🛡️', 'desc' => 'Strategic foundations for multi-year sustainable growth.'),
                    'MARKETING_PLAN.md' => array('title' => 'Tactical Acquisition', 'icon' => '🎯', 'desc' => 'Zero-friction client acquisition and authority systems.')
                );

                foreach ( $docs as $file => $data ) :
                    $content = '';
                    $file_path = get_template_directory() . '/' . $file;
                    if ( file_exists( $file_path ) ) {
                        $content = file_get_contents( $file_path );
                        // Basic markdown preview (first 150 chars)
                        $preview = wp_trim_words( strip_tags($content), 20 );
                    } else {
                        $preview = "Asset currently undergoing high-fidelity technical audit.";
                    }
                    ?>
                    <div style="background: rgba(255,255,255,0.03); padding: 40px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                            <div style="font-size: 2.5rem;"><?php echo $data['icon']; ?></div>
                            <span style="font-size: 0.6rem; color: #6366F1; border: 1px solid #6366F1; padding: 4px 10px; border-radius: 100px; font-weight: 900; letter-spacing: 0.1em;">ENCRYPTED</span>
                        </div>
                        <h3 style="color: #fff; margin-bottom: 10px; font-size: 1.4rem; font-weight: 900; letter-spacing: -0.02em;"><?php echo $data['title']; ?></h3>
                        <p style="color: #94A3B8; font-size: 0.95rem; margin-bottom: 20px; line-height: 1.6; font-style: italic;">"<?php echo esc_html($preview); ?>..."</p>
                        <a href="<?php echo esc_url( get_template_directory_uri() . '/' . $file ); ?>" target="_blank" style="display: inline-block; background: #6366F1; color: #fff; text-decoration: none; padding: 14px 28px; border-radius: 100px; font-weight: 900; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.15em; box-shadow: 0 10px 30px rgba(99,102,241,0.3);">Access Strategic Data →</a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div style="margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(255,255,255,0.1); text-align: center;">
                <h4 style="color: #fff; margin-bottom: 15px; font-size: 1rem;">System Maintenance</h4>
                <a href="<?php echo admin_url('customize.php?autofocus[section]=closeclient_utilities'); ?>" style="color: #6366F1; text-decoration: none; font-weight: 700; font-size: 0.85rem;">Access Strategic Customizer Tools →</a>
            </div>
        </div>
    </div>
    <?php
}

if ( ! defined( 'CLOSECLIENT_VERSION' ) ) {
	define( 'CLOSECLIENT_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function closeclient_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// Register theme navigation menus.
	register_nav_menus(
		array(
			'menu-1'   => esc_html__( 'Primary', 'closeclient' ),
			'footer-1' => esc_html__( 'Footer Solutions', 'closeclient' ),
			'footer-2' => esc_html__( 'Footer Strategic', 'closeclient' ),
			'footer-3' => esc_html__( 'Footer Connect', 'closeclient' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'closeclient_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'closeclient_setup' );

/**
 * Register widget area.
 */
function closeclient_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'closeclient' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'closeclient' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'closeclient_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function closeclient_scripts() {
	wp_enqueue_style( 'closeclient-style', get_stylesheet_uri(), array(), CLOSECLIENT_VERSION );
	wp_enqueue_style( 'closeclient-main', get_template_directory_uri() . '/assets/css/main.css', array(), CLOSECLIENT_VERSION );

	wp_enqueue_script( 'closeclient-navigation', get_template_directory_uri() . '/assets/js/main.js', array(), CLOSECLIENT_VERSION, true );

    if ( is_customize_preview() ) {
		wp_enqueue_script( 'closeclient-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), CLOSECLIENT_VERSION, true );
	}

    wp_localize_script( 'closeclient-navigation', 'closeclientData', array(
        'ctaThreshold' => get_theme_mod( 'closeclient_floating_cta_threshold', 500 ),
    ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'closeclient_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Custom template tags for this theme.
 */
if ( ! function_exists( 'closeclient_posted_on' ) ) :
	function closeclient_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'closeclient' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

        // Add Estimated Reading Time
        if ( is_singular( 'post' ) || is_home() || is_archive() || is_search() ) {
            $post_id = get_the_ID();
            $content = get_post_field( 'post_content', $post_id );
            $word_count = str_word_count( strip_tags( $content ) );
            $reading_time = ceil( $word_count / 200 ); // Average 200 wpm
            echo '<span class="reading-time ms-3 text-muted small"><span class="me-1">⏱</span>' . esc_html( $reading_time ) . ' min read</span>';
        }
	}
endif;

if ( ! function_exists( 'closeclient_posted_by' ) ) :
	function closeclient_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'closeclient' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
endif;

if ( ! function_exists( 'closeclient_entry_footer' ) ) :
	function closeclient_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'closeclient' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'closeclient' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'closeclient' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'closeclient' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'closeclient' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: post title */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'closeclient' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'closeclient_post_thumbnail' ) ) :
	function closeclient_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

/**
 * Get the current layout based on customizer settings.
 */
function closeclient_get_layout() {
    return get_theme_mod( 'closeclient_default_layout', 'right-sidebar' );
}

/**
 * Register Custom Post Types.
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Breadcrumbs helper function.
 */
function closeclient_breadcrumbs() {
    if ( is_front_page() ) return;

    echo '<nav class="breadcrumbs" aria-label="breadcrumb">';
    echo '<div class="container">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'closeclient' ) . '</a>';

    if ( is_category() || is_single() ) {
        echo ' <span class="sep">/</span> ';
        the_category( ' <span class="sep">/</span> ' );
        if ( is_single() ) {
            echo ' <span class="sep">/</span> ';
            the_title();
        }
    } elseif ( is_page() ) {
        echo ' <span class="sep">/</span> ';
        the_title();
    } elseif ( is_search() ) {
        echo ' <span class="sep">/</span> ';
        printf( esc_html__( 'Search results for "%s"', 'closeclient' ), get_search_query() );
    }

    echo '</div>';
    echo '</nav>';
}

/**
 * Enqueue Google Fonts based on Customizer settings.
 */
function closeclient_google_fonts() {
    $heading_font = get_theme_mod( 'closeclient_heading_font', 'Inter' );
    $body_font = get_theme_mod( 'closeclient_body_font', 'Inter' );

    $fonts = array();

    if ( $heading_font !== 'Inter' ) {
        $fonts[] = 'family=' . str_replace( ' ', '+', $heading_font ) . ':wght@400;600;700;800';
    }
    if ( $body_font !== 'Inter' && $body_font !== $heading_font ) {
        $fonts[] = 'family=' . str_replace( ' ', '+', $body_font ) . ':wght@400;600;700';
    }

    if ( ! empty( $fonts ) ) {
        $fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $fonts ) . '&display=swap';
        wp_enqueue_style( 'closeclient-google-fonts', $fonts_url, array(), null );
    }
}
add_action( 'wp_enqueue_scripts', 'closeclient_google_fonts' );

/**
 * Custom hooks.
 */
require get_template_directory() . '/inc/hooks.php';

/**
 * Section shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Theme utilities.
 */
require get_template_directory() . '/inc/utilities.php';

/**
 * Admin guide.
 */
require get_template_directory() . '/inc/admin-guide.php';

/**
 * Menu Fallback
 */
function closeclient_menu_fallback() {
    echo '<ul class="primary-menu-list">';
    echo '<li><a href="' . esc_url( home_url( '/solutions' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_services', 'The Protocol' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/success-proof' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_cases', 'Protocol Analysis' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/the-method' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_about', 'The Framework' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/strategic-insights' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_blog', 'Strategic Insights' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/book-audit' ) ) . '" class="cc-button-nav">' . esc_html( get_theme_mod( 'closeclient_menu_label_audit', 'Secure Audit' ) ) . '</a></li>';
    echo '</ul>';
}

/**
 * Footer 1 Fallback
 */
function closeclient_footer_1_fallback() {
    echo '<ul class="list-unstyled small text-muted">';
    echo '<li><a href="' . esc_url( home_url( '/solutions' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_services', 'The Protocol' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/success-proof' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_cases', 'Protocol Analysis' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/strategic-insights' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_blog', 'Strategic Insights' ) ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/training' ) ) . '">' . esc_html( get_theme_mod( 'closeclient_menu_label_training', 'VSL Protocol' ) ) . '</a></li>';
    echo '</ul>';
}

/**
 * Footer 2 Fallback
 */
function closeclient_footer_2_fallback() {
    echo '<ul class="list-unstyled small text-muted">';
    echo '<li><a href="' . esc_url( home_url( '/strategic-assets' ) ) . '">Authority Blueprints</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/vsl-protocol' ) ) . '">VSL Protocol</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/the-method' ) ) . '">The Framework</a></li>';
    echo '</ul>';
}

/**
 * Footer 3 Fallback
 */
function closeclient_footer_3_fallback() {
    echo '<ul class="list-unstyled small text-muted">';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">Our Mission</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/blog' ) ) . '">Strategic Insights</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Direct Command</a></li>';
    echo '</ul>';
}

/**
 * Global Schema JSON-LD
 */
function closeclient_schema_json_ld() {
    $schemas = array();

    // 1. Organization / Business Schema
    $org_schema = array(
        '@context' => 'https://schema.org',
        '@type'    => 'ProfessionalService',
        'name'     => get_bloginfo( 'name' ),
        'url'      => home_url(),
        'logo'     => has_custom_logo() ? wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) : '',
        'description' => get_bloginfo( 'description' ),
        'address'  => array(
            '@type' => 'PostalAddress',
            'addressCountry' => 'US'
        )
    );
    $schemas[] = $org_schema;

    // 2. BreadcrumbList Schema
    if ( ! is_front_page() ) {
        $breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type'    => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => home_url()
                )
            )
        );

        if ( is_singular() ) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink()
            );
        }
        $schemas[] = $breadcrumbs;
    }

    // 3. Page Specific Schema
    if ( is_singular( 'service' ) ) {
        $schemas[] = array(
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'serviceType' => get_the_title(),
            'provider' => array(
                '@type' => 'LocalBusiness',
                'name' => get_bloginfo( 'name' )
            ),
            'description' => get_the_excerpt()
        );
    } elseif ( is_singular( 'portfolio' ) ) {
        $schemas[] = array(
            '@context' => 'https://schema.org',
            '@type' => 'CreativeWork',
            'name' => get_the_title(),
            'description' => get_the_excerpt(),
            'author' => array(
                '@type' => 'Organization',
                'name' => get_bloginfo( 'name' )
            )
        );
    }

    foreach ( $schemas as $schema ) {
        echo '<script type="application/ld+json">' . json_encode( $schema ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'closeclient_schema_json_ld' );

/**
 * Add Custom User Profile Fields
 */
function closeclient_user_contact_methods( $methods ) {
    $methods['linkedin'] = 'LinkedIn URL';
    $methods['twitter']  = 'Twitter URL';
    $methods['facebook'] = 'Facebook URL';
    return $methods;
}
add_filter( 'user_contactmethods', 'closeclient_user_contact_methods' );

/**
 * Open Graph Meta Tags
 */
function closeclient_og_tags() {
    if ( is_singular() ) {
        global $post;
        echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '">' . "\n";
        echo '<meta property="og:type" content="article">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '">' . "\n";
        if ( has_post_thumbnail() ) {
            $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
            echo '<meta property="og:image" content="' . esc_url( $img[0] ) . '">' . "\n";
        }
        $desc = has_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 25 );
        echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";

        // Twitter Cards
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr( get_the_title() ) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
    } else {
        echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( home_url() ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'closeclient_og_tags' );

/**
 * Defer non-critical scripts for better performance.
 */
function closeclient_defer_scripts( $tag, $handle, $src ) {
    $defer = array( 'closeclient-navigation', 'closeclient-customizer' );
    if ( in_array( $handle, $defer ) ) {
        return '<script src="' . $src . '" defer></script>' . "\n";
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'closeclient_defer_scripts', 10, 3 );

/**
 * Clean up wp_head for better performance and SEO.
 */
function closeclient_cleanup_head() {
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'closeclient_cleanup_head' );

/**
 * Register Block Patterns
 */
function closeclient_register_block_patterns() {
    register_block_pattern_category(
        'closeclient',
        array( 'label' => __( 'CloseClient Authority', 'closeclient' ) )
    );

    $patterns = array(
        'hero' => array(
            'title' => 'Elite Hero Section',
            'content' => '<!-- wp:shortcode -->[closeclient_hero]<!-- /wp:shortcode -->'
        ),
        'vsl' => array(
            'title' => 'Big Domino VSL Section',
            'content' => '<!-- wp:shortcode -->[closeclient_vsl]<!-- /wp:shortcode -->'
        ),
        'services' => array(
            'title' => 'Authority Services Grid',
            'content' => '<!-- wp:shortcode -->[closeclient_services]<!-- /wp:shortcode -->'
        ),
        'testimonials' => array(
            'title' => 'Social Proof Section',
            'content' => '<!-- wp:shortcode -->[closeclient_testimonials]<!-- /wp:shortcode -->'
        ),
        'process' => array(
            'title' => 'Authority Roadmap',
            'content' => '<!-- wp:shortcode -->[closeclient_process]<!-- /wp:shortcode -->'
        ),
        'pricing' => array(
            'title' => 'Investment Tiers',
            'content' => '<!-- wp:shortcode -->[closeclient_pricing]<!-- /wp:shortcode -->'
        ),
        'booking' => array(
            'title' => 'Terminal CTA Section',
            'content' => '<!-- wp:shortcode -->[closeclient_booking_cta]<!-- /wp:shortcode -->'
        )
    );

    foreach ( $patterns as $slug => $data ) {
        register_block_pattern(
            'closeclient/' . $slug,
            array(
                'title'      => $data['title'],
                'categories' => array( 'closeclient' ),
                'content'    => $data['content'],
            )
        );
    }
}
add_action( 'init', 'closeclient_register_block_patterns' );

/**
 * Excerpt refinements.
 */
function closeclient_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'closeclient_excerpt_length', 999 );

function closeclient_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'closeclient_excerpt_more' );

/**
 * Adjust Blog Query for Featured Post Offset
 */
function closeclient_adjust_blog_query( $query ) {
    if ( ! is_admin() && $query->is_home() && $query->is_main_query() ) {
        $offset = 1;
        $ppp = get_option( 'posts_per_page' );

        if ( $query->is_paged() ) {
            $paged_offset = $offset + ( ( $query->query_vars['paged'] - 1 ) * $ppp );
            $query->set( 'offset', $paged_offset );
        } else {
            $query->set( 'offset', $offset );
        }
    }
}
add_action( 'pre_get_posts', 'closeclient_adjust_blog_query' );

/**
 * Fix Pagination for Offset Query
 */
function closeclient_adjust_offset_pagination( $found_posts, $query ) {
    $offset = 1;
    if ( ! is_admin() && $query->is_home() && $query->is_main_query() ) {
        return $found_posts - $offset;
    }
    return $found_posts;
}
add_filter( 'found_posts', 'closeclient_adjust_offset_pagination', 10, 2 );

/**
 * SVG Icons.
 */
require get_template_directory() . '/inc/icons.php';
