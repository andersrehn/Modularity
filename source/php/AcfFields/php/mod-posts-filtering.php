<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_571e045dd555d',
    'title' => __('Data filtering', 'modularity'),
    'fields' => array(
        0 => array(
            'default_value' => 0,
            'message' => __('Yes, filter posts based on taxonomy', 'modularity'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'key' => 'field_571e046536f0f',
            'label' => __('Taxonomy filter', 'modularity'),
            'name' => 'posts_taxonomy_filter',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        1 => array(
            'multiple' => 0,
            'allow_null' => 0,
            'choices' => array(
            ),
            'default_value' => array(
            ),
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'return_format' => 'value',
            'key' => 'field_571e048136f10',
            'label' => __('Taxonomy type', 'modularity'),
            'name' => 'posts_taxonomy_type',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571e046536f0f',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => 50,
                'class' => '',
                'id' => 'modularity-latest-taxonomy',
            ),
            'disabled' => 0,
            'readonly' => 0,
        ),
        2 => array(
            'multiple' => 0,
            'allow_null' => 0,
            'choices' => array(
            ),
            'default_value' => array(
            ),
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'return_format' => 'value',
            'key' => 'field_571e049636f11',
            'label' => __('Taxonomy value', 'modularity'),
            'name' => 'posts_taxonomy_value',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571e046536f0f',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => 50,
                'class' => '',
                'id' => 'modularity-latest-taxonomy-value',
            ),
            'disabled' => 0,
            'readonly' => 0,
        ),
        3 => array(
            'default_value' => 0,
            'message' => __('Yes, filter posts based on meta', 'modularity'),
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'key' => 'field_571e04a736f12',
            'label' => __('Meta filter', 'modularity'),
            'name' => 'posts_meta_filter',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        4 => array(
            'multiple' => 0,
            'allow_null' => 0,
            'choices' => array(
            ),
            'default_value' => array(
            ),
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'return_format' => 'value',
            'key' => 'field_571e04c736f13',
            'label' => __('Meta key', 'modularity'),
            'name' => 'posts_meta_key',
            'type' => 'select',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571e04a736f12',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => 50,
                'class' => '',
                'id' => 'modularity-latest-meta-key',
            ),
            'disabled' => 0,
            'readonly' => 0,
        ),
        5 => array(
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'key' => 'field_571e04da36f14',
            'label' => __('Meta value', 'modularity'),
            'name' => 'posts_meta_value',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => array(
                0 => array(
                    0 => array(
                        'field' => 'field_571e04a736f12',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => 50,
                'class' => '',
                'id' => '',
            ),
            'readonly' => 0,
            'disabled' => 0,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-posts',
            ),
        ),
    ),
    'menu_order' => 15,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
    'modified' => 1461586536,
    'local' => 'php',
));
}