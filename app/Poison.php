<?php

namespace App;


class Poison
{

    private static $viewsPath;

    private static $viewExtension = '.php';

    /**
     * @var array Vars globally accessible for all views
     */
    private $globals = [];

    /**
     * Poison constructor.
     * @param string $path Path to the views directory
     */
    public function __construct(string $path)
    {
        if (!is_null($path))
            self::$viewsPath = $path;
    }

    /**
     * Set views path
     * @param string $path Path to the views directory
     */
    public static function setViewsPath(string $path): void
    {
        if (!is_null($path))
            self::$viewsPath = $path;
    }

    /**
     * Change views extension
     * @param string $extension View extension in the format ".extension"
     */
    public static function setViewExtension(string $extension): void
    {
        if (!is_null($extension))
            self::$viewExtension = $extension;
    }

    /**
     * Render a view
     * @param string $view View to render
     * @param array $params Parameters to pass to the view
     */
    public function render(string $view, array $params = []): void
    {
        $view = str_replace('.', DIRECTORY_SEPARATOR, $view);
        $path = self::$viewsPath . DIRECTORY_SEPARATOR . $view . self::$viewExtension;

        ob_start();

        extract($this->globals);
        extract($params);

        require($path);

        echo ob_get_clean();
    }

    /**
     * Add global variable
     * @param string $key Key of the variable to add
     * @param $value Value of the variable to add
     */
    public function addGlobal(string $key, $value): void
    {
        $this->globals[$key] = $value;
    }

    public function include(string $file): void
    {
        $file = str_replace('.', DIRECTORY_SEPARATOR, $file);
        $path = self::$viewsPath . DIRECTORY_SEPARATOR . $file . self::$viewExtension;

        ob_start();
        extract($this->globals);
        require($path);
        echo ob_get_clean();
    }

}