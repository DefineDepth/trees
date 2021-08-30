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

        $this->post_type_object()->taxonomy('category');
    }

    public function get_portfolio_projects()
    {
        $posts = get_posts([
            'post_type' => 'portfolio',
            'numberposts' => -1,
        ]) ?: [];

        $projects_array = [];

        foreach ( $posts as $single ) {
            $projects_array[ 'id-' . $single->ID ] = $single->post_title; 
        }

        return $projects_array;
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


        $builder = $builder->addRepeater('info_repeater', [
            'layout' => 'row', 'label' => 'Portfolio Info',
        ]);
        $builder
            ->addText('title', [ 'label' => 'Title' ])
            ->addLink('link', [ 'label' => 'Link', 'instructions' => 'To make just text without link type # in URL field.', ])
        ;
        $builder = $builder->endRepeater();


        $builder
            ->addSelect('prev_project', [
                'label' => 'Previous Project',
                'choices' => $this->get_portfolio_projects(),
                'default_value' => '',
            ])
            ->addSelect('next_project', [
                'label' => 'Next Project',
                'choices' => $this->get_portfolio_projects(),
                'default_value' => '',
            ])
        ;


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