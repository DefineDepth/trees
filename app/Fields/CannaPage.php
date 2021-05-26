<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class CannaPage extends AbstractFields
{

    const CANNA_TEMPLATE = 'views/template-canna.blade.php';

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

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Work Canna Controls', [
            'style' => 'seamless',
            'hide_on_screen' => array(
                'permalink',
                'the_content',
                'excerpt',
                'discussion',
                'comments',
                'revisions',
                'slug',
                'author',
                'format',
                'page_attributes',
                'categories',
                'tags',
                'send-trackbacks',
            ),
        ]);

        $builder->setLocation('page_template', '==', static::CANNA_TEMPLATE);


        $builder = $builder->addGroup('portfolio_controls', [ 'layout' => 'row', 'label' => 'Controls' ]);
        $builder
            ->addText('title', [ 'label' => 'Page Header Title' ])
        ;

        $builder = $builder->addRepeater('grid_repeater', [
            'layout' => 'row', 'label' => 'Grid Projects',
        ]);
        $builder
            ->addSelect('project', [
                'label' => 'Project',
                'choices' => $this->get_portfolio_projects(),
                'default_value' => '',
            ])
        ;
        $builder = $builder->endRepeater();

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
    }
    
}