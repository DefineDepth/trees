<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class Services extends AbstractFields
{

    const SERVICES_TEMPLATE = 'views/template-services.blade.php';

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Services Controls', [
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

        $builder->setLocation('page_template', '==', static::SERVICES_TEMPLATE);


        $builder->addTab('Header');
        $builder = $builder->addGroup('header_first_block', [ 'layout' => 'row', 'label' => 'First Block' ]);
        $builder
            ->addText('subtitle', [ 'label' => 'Subtitle' ])
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Text' ]);
        $builder = $builder->endGroup();
        

        $builder = $builder->addGroup('header_second_block', [ 'layout' => 'row', 'label' => 'Second Block' ]);
        $builder
            ->addImage('image', [ 'label' => 'Image' ])
            ->addText('subtitle', [ 'label' => 'Subtitle' ])
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Text' ]);
        $builder = $builder->endGroup();


        $builder
            ->addTab('Services')
            ->addText('services_subtitle', [ 'label' => 'Subtitle' ])
            ->addText('services_title', [ 'label' => 'Title' ]);

        $builder = $builder->addRepeater('services_repeater', [
            // 'layout' => 'block',
            'layout' => 'row',
        ]);

        $builder->addText('title', [ 'label' => 'Title' ]);
        $builder->addWysiwyg('text', [ 'label' => 'Text' ]);

        $builder = $builder->endRepeater();


        $builder
            ->addTab('Clients')
            ->addText('clients_title', [ 'label' => 'Title' ])
            ->addWysiwyg('clients_text', [ 'label' => 'Text' ]);

        $builder = $builder->addRepeater('clients_repeater', [
            // 'layout' => 'block',
            'layout' => 'row',
        ]);

        $builder->addImage('image', [ 'label' => 'Image', ]);

        $builder = $builder->endRepeater();


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