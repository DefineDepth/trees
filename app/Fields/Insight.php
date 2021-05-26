<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class Insight extends AbstractFields
{

    const INSIGHT_TEMPLATE = 'views/template-insight.blade.php';

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Insight Controls', [
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

        $builder->setLocation('page_template', '==', static::INSIGHT_TEMPLATE);


        $builder = $builder->addGroup('header', [ 'layout' => 'row', 'label' => 'Header Block' ]);
        $builder
            ->addText('subtitle', [ 'label' => 'Subtitle' ])
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Content' ])
            ->addText('quote', [ 'label' => 'Quote' ])
            ->addText('quote_author', [ 'label' => 'Quote Author' ])
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