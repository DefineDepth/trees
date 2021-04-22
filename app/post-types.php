<?php

namespace App\Fields;

use App\Fields\FrontPage;
use App\Fields\About;
use App\Fields\Services;

use App\PostTypes\Client;
use App\PostTypes\Team;
use App\PostTypes\Portfolio;
use App\PostTypes\Post;


// if (!function_exists('acf')) {
//   define('ACF_CUSTOM_PATH', '../vendor/advanced-custom-fields-pro/');
//   define('ACF_URL', get_template_directory_uri()  . '/'  . ACF_CUSTOM_PATH);
//   require_once  __DIR__ . '/' . ACF_CUSTOM_PATH . 'acf.php';
// }

// add_action('acf/init', function () {
//   acf_add_options_page('Theme settings');
// });


new FrontPage();
new About();
new Services();

new Client;
new Team;
new Portfolio;
new Post;
