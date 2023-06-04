<?php
function ggnews_get_default_options() {
    $options = array(
        'logo'      => '',
        'favicon'   => ''
    );
    return $options;
}
function ggnews_options_init() {
    $ggnews_options = get_option( 'theme_ggnews_options' );
    // Are our options saved in the DB?
    if ( false === $ggnews_options ) {
        // If not, we'll save our default options
        $ggnews_options = ggnews_get_default_options();
        add_option( 'theme_ggnews_options', $ggnews_options );
    }
    // In other case we don't need to update the DB
}
// Initialize Theme options
add_action( 'after_setup_theme', 'ggnews_options_init' );

// Add "WPTuts Options" link to the "Appearance" menu
function ggnews_menu_options() {
    // add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function);
    add_theme_page('GGNews Options', 'GGNews Options', 'edit_theme_options', 'ggnews-settings', 'ggnews_admin_options_page');
}
// Load the Admin Options page
add_action('admin_menu', 'ownery_menu_options');

function ownery_admin_options_page() {
    ?>
    <div class="wrap">
        <div id="icon-themes" class="icon32"><br /></div>
        <h2><?php _e( 'Ownery Options', 'ownery' ); ?></h2>
        <!-- If we have any error by submiting the form, they will appear here -->
        <?php settings_errors( 'ownery-settings-errors' ); ?>
        <form id="form-wptuts-options" action="options.php" method="post" enctype="multipart/form-data">
            <?php
            settings_fields('theme_ownery_options');
            do_settings_sections('ownery');
            ?>
            <p class="submit">
                <input name="theme_ownery_options[submit]" id="submit_options_form" type="submit" class="button-primary" value="<?php esc_attr_e('Lưu cấu hình', 'ownery'); ?>" />
                <input name="theme_ownery_options[reset]" type="submit" class="button-secondary" value="<?php esc_attr_e('Cài lại', 'ownery'); ?>" />
            </p>
        </form>
    </div>
    <?php
}

function ownery_options_settings_init() {

    //Logo
    register_setting( 'theme_ownery_options', 'theme_ownery_options', 'ownery_options_validate' );
    // Add a form section for the Logo
    add_settings_section('ownery_settings_header', __( 'Logo Options', 'ownery' ), 'ownery_settings_header_text', 'ownery');
    // Add Logo uploader
    add_settings_field('ownery_setting_logo',  __( 'Logo', 'ownery' ), 'ownery_setting_logo', 'ownery', 'ownery_settings_header');
    add_settings_field('ownery_setting_logo_preview',  __( 'Logo Preview', 'ownery' ), 'ownery_setting_logo_preview_func', 'ownery', 'ownery_settings_header');


    //Favicon
    // Add a form section for the Logo
    add_settings_section('ownery_favicon_settings_header', __( 'Favicon Options', 'ownery' ), 'ownery_favicon_settings_header_text', 'ownery');
    // Add Logo uploader
    add_settings_field('ownery_favicon_setting_logo',  __( 'Favicon', 'ownery' ), 'ownery_favicon_setting_logo', 'ownery', 'ownery_favicon_settings_header');
    add_settings_field('ownery_favicon_setting_logo_preview',  __( 'Favicon Preview', 'ownery' ), 'ownery_favicon_setting_preview_func', 'ownery', 'ownery_favicon_settings_header');

}
add_action( 'admin_init', 'ownery_options_settings_init' );

function ownery_settings_header_text() {
    ?>
    <p><?php _e( 'Manage Logo Options for Ownery Theme.', 'ownery' ); ?></p>
    <?php
}

function ownery_favicon_settings_header_text() {
    ?>
    <p><?php _e( 'Manage Favicon Options for Ownery Theme.', 'ownery' ); ?></p>
    <?php
}

function ownery_setting_logo() {
    $ownery_options = get_option( 'theme_ownery_options' );
    ?>
    <input type="text" id="logo_url" name="theme_ownery_options[logo]" value="<?php echo esc_url( $ownery_options['logo'] ); ?>" />
    <input id="upload_logo_button" type="button" class="button" value="<?php _e( 'Upload Logo', 'ownery' ); ?>" />
    <?php if ( '' != $ownery_options['logo'] ): ?>
        <input id="delete_logo_button" name="theme_ownery_options[delete_logo]" type="submit" class="button" value="<?php _e( 'Delete Logo', 'ownery' ); ?>" />
    <?php endif; ?>
    <span class="description"><?php _e('Upload an image for the banner.', 'ownery' ); ?></span>
    <?php
}

function ownery_favicon_setting_logo() {
    $ownery_options = get_option( 'theme_ownery_options' );
    ?>
    <input type="text" id="favicon_url" name="theme_ownery_options[favicon]" value="<?php echo esc_url( $ownery_options['favicon'] ); ?>" />
    <input id="upload_favicon_button" type="button" class="button" value="<?php _e( 'Upload Favicon', 'ownery' ); ?>" />
    <?php if ( '' != $ownery_options['favicon'] ): ?>
        <input id="delete_favicon_button" name="theme_ownery_options[delete_favicon]" type="submit" class="button" value="<?php _e( 'Delete Favicon', 'ownery' ); ?>" />
    <?php endif; ?>
    <span class="description"><?php _e('Upload an image for the banner.', 'ownery' ); ?></span>
    <?php
}

function ownery_options_validate( $input ) {
    $default_options = ownery_get_default_options();
    $valid_input = $default_options;

    $ownery_options = get_option('theme_ownery_options');

    $submit = ! empty($input['submit']) ? true : false;
    $reset = ! empty($input['reset']) ? true : false;
    $delete_logo = ! empty($input['delete_logo']) ? true : false;

    if ( $submit ) {
        if ( $ownery_options['logo'] != $input['logo'] && $ownery_options['logo'] != '' )
            delete_image( $ownery_options['logo'] );
        if ( $ownery_options['favicon'] != $input['favicon'] && $ownery_options['favicon'] != '' )
            delete_image( $ownery_options['favicon'] );

        $valid_input['logo'] = $input['logo'];
        $valid_input['favicon'] = $input['favicon'];
    }
    elseif ( $reset ) {
        delete_image( $ownery_options['logo'] );
        delete_image( $ownery_options['favicon'] );
        $valid_input['logo'] = $default_options['logo'];
        $valid_input['favicon'] = $default_options['favicon'];
    }
    elseif ( $delete_logo ) {
        delete_image( $ownery_options['logo'] );
        $valid_input['logo'] = '';
        delete_image( $ownery_options['favicon'] );
        $valid_input['favicon'] = '';
    }

    return $valid_input;
}

function ownery_options_enqueue_scripts() {
    wp_register_script( 'ownery-upload', get_template_directory_uri() .'/wptuts-options/js/ownery-upload.js', array('jquery','media-upload','thickbox') );
    if ( 'appearance_page_ownery-settings' == get_current_screen() -> id ) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('ownery-upload');
    }
}
add_action('admin_enqueue_scripts', 'ownery_options_enqueue_scripts');

function wptuts_options_setup() {
    global $pagenow;

    if ( 'media-upload.php' == $pagenow || 'async-upload.php' == $pagenow ) {
        // Now we'll replace the 'Insert into Post Button' inside Thickbox
        add_filter( 'gettext', 'replace_thickbox_text'  , 1, 3 );
    }
}
add_action( 'admin_init', 'wptuts_options_setup' );

function replace_thickbox_text($translated_text, $text, $domain) {
    if ("Insert into Post" == $text) {
        $referer = strpos( wp_get_referer(), 'ownery-settings' );
        if ( $referer != '' ) {
            return __('I want this to be my logo!', 'ownery' );
        }
    }
    return $translated_text;
}

function ownery_setting_logo_preview_func() {
    $ownery_options = get_option( 'theme_ownery_options' );  ?>
    <div id="upload_logo_preview" style="min-height: 100px;">
        <img style="max-width:100%;" src="<?php echo esc_url( $ownery_options['logo'] ); ?>" />
    </div>
    <?php
}

function ownery_favicon_setting_preview_func() {
    $ownery_options = get_option( 'theme_ownery_options' ); ?>
    <div id="upload_favicon_preview" style="min-height: 100px;">
        <img style="max-width:100%;" src="<?php echo esc_url( $ownery_options['favicon'] ); ?>" />
    </div>
    <?php
}

function delete_image( $image_url ) {
    global $wpdb;

    // We need to get the image's meta ID.
    $query = "SELECT ID FROM wp_posts where guid = '" . esc_url($image_url) . "' AND post_type = 'attachment'";
    $results = $wpdb->get_results($query);

    // And delete it
    foreach ( $results as $row ) {
        wp_delete_attachment( $row->ID );
    }
}

function delete_favicon( $image_url ) {
    global $wpdb;

    // We need to get the image's meta ID.
    $query = "SELECT ID FROM wp_posts where guid = '" . esc_url($image_url) . "' AND post_type = 'attachment'";
    $results = $wpdb->get_results($query);

    // And delete it
    foreach ( $results as $row ) {
        wp_delete_attachment( $row->ID );
    }
}
