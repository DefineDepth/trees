<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class FrontPage extends AbstractFields
{

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Front', [
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

        $builder->setLocation('page_type', '==', 'front_page');

        $builder
            ->addTab('Hero', [ 'label' => 'Hero', ])
            ->addText('hero_subtitle', [ 'label' => 'Subtitle', ])
            ->addText('hero_title', [ 'label' => 'Title', ])
        ;


        $builder = $builder->addRepeater('hero_repeater', [
            'layout' => 'row',
        ]);

        $builder->addText('text');

        $builder = $builder->endRepeater();
        

        $builder
            ->addTab('About', [ 'label' => 'About', ])
            ->addImage('about_image', [ 'label' => 'Image', ])
            ->addText('about_subtitle', [ 'label' => 'Subtitle', ])
            ->addText('about_title', [ 'label' => 'Title', ])
            ->addTextarea('about_text', [ 'label' => 'Text', ])
        ;

        $builder
            ->addTab('testimonials', [ 'label' => 'Testimonials', ])
            ->addText('testimonials_author', [ 'label' => 'Author', ])
            ->addTextarea('testimonials_content', [ 'label' => 'Comment', ])
            ->addLink('testimonials_link', [ 'label' => 'Link', ])
        ;

        $this->add_local_field_group($builder);
    }
    
}