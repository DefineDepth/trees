<?php

namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */

abstract class AbstractFields
{

    public $taxonomies = [];
    public $field_groups = [];

    public function __construct()
    {
        if (!$this->is_enabled()) {
            return;
        }
        $this->init();
        $this->bind_hooks();
    }

    abstract function add_fields();


    public function is_enabled(): bool
    {
        return  true;
    }

    private function init()
    {
    }

    private function bind_hooks()
    {
        add_action('acf/init', [$this, 'add_fields']);
    }


    protected function new_fields_builder(...$args): FieldsBuilder
    {
        $this->field_groups[] =  new FieldsBuilder(...$args);

        return end($this->field_groups);
    }

    protected function add_local_field_group(FieldsBuilder $field_group)
    {
        return acf_add_local_field_group($field_group->build());
    }
}