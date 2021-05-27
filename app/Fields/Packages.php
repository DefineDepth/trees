<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class Packages extends AbstractFields
{

    const PACKAGES_TEMPLATE = 'views/template-packages.blade.php';

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Packages Controls', [
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

        $builder->setLocation('page_template', '==', static::PACKAGES_TEMPLATE);


        $builder->addTab('Header');
        $builder = $builder->addGroup('header', [ 'layout' => 'row', 'label' => 'Header' ]);
        $builder
            ->addText('subtitle', [ 'label' => 'Subtitle' ])
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Content' ])
            ->addImage('image', [ 'label' => 'Image' ])
        ;
        $builder = $builder->endGroup();


        $builder->addTab('Clients');
        $builder = $builder->addGroup('clients', [ 'layout' => 'row', 'label' => 'Clients' ]);

            $builder = $builder->addRepeater('clients_repeater', [ 'layout' => 'row', 'label' => 'Clients', ]);
            $builder
                ->addImage('image', [ 'label' => 'Image' ])
            ;
            $builder = $builder->endRepeater();

        $builder = $builder->endGroup();


        $builder->addTab('Packages');
        $builder = $builder->addGroup('packages', [ 'label' => 'Packages' ]);
        $builder
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Content' ])
        ;

            $builder = $builder->addRepeater('packages_repeater', [ 'layout' => 'row', 'label' => 'Packages', ]);
            $builder
                ->addText('title', [ 'label' => 'Title' ])
                ->addWysiwyg('text', [ 'label' => 'Text' ])
            ;

                $builder = $builder->addRepeater('features_repeater', [ 'layout' => 'row', 'label' => 'Features', ]);
                $builder
                    ->addText('title', [ 'label' => 'Title' ])
                    ->addWysiwyg('text', [ 'label' => 'Text' ])
                ;
                $builder = $builder->endRepeater();

            $builder
                ->addText('price', [ 'label' => 'Price' ])
                ->addText('timeline', [ 'label' => 'Timeline' ])
                ->addLink('link', [ 'label' => 'Link' ])
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