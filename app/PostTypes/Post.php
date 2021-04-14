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
        'supports' => ['title', 'thumbnail', 'gutenberg'],
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

        $builder->addWysiwyg('post_header_content', [
            'label' => 'WYSIWYG Field',
            'media_upload' => 1,
        ]);

        $builder->addImage('post_image', [
            'label' => 'Image FIeld',
        ]);

        $builder->addText('post_quote');
        $builder->addText('post_quote_author');
        // $builder->addLink('post_button_link');

        $this->add_local_field_group($builder);
        return;
    }
}