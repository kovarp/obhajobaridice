<?php

namespace Theme\Utils;

class Images {

	public static function getSvgSprite($svg) {
		return '<svg class="svg svg--' . $svg . '" role="presentation"><use xlink:href="/wp-content/themes/theme/assets/dist/img/sprite.svg#icon-' . $svg . '" /></svg>';
	}

	public static function getSvg($svg) {
		include get_stylesheet_directory() . '/assets/dist/img/svg/' . $svg . '.svg';
	}
}
