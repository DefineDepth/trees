<?php

namespace App\PostTypes;

// use App\Controllers\App;
use App\PostTypes\AbstractPostType;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Team extends AbstractPostType
{

    const POST_TYPE = 'team';
    const POST_TYPE_OPTIONS = [
        'has_archive' => false,
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


        $builder->addText('team_position', [
            'label' => 'Position',
        ]);

        $this->add_local_field_group($builder);
        return;
    }
}