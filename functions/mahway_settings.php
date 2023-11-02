<?php
function mah_way_setinge($wp_customize)
{
    $wp_customize->add_panel(
        'mahway_panel',
        array(
            'title' => __('setting'),
            'description' => esc_html__('mold setting mah way'),
            'priority' => 50,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'active_callback' => '',
            'description_hidden' => true,
        )
    );
    $wp_customize->add_section(
        'menu_title',
        array(
            'title' => __('title menu'),
            'description' => esc_html__('In this section you can put text in the menu.'),
            'panel' => 'mahway_panel',
            'priority' => 1,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'active_callback' => '',
            'description_hidden' => true,
        )
    );
    $wp_customize->add_setting(
        'title_menu',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );
    $wp_customize->add_control(
        'title_menu',
        array(
            'label' => __('Edit menu title'),
            'description' => esc_html__('In this section, you can write a sentence, word or any other text.'),
            'section' => 'menu_title',
            'priority' => 1,
            'type' => 'text',
            'transport' => 'refresh',
            'input_attrs' => array(
                'placeholder' => __('Enter the text'),
            ),
        )
    );
    $wp_customize->add_section(
        "packges_section",
        [
            "title" => "packges",
            'description' => esc_html__('In this section, you can show the user about the services or packages or any other item.'),
            "panel" => 'mahway_panel',
            "priority" => 2,
            'description_hidden' => true,
        ]
    );
    $wp_customize->add_setting(
        "packges_title",
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );
    $wp_customize->add_control(
        "packges_title",
        array(
            'label' => __('The title of this section'),
            'section' => 'packges_section',
            'priority' => 1,
            'type' => 'text',

        )
    );
    for ($i = 0; $i < 4; $i++) {
        $wp_customize->add_setting(
            "packges[{$i}][image]",
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "packges[{$i}][image]",
            array(
                'label' => __('the image'),
                'section' => 'packges_section',
                'priority' => 1,
                'button_labels' => array(
                    'select' => __('Image selection'),
                    'change' => __('Change the image'),
                    'remove' => __('Delete'),
                    'default' => __('Assumption'),
                    'placeholder' => __('Image not selected'),
                    'frame_title' => __('Image selection'),
                    'frame_button' => __('Image selection'),
                )
            )
        ));
        $wp_customize->add_setting(
            "packges[{$i}][title]",
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
        $wp_customize->add_control(
            "packges[{$i}][title]",
            array(
                'label' => __('Title'),
                'section' => 'packges_section',
                'priority' => 1,
                'type' => 'text',
            )
        );
        $wp_customize->add_setting(
            "packges[{$i}][desc]",
            array(
                'default' => '',
                'transport' => 'refresh',
                'sanitize_callback' => ''
            )
        );
        $wp_customize->add_control(
            "packges[{$i}][desc]",
            array(
                'label' => __('Description'),
                'section' => 'packges_section',
                'priority' => 1,
                'type' => 'textarea',
            )
        );
    }
    $wp_customize->add_section(
        "text_footer",
        [
            "title" => "text footer",
            'description' => esc_html__('In this section, you can write any text you want in the footer.'),
            "panel" => 'mahway_panel',
            "priority" => 3,
            'description_hidden' => true,
        ]
    );
    $wp_customize->add_setting(
        "text_foot",
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );
    $wp_customize->add_control(
        "text_foot",
        array(
            'label' => __('Enter the description'),
            'section' => 'text_footer',
            'priority' => 1,
            'type' => 'textarea',
        ),
    );


    $wp_customize->add_section(
        'services_title',
        array(
            'title' => __('services title'),
            'description' => esc_html__('In this section you can enter the title of the service section.'),
            'panel' => 'mahway_panel',
            'priority' => 1,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'active_callback' => '',
            'description_hidden' => true,
        )
    );
    $wp_customize->add_setting(
        'title_services',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => ''
        )
    );
    $wp_customize->add_control(
        'title_services',
        array(
            'label' => __('Edit menu title'),
            'description' => esc_html__('In this section, you can write a sentence, word or any other text.'),
            'section' => 'services_title',
            'priority' => 1,
            'type' => 'text',
            'transport' => 'refresh',
            'input_attrs' => array(
                'placeholder' => __('Enter the text'),
            ),
        )
    );


}
add_action("customize_register", "mah_way_setinge");
