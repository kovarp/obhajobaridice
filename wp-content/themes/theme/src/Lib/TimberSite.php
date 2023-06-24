<?php

namespace Theme\Lib;

use Timber;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;
use Twig_Extension_StringLoader;
use Twig_SimpleFunction;

/** Timber init
 */
class TimberSite extends Timber\Site {

    public function __construct() {
        add_filter(
            'timber_context',
            [
                $this,
                'add_to_context'
            ]
        );

        add_filter(
            'get_twig',
            [
                $this,
                'add_to_twig'
            ]
        );

        add_filter(
            'timber/loader/loader',
            [
                $this,
                'twigNamespaces'
            ]
        );

        parent::__construct();
    }

    public static function initTheme() {
        Timber::$dirname = ['templates'];
        Timber::$autoescape = FALSE;

        new Timber();
    }

    public function twigNamespaces(FilesystemLoader $loader): FilesystemLoader {
        $loader->addPath(\get_stylesheet_directory() . '/src/Components', 'components');

        return $loader;
    }

    public function add_to_context($context) {
        $context['site'] = $this;



        return $context;
    }

    public function add_to_twig($twig) {
        $twig->addExtension(new Twig_Extension_StringLoader());

        $twig->addFunction(new Twig_SimpleFunction('svg', array('\Theme\Utils\Images', 'getSvg')));
        $twig->addFunction(new Twig_SimpleFunction('svg_sprite', array('\Theme\Utils\Images', 'getSvgSprite')));

        return $twig;
    }
}

new TimberSite();
