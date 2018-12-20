<?php

function input(string $key = null)
{
    if (is_null($key))
        return $_REQUEST;

    return $_REQUEST[$key];
}