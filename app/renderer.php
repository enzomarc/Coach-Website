<?php

namespace App;

use Jenssegers\Blade\Blade;

/**
 * Class for rendering view
 */
class Renderer
{

    public static $viewsPath = '../resources/views/';
    public static $cachePath = '../resources/cache/';
    public static $render;

	/**
	 * Render view
	 * @param string $view Path to the view to render
	 */
	public static function render(string $view)
	{
	    if (self::$render == null)
        {
            self::$render = new Blade(self::$viewsPath, self::$cachePath);
        }

		echo self::$render->render($view);
	}

}
