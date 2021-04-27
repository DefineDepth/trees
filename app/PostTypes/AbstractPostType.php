<?php

namespace App\PostTypes;

use PostTypes\PostType;
use StoutLogic\AcfBuilder\FieldsBuilder;

/** https://github.com/jjgrainger/PostTypes/  **/

/** https://roots.io/guides/using-acf-builder-with-sage/ */
/** https://github.com/Log1x/acf-builder-cheatsheet#relationship */

abstract class AbstractPostType
{

    // use Separator, RelatedArtworks;

    const POST_TYPE = 'custom-post-type';

    const POST_TYPE_OPTIONS = [
        'public' => true,
        'has_archive' => true,
        'supports' => ['title',   'thumbnail'],
    ];
    private $meta_boxes_to_hide = [];

    // const HAS_META_BOXES = true;


    protected $post_obj;
    public $taxonomies = [];
    public $field_groups = [];

    public function __construct()
    {
        if (!$this->is_enabled()) {
            return;
        }
        $this->init();
        $this->define_attributes();
        $this->register();
        $this->register_taxonomies();
        $this->register_hooks();
        $this->after_register_hooks();
        // $this->add_local_field_groups();
    }


    abstract function define_attributes();
    abstract function add_metaboxes();

    public function is_enabled(): bool
    {
        return  true;
    }

    private function init()
    {
        $this->post_obj = new PostType($this->post_type_name(), static::POST_TYPE_OPTIONS);
    }

    public function add_taxonomy($taxonomy)
    {
        $this->taxonomies[] = $taxonomy;
    }

    private function register()
    {
        $this->post_type_object()->register();
    }

    protected function post_type_name()
    {
        return static::POST_TYPE;
    }

    private function register_taxonomies()
    {
        foreach ($this->taxonomies as  $taxonomy) {
            $this->post_type_object()->taxonomy($taxonomy->name);
            $taxonomy->register();
        }
    }

    private function register_hooks()
    {
        add_action('acf/init', [$this, 'add_metaboxes']);
        add_action('admin_menu',    [$this, 'remove_meta_boxes']);
    }

    public function after_register_hooks()
    {
    }

    protected function new_fields_builder(...$args): FieldsBuilder
    {
        $this->field_groups[] =  new FieldsBuilder(...$args);

        return end($this->field_groups);
    }

    private function add_local_field_groups()
    {
        // foreach ($this->field_groups as  $field_group) {
        //     acf_add_local_field_group($field_group->build());
        // }
    }

    protected function add_local_field_group(FieldsBuilder $field_group)
    {
        return acf_add_local_field_group($field_group->build());
    }


    protected function post_type_object()
    {
        return $this->post_obj;
    }

    protected function columns()
    {
        return $this->post_type_object()->columns();
    }

    protected function filters(array $filters = [])
    {
        return $this->post_type_object()->filters($filters);
    }

    protected function remove_meta_box(string $box_id, string $priority = 'normal')
    {
        $this->meta_boxes_to_hide[] = [
            'id' => $box_id,
            'priority' => $priority
        ];
    }

    public function remove_meta_boxes()
    {
        foreach ($this->meta_boxes_to_hide as $meta_box) {
            remove_meta_box($meta_box['id'], $this->post_type_name(), $meta_box['priority']);
        }
    }
}