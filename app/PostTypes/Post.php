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
            ->addSelect('comments_container', [
                'label' => 'Author & Comments Container',
                'choices' => [
                    '-p-left -p-right' => 'Both',
                    '-p-left' => 'Left',
                    '-p-right' => 'Right',
                ],
                'default_value' => '-p-left -p-right',
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


        $builder
            ->addTab('Footer')
            ->addText('footer_title', [
                'label' => 'Title',
                'default_value' => 'Want to connect on a project?',
            ])
            ->addText('footer_title_rollover', [
                'label' => 'Rollover',
                'default_value' => 'Emails are free, drop us a note.',
            ])
            ->addUrl('footer_url', [
                'label' => 'URL',
                'default_value' => '#',
            ])
        ;
        
        
        $this->add_local_field_group($builder);
        return;
    }
}