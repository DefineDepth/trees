<?php

namespace App\PostTypes;

// use App\Controllers\App;
use App\PostTypes\AbstractPostType;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Portfolio extends AbstractPostType
{

    const POST_TYPE = 'portfolio';
    const POST_TYPE_OPTIONS = [
        'has_archive' => true,
        'supports' => ['title', 'thumbnail', 'editor'],
        'show_in_rest' => true,
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

        $builder->addText('post_quote');
        $builder->addText('post_quote_author');
        // $builder->addLink('post_button_link');

        $this->add_local_field_group($builder);
        return;
    }
}