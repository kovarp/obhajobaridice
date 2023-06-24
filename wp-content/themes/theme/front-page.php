<?php

use Timber\Timber;

$context = Timber::context();
$context['post'] = new \Timber\Post();

Timber::render('front-page.twig', $context);
