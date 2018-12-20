<?php

function input(string $key = null): array
{
    if (is_null($key))
        return $_POST;

    return $_POST;
}

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