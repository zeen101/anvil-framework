<?php
add_action('cmb2_admin_init', 'anvil_register_theme_options_metabox');
/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function anvil_register_theme_options_metabox()
{
    /**
     * Registers options page menu item and form.
     */
    $cmb_options = new_cmb2_box(array(
        'id'           => 'anvil_option_metabox',
        'title'        =>  esc_html__('Theme Options', 'anvil'),
        'object_types' =>  array('options-page'),

        /*
		 * The following parameters are specific to the options-page box
		 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
		 */
        'option_key'      => 'anvil_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      =>  esc_html__( 'Options', 'anvil' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        // 'position'        =>  1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      =>  false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     =>  esc_html__( 'Save Theme Options', 'anvil' ), // The text for the options-page save button. Defaults to 'Save'.
    ));

    // Options field ids only need to be unique within this box. Prefix is not needed.

    /**
     * Header Ad
     */
    $cmb_options->add_field(array(
        'name'    =>  __('Header Ad', 'anvil'),
        'id'      => 'header_ad_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Ad Code', 'anvil'),
        'id'      => 'header_ad',
        'type'    => 'textarea_code'
    ));

    /**
     * Call-Out
     */
    $cmb_options->add_field(array(
        'name'    =>  __('Home Page Call-Out', 'anvil'),
        'id'      => 'call_out_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Background', 'anvil'),
        'id'      => 'call_out_bg',
        'type'    => 'file',
        'options' =>  array('url' => false)
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Title', 'anvil'),
        'id'      => 'call_out_title',
        'type'    => 'text'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Message', 'anvil'),
        'id'      => 'call_out_message',
        'type'    => 'textarea'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Button Text', 'anvil'),
        'id'      => 'call_out_btn_text',
        'type'    => 'text_medium'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Button Link', 'anvil'),
        'id'      => 'call_out_btn_link',
        'type'    => 'text_url'
    ));

    /**
     * Launchpads
     */
    $cmb_options->add_field(array(
        'name'    =>  __('Home Page Launchpads', 'anvil'),
        'id'      => 'lp_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Title', 'anvil'),
        'id'      => 'lp_title',
        'type'    => 'text'
    ));
    // Launchpad 1
    $cmb_options->add_field(array(
        'name'    =>  __('Launchpad 1', 'anvil'),
        'id'      => 'lp1_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Image', 'anvil'),
        'id'      => 'lp1_img',
        'type'    => 'file',
        'options' =>  array('url' => false)
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Text', 'anvil'),
        'id'      => 'lp1_text',
        'type'    => 'text'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Link', 'anvil'),
        'id'      => 'lp1_link',
        'type'    => 'text_url'
    ));
    // Launchpad 2
    $cmb_options->add_field(array(
        'name'    =>  __('Launchpad 2', 'anvil'),
        'id'      => 'lp2_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Image', 'anvil'),
        'id'      => 'lp2_img',
        'type'    => 'file',
        'options' =>  array('url' => false)
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Text', 'anvil'),
        'id'      => 'lp2_text',
        'type'    => 'text'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Link', 'anvil'),
        'id'      => 'lp2_link',
        'type'    => 'text_url'
    ));
    // Launchpad 3
    $cmb_options->add_field(array(
        'name'    =>  __('Launchpad 3', 'anvil'),
        'id'      => 'lp3_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Image', 'anvil'),
        'id'      => 'lp3_img',
        'type'    => 'file',
        'options' =>  array('url' => false)
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Text', 'anvil'),
        'id'      => 'lp3_text',
        'type'    => 'text'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Link', 'anvil'),
        'id'      => 'lp3_link',
        'type'    => 'text_url'
    ));

    /**
     * Footer Ad
     */
    $cmb_options->add_field(array(
        'name'    =>  __('Footer Ad', 'anvil'),
        'id'      => 'footer_ad_settings',
        'type'    => 'title'
    ));
    $cmb_options->add_field(array(
        'name'    =>  __('Ad Code', 'anvil'),
        'id'      => 'footer_ad',
        'type'    => 'textarea_code'
    ));
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function anvil_get_option($key = '', $default = false)
{
    if (function_exists('cmb2_get_option')) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option('anvil_options', $key, $default);
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option('anvil_options', $default);

    $val = $default;

    if ('all' == $key) {
        $val = $opts;
    } elseif (is_array($opts) && array_key_exists($key, $opts) && false !== $opts[$key]) {
        $val = $opts[$key];
    }

    return $val;
}
