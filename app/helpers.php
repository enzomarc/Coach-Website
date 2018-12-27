<?php

/**
 * Get user inputs from POST(forms) request
 * @param string|null $key Data to get from inputs, leave blank to get all inputs
 * @return mixed
 */
function input($keys = null)
{
    if (is_null($keys))
        return $_POST;

    $datas = [];

    if (is_array($keys)) {
        foreach ($keys as $key) {
            $datas[$key] = $_POST[$key];
        }
    } else {
        return $_POST[$keys];
    }
}

/**
 * @param string $key Key to exclude from user inputs
 * @return array User inputs except the key
 */
function except(string $key): array
{
    $input = [];
    $all = input();

    foreach($all as $k => $v) {
        if ($k != $key)
            $input[$k] = $v;
    }

    return $input;
}

/**
 * @param string $name Name of the route to redirect to
 */
function redirect(string $name, array $params = []): void
{
    $GLOBALS['router']->redirect($name, $params);
}

/**
 * Render a view
 * @param string $view View to render
 * @param array $params Parameters to pass to the view
 */
function view(string $view, array $params = []): void
{
    $GLOBALS['poison']->render($view, $params);
}

function dd($expression)
{
    echo '<pre>';
    var_dump($expression);
    echo '</pre>';
    die();
}

function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

function session_get($key)
{
    if (!isset($_SESSION))
        session_start();

    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
}

function session_set($key, $value)
{
    if (!isset($_SESSION))
        session_start();

    $_SESSION[$key] = $value;
}

function sess_unset($key)
{
    if (!isset($_SESSION))
        session_start();

    unset($_SESSION[$key]);
}

function session()
{
    if (!isset($_SESSION))
        session_start();

    return $_SESSION;
}

function session_close()
{
    if (!isset($_SESSION))
        session_start();

    session_unset();
    session_regenerate_id(true);
    session_destroy();
}

function upload($file, $dir)
{
    $extension = explode('.', $file['name'])[sizeof(explode('.', $file['name'])) - 1];
    $fileName = uniqid('post_bg.') . '.' . $extension;
    $target = $dir . $fileName;

    if (file_exists($target)) {
        return "File exists !";
    }

    if ($file["size"] > 500000) {
        return "File is too big";
    }

    if (move_uploaded_file($file["tmp_name"], $target)) {
        session_set('uploaded', $fileName);
        return true;
    } else {
        return "Error during upload";
    }
}

function toSnakeCase(string $str)
{
    return str_replace('-', '_', str_replace(' ', '_', strtolower($str)));
}