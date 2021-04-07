<?php

namespace App\PostTypes;

// use App\Controllers\App;
use App\PostTypes\AbstractPostType;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Client extends AbstractPostType
{

    // use VirtualPostContent, AboutArtist;

    const POST_TYPE = 'client';
    const POST_TYPE_OPTIONS = [
        'has_archive' => true,
        'supports' => ['title', 'thumbnail'],
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

        // $builder->addText('client_');
        $builder->addTextarea('client_text');
        $builder->addLink('client_button_link');

        $this->add_local_field_group($builder);
        return;
    }
}