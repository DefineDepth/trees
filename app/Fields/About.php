<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class About extends AbstractFields
{

    const ABOUT_TEMPLATE = 'views/template-about.blade.php';

    public function add_fields()
    {
        $builder = $this->new_fields_builder('About Controls', [
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

        $builder->setLocation('page_template', '==', static::ABOUT_TEMPLATE);


        $builder->addTab('Header');

        $builder = $builder->addGroup('header_first_block', [ 'layout' => 'row', 'label' => 'First Block' ]);

        $builder
            ->addText('header_first_subtitle', [ 'label' => 'Subtitle' ])
            ->addText('header_first_title', [ 'label' => 'Title' ])
            ->addWysiwyg('header_first_text', [ 'label' => 'Text' ]);

        $builder = $builder->endGroup();
        

        $builder = $builder->addGroup('header_second_block', [ 'layout' => 'row', 'label' => 'Second Block' ]);

        $builder
            ->addImage('header_second_image', [ 'label' => 'Image' ])
            ->addText('header_second_subtitle', [ 'label' => 'Subtitle' ])
            ->addText('header_second_title', [ 'label' => 'Title' ])
            ->addWysiwyg('header_second_text', [ 'label' => 'Text' ]);

        $builder = $builder->endGroup();


        $builder
            ->addTab('Team')
            ->addText('team_title', [ 'label' => 'Title' ])
            ->addWysiwyg('team_text', [ 'label' => 'Text' ]);



        $builder
            ->addTab('Values')
            ->addText('values_title', [ 'label' => 'Title' ])
            ->addWysiwyg('values_text', [ 'label' => 'Text' ]);



        $builder = $builder->addGroup('value_first', [ 'layout' => 'row', 'label' => 'First Block' ]);
        $builder
            ->addImage('value_image', [ 'label' => 'Image' ])
            ->addText('value_subtitle', [ 'label' => 'Subitle' ])
            ->addText('value_title', [ 'label' => 'Title' ])
            ->addWysiwyg('value_text', [ 'label' => 'Text' ]);
        $builder = $builder->endGroup();

        $builder = $builder->addGroup('value_second', [ 'layout' => 'row', 'label' => 'Second Block' ]);
        $builder
            ->addImage('value_image', [ 'label' => 'Image' ])
            ->addText('value_subtitle', [ 'label' => 'Subitle' ])
            ->addText('value_title', [ 'label' => 'Title' ])
            ->addWysiwyg('value_text', [ 'label' => 'Text' ]);
        $builder = $builder->endGroup();

        $builder = $builder->addGroup('value_third', [ 'layout' => 'row', 'label' => 'Third Block' ]);
        $builder
            ->addImage('value_image', [ 'label' => 'Image' ])
            ->addText('value_subtitle', [ 'label' => 'Subitle' ])
            ->addText('value_title', [ 'label' => 'Title' ])
            ->addWysiwyg('value_text', [ 'label' => 'Text' ]);
        $builder = $builder->endGroup();

            

        $builder
            ->addTab('CTA')
            ->addText('cta_title')
            ->addLink('cta_button_link');


        $this->add_local_field_group($builder);
    }
    
}