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
            ->addTab('Team')
            ->addText('team_title', [ 'label' => 'Title' ])
            ->addWysiwyg('team_text', [ 'label' => 'Text' ]);


        $this->add_local_field_group($builder);
    }
    
}