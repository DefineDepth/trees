<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{

    public function footer_scheme()
    {
        return '-teal';
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }


    public function about_link()
    {
        return get_the_permalink(\App\get_page_id_by_template('views/template-about.blade.php'));
    }

    public function services_link()
    {
        return get_the_permalink(\App\get_page_id_by_template('views/template-services.blade.php'));
    }

    public function insight_link()
    {
        return get_the_permalink(\App\get_page_id_by_template('views/template-insight.blade.php'));
    }

    public function portfolio_link()
    {
        return get_the_permalink(\App\get_page_id_by_template('views/template-portfolio.blade.php'));
    }

}
