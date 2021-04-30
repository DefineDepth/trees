<?php

namespace App\PostTypes;

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


        $builder = $builder->addRepeater('clients_repeater', [
            'layout' => 'row', 'label' => 'Portfolio Info',
        ]);
        $builder
            ->addText('title', [ 'label' => 'Title' ])
            ->addText('text', [ 'label' => 'Text' ])
            ->addLink('link', [ 'label' => 'Link' ])
        ;
        $builder = $builder->endRepeater();

        $builder->addText('prev_project', [ 'label' => 'Prev (This should be select)' ]);
        $builder->addText('next_project', [ 'label' => 'Next (This should be select)' ]);


        $this->add_local_field_group($builder);
        return;
    }
}