<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class Careers extends AbstractFields
{

    const CAREERS_TEMPLATE = 'views/template-careers.blade.php';

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Careers Controls', [
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

        $builder->setLocation('page_template', '==', static::CAREERS_TEMPLATE);


        $builder->addTab('careers', [ 'label' => 'Careers', ]);

        $builder = $builder->addGroup('header', [ 'layout' => 'row', 'label' => 'Header Block' ]);
        $builder
            ->addText('subtitle', [ 'label' => 'Subtitle' ])
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Content' ])
            ->addText('openings_title', [ 'label' => 'Openings Title' ])
        ;

        $builder = $builder->addRepeater('openings_repeater', [ 'layout' => 'row', 'label' => 'Openings', ]);
        $builder->addText('text', [ 'label' => 'Item' ]);
        $builder = $builder->endRepeater();
        $builder = $builder->endGroup();


        $builder = $builder->addGroup('careers_cards', [ 'layout' => 'row', 'label' => 'Careers' ]);
        $builder
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Content' ])
            ->addLink('link', [ 'label' => 'Link' ])
        ;

            $builder = $builder->addRepeater('careers_repeater', [ 'layout' => 'row', 'label' => 'Available careers', ]);
            $builder
                ->addText('title', [ 'label' => 'Title' ])
                ->addWysiwyg('text', [ 'label' => 'Text' ])
                ->addLink('link', [ 'label' => 'Link' ])
            ;
            $builder = $builder->endRepeater();

        $builder = $builder->endGroup();


        $builder->addTab('testimonials_tab', [ 'label' => 'Testimonials', ]);
        $builder = $builder->addGroup('testimonials', [ 'layout' => 'row', 'label' => 'Testimonials' ]);
        $builder
            ->addText('author', [ 'label' => 'Author', ])
            ->addTextarea('content', [ 'label' => 'Comment', ])
            ->addLink('link', [ 'label' => 'Link', ])
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
    }
    
}