<?php
/**
 * Authority Audit Modal
 *
 * @package CloseClient
 */
?>

<div id="audit-modal" class="cc-modal">
    <div class="cc-modal-overlay"></div>
    <div class="cc-modal-content glass border-accent shadow-premium">
        <button class="cc-modal-close">×</button>

        <div class="modal-grid">
            <!-- Left Column: Value Prop -->
            <div class="modal-value-prop pe-md-5 border-end border-secondary">
                <div class="modal-status-badge mb-4">
                    <span class="badge bg-accent text-dark rounded-pill py-2 px-4 fw-black letter-spacing-lg" style="font-size: 0.6rem;">SECURE INQUIRY PROTOCOL</span>
                </div>
                <span class="section-tag mb-3"><?php echo esc_html( get_theme_mod( 'closeclient_audit_modal_tag', 'STRATEGY FIRST' ) ); ?></span>
                <h2 class="h2 mb-4 gradient-text"><?php echo esc_html( get_theme_mod( 'closeclient_audit_modal_title', 'Request Your Authority Audit' ) ); ?></h2>
                <p class="text-muted lead small mb-5"><?php echo esc_html( get_theme_mod( 'closeclient_audit_modal_desc', 'Submit your details and we’ll tailor a comprehensive digital audit and growth proposal based on your exact objectives.' ) ); ?></p>

                <div class="modal-benefits mt-5 p-4 bg-dark rounded-lg border border-secondary">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <span class="text-accent"><?php echo closeclient_get_svg('check'); ?></span>
                            <span class="small text-white-50 fw-bold">Full-Stack Technical Audit</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center gap-3">
                            <span class="text-accent"><?php echo closeclient_get_svg('check'); ?></span>
                            <span class="small text-white-50 fw-bold">Authority Positioning Diagnostic</span>
                        </li>
                        <li class="mb-0 d-flex align-items-center gap-3">
                            <span class="text-accent"><?php echo closeclient_get_svg('check'); ?></span>
                            <span class="small text-white-50 fw-bold">High-Fidelity Scale Roadmap</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Column: Form -->
            <div class="modal-form-wrapper ps-md-5">
                <div class="form-header mb-5">
                    <h3 class="h4 mb-2 text-white fw-black tracking-tighter">Direct Intake Protocol</h3>
                    <p class="small text-muted mb-0">Estimated Diagnostic Time: 48 Hours</p>
                </div>

                <?php
                $custom_action = get_theme_mod( 'closeclient_contact_form_action' );
                if ( $custom_action ) : ?>
                    <form action="<?php echo esc_url( $custom_action ); ?>" method="POST" class="custom-contact-form">
                        <div class="mb-4">
                            <input type="text" name="name" placeholder="<?php echo esc_attr( get_theme_mod( 'closeclient_audit_modal_name_placeholder', 'Full Name' ) ); ?>" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" name="email" placeholder="<?php echo esc_attr( get_theme_mod( 'closeclient_audit_modal_email_placeholder', 'Business Email' ) ); ?>" required>
                        </div>
                        <div class="mb-5">
                            <label class="small text-white-50 fw-bold uppercase mb-2" style="font-size: 0.6rem; letter-spacing: 0.1em;">CURRENT ANNUAL REVENUE</label>
                            <select name="revenue" class="bg-dark border-secondary">
                                <option value="under-100k">Under $100k</option>
                                <option value="100k-500k">$100k - $500k</option>
                                <option value="500k-1m">$500k - $1M</option>
                                <option value="1m-plus">$1M+ (Authority Tier)</option>
                            </select>
                        </div>
                        <button type="submit" class="cc-button w-100 py-4"><?php echo esc_html( get_theme_mod( 'closeclient_audit_modal_btn', 'Request Your Audit →' ) ); ?></button>
                    </form>
                <?php else :
                    $form_code = get_theme_mod( 'closeclient_contact_form_shortcode' );
                    if ( $form_code && $form_code !== '[contact-form-7 id="..."]' ) {
                        echo do_shortcode( $form_code );
                    } else {
                        echo '<p class="text-center small text-muted">' . esc_html( get_theme_mod( 'closeclient_form_not_configured_text', 'Contact form not configured in Customizer.' ) ) . '</p>';
                    }
                endif; ?>
            </div>
        </div>
    </div>
</div>
