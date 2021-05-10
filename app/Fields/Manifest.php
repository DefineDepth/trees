<?php

namespace App\Fields;

use App\Fields\AbstractFields;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */


class Manifest extends AbstractFields
{

    const MANIFEST_TEMPLATE = 'views/template-manifest.blade.php';

    public function add_fields()
    {
        $builder = $this->new_fields_builder('Manifest Controls', [
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

        $builder->setLocation('page_template', '==', static::MANIFEST_TEMPLATE);


        // $builder->addTab('Header');
        $builder = $builder->addGroup('header', [ 'layout' => 'row', 'label' => 'Header Block' ]);
        $builder
            ->addText('subtitle', [ 'label' => 'Subtitle' ])
            ->addText('title', [ 'label' => 'Title' ])
            ->addWysiwyg('text', [ 'label' => 'Content' ])
            ->addImage('image', [ 'label' => 'Image' ])
        ;
        $builder = $builder->endGroup();


        $builder = $builder->addGroup('manifest_features', [ 'layout' => 'row', 'label' => 'Features' ]);

            $builder = $builder->addRepeater('features_repeater', [ 'layout' => 'row', 'label' => 'Feature', ]);
            $builder->addText('title', [ 'label' => 'Title' ]);
            $builder->addText('text', [ 'label' => 'Text' ]);
            $builder = $builder->endRepeater();

        $builder = $builder->endGroup();


        $builder = $builder->addGroup('manifest_cta', [ 'layout' => 'row', 'label' => 'CTA' ]);
        $builder
            ->addText('title', [ 'label' => 'Title' ])
            ->addLink('link', [ 'label' => 'Button' ])
        ;
        $builder = $builder->endGroup();


        $this->add_local_field_group($builder);
    }
    
}