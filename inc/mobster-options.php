<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "mobster_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Mobster Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Mobster Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'  => __( 'General Settings', 'redux-framework-demo' ),
        'id'     => 'basic',
        'desc'   => __( 'Change General Settings here.', 'redux-framework-demo' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => __( 'Example Text', 'redux-framework-demo' ),
                'desc'     => __( 'Example description.', 'redux-framework-demo' ),
                'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title' => __( 'General Settings', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Change General Settings here.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Homepage Layout', 'redux-framework-demo' ),
        // 'desc'       => __( 'You can find Homepage Layouts Here ', 'redux-framework-demo' ),
        'id'         => 'homepage_layout_manager',
        'subsection' => true,
        'fields' => array(
            array(
                'id'      => 'homepage-layout',
                'type'    => 'sorter', 
                // 'title'    => __( 'Homepage Layout Manager', 'redux-framework-demo' ),
                'desc'     => __( 'Organize how you want the layout to appear on the homepage.', 'redux-framework-demo' ),
                // 'subtitle' => __( 'Homepage Layout subtitle.', 'redux-framework-demo' ),
                'options' => array(
                    'enabled'  => array(
                        'services' => 'Services',
                        'bussiness_promo'     => 'Business Promotion',
                        'features' => 'Features',
                        'pricing'   => 'Pricing',
                        'testimonials'   => 'Testimonials',
                        'faqs'   => 'FAQs',
                        'partners'   => 'Partners',
                    ),
                    'disabled' => array(
                    )
                ),
            )
        )
    ) );

    ## Services Layout
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Services Layout', 'redux-framework-demo' ),
        'desc'       => __( 'You can find Services Layouts Here ', 'redux-framework-demo' ),
        'id'         => 'services_layout_manager',
        'subsection' => true,
        'fields' => array(
            array(
                'id'      => 'services-image',
                'type'    => 'media', 
                'title'    => __( 'Service Image', 'redux-framework-demo' ),
                'desc'     => __( 'Upload service image here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload Service Image.', 'redux-framework-demo' ), 
                'default'    => '//localhost/themeDev/practise_theme/wp-content/uploads/2020/11/concept.png', 
            ),
            array(
                'id'      => 'services-title',
                'type'    => 'text', 
                'title'    => __( 'Service Title', 'redux-framework-demo' ),
                'desc'     => __( 'Add your Service Title here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add your Service Title.', 'redux-framework-demo' ), 
                'default'    => 'Secure Payment', 
            ),
            array(
                'id'      => 'services-content',
                'type'    => 'textarea', 
                'title'    => __( 'Service Content', 'redux-framework-demo' ),
                'desc'     => __( 'Add Service Content here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add Service Content', 'redux-framework-demo' ), 
                'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptates esse, sunt reprehenderit', 
            ),
        )
    ) );

    ## Bussiness Promotion
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Bussiness Promotion', 'redux-framework-demo' ),
        'desc'       => __( 'You can find Bussiness Promotion Here ', 'redux-framework-demo' ),
        'id'         => 'bussiness_promotion_manager',
        'subsection' => true,
        'fields' => array(
            array(
                'id'      => 'bussiness-image',
                'type'    => 'media', 
                'title'    => __( 'Bussiness Image', 'redux-framework-demo' ),
                'desc'     => __( 'Upload Bussiness image here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload Bussiness Image.', 'redux-framework-demo' ), 
                'default'    => '//localhost/themeDev/practise_theme/wp-content/uploads/2020/11/concept.png', 
            ),
            array(
                'id'      => 'bussiness-title',
                'type'    => 'text', 
                'title'    => __( 'Bussiness Title', 'redux-framework-demo' ),
                'desc'     => __( 'Add your Bussiness Title here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add your Bussiness Title.', 'redux-framework-demo' ), 
                'default'    => 'Secure Payment', 
            ),
            array(
                'id'      => 'bussiness-content',
                'type'    => 'textarea', 
                'title'    => __( 'Bussiness Content', 'redux-framework-demo' ),
                'desc'     => __( 'Add Bussiness Content here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add Bussiness Content', 'redux-framework-demo' ), 
                'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptates esse, sunt reprehenderit', 
            ),
            array(
                'id'      => 'bussiness-button-link',
                'type'    => 'text', 
                'title'    => __( 'Bussiness Link', 'redux-framework-demo' ),
                'desc'     => __( 'Add your Bussiness Link here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add your Bussiness Link.', 'redux-framework-demo' ), 
                'default'    => 'https://www.facebook.com/', 
            ),
            array(
                'id'      => 'bussiness-button',
                'type'    => 'text', 
                'title'    => __( 'Service Button', 'redux-framework-demo' ),
                'desc'     => __( 'Add your Bussiness Button here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add your Bussiness Button.', 'redux-framework-demo' ), 
                'default'    => 'See Addons', 
            ),
        )
    ) );

    ## All Features
    Redux::setSection( $opt_name, array(
        'title'      => __( 'All Features', 'redux-framework-demo' ),
        'desc'       => __( 'You can find All Features Here ', 'redux-framework-demo' ),
        'id'         => 'all_features_manager',
        'subsection' => true,
        'fields' => array(
            array(
                'id'      => 'all_features_image',
                'type'    => 'media', 
                'title'    => __( 'All Features Image', 'redux-framework-demo' ),
                'desc'     => __( 'Upload All Features image here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload All Features Image.', 'redux-framework-demo' ), 
                'default'    => '//localhost/themeDev/practise_theme/wp-content/uploads/2020/11/concept.png', 
            ),
            array(
                'id'      => 'all_features_icon_image',
                'type'    => 'media', 
                'title'    => __( 'All Features Icon Image', 'redux-framework-demo' ),
                'desc'     => __( 'Upload All Features Icon  image here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload All Features Icon  Image.', 'redux-framework-demo' ), 
                'default'    => '//localhost/themeDev/practise_theme/wp-content/uploads/2020/11/concept.png', 
            ),
            array(
                'id'      => 'all_features_title',
                'type'    => 'text', 
                'title'    => __( 'All Features Title', 'redux-framework-demo' ),
                'desc'     => __( 'Add your All Features Title here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add your All Features Title.', 'redux-framework-demo' ), 
                'default'    => 'Powerful Features', 
            ),
            array(
                'id'      => 'all_features_content',
                'type'    => 'textarea', 
                'title'    => __( 'All Features Content', 'redux-framework-demo' ),
                'desc'     => __( 'Add All Features Content here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add All Features Content', 'redux-framework-demo' ), 
                'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptates esse, sunt reprehenderit', 
            ),
        )
    ) );
    
    ## Testimonials
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Testimonials', 'redux-framework-demo' ),
        'desc'       => __( 'You can find Testimonials Here ', 'redux-framework-demo' ),
        'id'         => 'Testimonials_manager',
        'subsection' => true,
        'fields' => array(
            array(
                'id'      => 'testimonials_star',
                'type'    => 'option', 
                'title'    => __( 'Testimonials Star', 'redux-framework-demo' ),
                'desc'     => __( 'Add Testimonials Star here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Testimonials Star.', 'redux-framework-demo' ), 
                'default'    => '5', 
            ),
            array(
                'id'      => 'testimonials_client_image',
                'type'    => 'media', 
                'title'    => __( 'Client Image', 'redux-framework-demo' ),
                'desc'     => __( 'Upload Client Image here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload Client Image Image.', 'redux-framework-demo' ), 
                'default'    => '//localhost/themeDev/practise_theme/wp-content/uploads/2020/11/concept.png', 
            ), 
            array(
                'id'      => 'testimonials_client_name',
                'type'    => 'text', 
                'title'    => __( 'Client Name', 'redux-framework-demo' ),
                'desc'     => __( 'Add Client Name here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add Client Name.', 'redux-framework-demo' ), 
                'default'    => 'Mahmudul Hasan', 
            ),
            array(
                'id'      => 'testimonials_client_designation',
                'type'    => 'text', 
                'title'    => __( 'Client Designation', 'redux-framework-demo' ),
                'desc'     => __( 'Add Client Designation here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add Client Designation.', 'redux-framework-demo' ), 
                'default'    => 'Software Developer', 
            ),
            array(
                'id'      => 'testimonials_client_content',
                'type'    => 'textarea', 
                'title'    => __( 'Testimonials Client Content', 'redux-framework-demo' ),
                'desc'     => __( 'Add All Testimonials Client here for your services.', 'redux-framework-demo' ),
                'subtitle' => __( 'Add All Testimonials Client', 'redux-framework-demo' ), 
                'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptates esse, sunt reprehenderit', 
            ),
        )
    ) );
 

    /*
     * <--- END SECTIONS
     */
