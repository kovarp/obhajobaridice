<?php

require_once ABSPATH . '/vendor/autoload.php';

new Theme\Lib\Core();
new Theme\Lib\TimberSite();

add_action('after_setup_theme', ['Theme\Lib\TimberSite', 'initTheme']);
