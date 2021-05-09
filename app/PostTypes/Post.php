<?php

namespace App\PostTypes;

// use App\Controllers\App;
use App\PostTypes\AbstractPostType;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Post extends AbstractPostType
{

    const POST_TYPE = 'post';
    const POST_TYPE_OPTIONS = [
        'has_archive' => true,
        'supports' => ['title', 'thumbnail', 'gutenberg', 'comments'],
    ];

    const HAS_META_BOXES = true;

    public function define_attributes()
    {
        $this->post_type_object()->columns()->add([
            'thumbnail' => __('Rating'),
        ]);
    }

    public function add_metaboxes()
    {
        $builder = new FieldsBuilder(
            $this->post_type_name(),
            [
                'style' => 'seamless',
            ]
        );

        $builder
            ->setLocation('post_type', '==', $this->post_type_name());


        $builder = $builder->addGroup('post_header_content', [ 'layout' => 'row', 'label' => 'Header Content' ]);
        $builder
            ->addWysiwyg('content', [ 'label' => 'Content', ])
            ->addImage('image', [ 'label' => 'Post Image Preview',])
            ->addText('quote')
            ->addText('quote_author')
            ->addSelect('comments_column', [
                'label' => 'Author & Comments Width',
                'choices' => [
                    '6' => '6 Columns',
                    '7' => '7 Columns',
                ],
                'default_value' => '6',
            ])
            ->addSelect('comments_align', [
                'label' => 'Author & Comments Aligning',
                'choices' => [
                    'start' => 'Left',
                    'center' => 'Center',
                    'end' => 'Right',
                ],
                'default_value' => 'start',
            ])
            ->addSelect('post_lines', [
                'label' => 'Post Header Lines',
                'choices' => [
                    '0' => 'Off',
                    '1' => 'On',
                ],
                'default_value' => '0',
            ])
            ->addSelect('header_style', [
                'label' => 'Header Color Style',
                'choices' => [
                    // 'custom' => 'Custom',
                    '-black' => 'Black',
                    '-blue' => 'Blue',
                    '-teal' => 'Teal',
                    '-beige' => 'Beige',
                    '-orange' => 'Orange',
                    '-red' => 'Red',
                    '-light-yellow' => 'Light Yellow',
                    '-light-azure' => 'Light Azure',
                ],
                'ajax' => 1,
                'default_value' => '-black',
            ])
            ->addSelect('footer_style', [
                'label' => 'Footer Color Style',
                'choices' => [
                    // 'custom' => 'Custom',
                    '-black' => 'Black',
                    '-blue' => 'Blue',
                    '-teal' => 'Teal',
                    '-beige' => 'Beige',
                    '-orange' => 'Orange',
                    '-red' => 'Red',
                    '-light-yellow' => 'Light Yellow',
                    '-light-azure' => 'Light Azure',
                ],
                'ajax' => 1,
                'default_value' => '-black',
            ])
            ;
        $builder = $builder->endGroup();


        // $builder = $builder->addGroup('post_color_styles', [ 'layout' => 'row', 'label' => 'Post Color Styles' ]);
        // $builder
        //     ->addColorPicker('header_background', [
        //         'label' => 'Post Author and Quote Background Color',
        //         'default_value' => '#000000',
        //     ])
        //     ->addColorPicker('header_text', [
        //         'label' => 'Post Author and Quote Text Color',
        //         'default_value' => '#FFFFFF',
        //     ])
        //     ->addColorPicker('socials_background', [
        //         'label' => 'Socials Icon Background Color',
        //         'default_value' => '#FFFFFF',
        //     ])
        //     ->addColorPicker('socials_text', [
        //         'label' => 'Socials Icon Color',
        //         'default_value' => '#000000',
        //     ])

        //     ->addSelect('footer_style', [
        //         'label' => 'Footer Predifined Style',
        //         'conditional_logic' => [],
        //         'choices' => [
        //             'custom' => 'Custom',
        //             '-black' => 'Black',
        //             '-blue' => 'Blue',
        //             '-teal' => 'Teal',
        //             '-beige' => 'Beige',
        //             '-orange' => 'Orange',
        //             '-red' => 'Red',
        //         ],
        //         'ajax' => 1,
        //         'default_value' => '-black',
        //         'return_format' => 'value',
        //     ])
        //     ->addColorPicker('footer_background', [
        //         'label' => 'Footer Background Color',
        //         'default_value' => '#2D6A8B',
        //         'instructions' => 'Works only if Predifined Style equals to custom',
        //     ])
        //     ->addColorPicker('footer_text', [
        //         'label' => 'Footer Text Color',
        //         'default_value' => '#FFFFFF',
        //         'instructions' => 'Works only if Predifined Style equals to custom',
        //     ])
        //     ->addColorPicker('footer_circle', [
        //         'label' => 'Footer Circle Color',
        //         'default_value' => '#3B7595',
        //         'instructions' => 'Works only if Predifined Style equals to custom',
        //     ])
        //     ;
        // $builder = $builder->endGroup();
        
        
        $this->add_local_field_group($builder);
        return;
    }
}