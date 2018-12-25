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