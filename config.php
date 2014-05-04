<?php

// Override any of the default settings below:

$config['site_title'] = 'The HeartCode Blog';    // Site title
$config['base_url'] = 'https://blog.heartcode.sg';               // Override base URL (e.g. http://example.com)
$config['theme'] = 'heartcode';           // Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';      // Set the PHP date format
$config['twig_config'] = array(         // Twig settings
    'cache' => false,                   // To enable Twig caching change this to CACHE_DIR
    'autoescape' => false,              // Autoescape Twig vars
    'debug' => false                    // Enable Twig debug
);
$config['pages_order_by'] = 'date';    // Order pages by "alpha" or "date"
$config['pages_order'] = 'desc';         // Order pages "asc" or "desc"
$config['excerpt_length'] = 50;         // The pages excerpt length (in words)

// To add a custom config setting:

$config['custom_setting'] = 'Hello';    // Can be accessed by {{ config.custom_setting }} in a theme

$config['custom_meta_values'] = array(
    //page slug keep lower case
    'slug' => 'Slug',
    //page category
    'category' => 'Category',
    //page status
    'status' => 'Status'
);

$config['opengraph_default_image'] = 'http://heartcode.sg/assets/images/heartcode-tag-bigsquare.png';
