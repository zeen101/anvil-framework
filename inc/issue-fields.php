<?php
add_action('cmb2_admin_init', 'anvil_register_issue_metabox');

function anvil_register_issue_metabox()
{

    $prefix = '_anvil_issue_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id'            => $prefix . 'details',
        'title'         =>  __('Issue Details', 'cmb2'),
        'object_types'  =>  array('term'), // Post type
        'taxonomies'    =>  array('issuem_issue'), // Tells CMB2 which taxonomies should have these fields
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    =>  true, // Show field names on the left
    ));

    // Issue Hero Image
    $cmb->add_field(array(
        'name'       =>  __('Issue Hero Image', 'cmb2'),
        'desc'       =>  __('Recommended Size: 2000x800', 'cmb2'),
        'id'         => $prefix . 'hero_image',
        'type'       => 'file',
        'options'    =>  array('url' => false),
        'text'       =>  array('add_upload_file_text' => 'Add Image'),
        'show_on_cb' => 'cmb2_hide_if_no_cats' // function should return a bool value
    ));

    $cmb->add_field(array(
        'name'       =>  __('Issue Hero Headline', 'cmb2'),
        'desc'       =>  __('Enter headline text', 'cmb2'),
        'id'         => $prefix . 'hero_headline',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats' // function should return a bool value
    ));

    $cmb->add_field(array(
        'name'       =>  __('Issue Hero Subtitle', 'cmb2'),
        'desc'       =>  __('Enter subtitle text', 'cmb2'),
        'id'         => $prefix . 'hero_subtitle',
        'type'       => 'textarea_code',
        'show_on_cb' => 'cmb2_hide_if_no_cats' // function should return a bool value
    ));

    $cmb->add_field(array(
        'name'       =>  __('Buy Print Issue Link', 'cmb2'),
        'desc'       =>  __('Enter full URL', 'cmb2'),
        'id'         => $prefix . 'buy_print_link',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats' // function should return a bool value
    ));
}
