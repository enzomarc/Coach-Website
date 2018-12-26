<?php
namespace App;

class Flash {

    public static function set($message)
    {
        session_set('flash', ['message' => $message, 'life' => 2]);
    }

    public static function exists(): bool {
        if (!isset($_SESSION))
            session_start();

        return isset($_SESSION['flash']);
    }

    public static function get()
    {
        if (!isset($_SESSION))
            session_start();

        return isset($_SESSION['flash']) ? $_SESSION['flash'] : null;
    }

    public static function message()
    {
        if (!isset($_SESSION))
            session_start();

        return isset($_SESSION['flash']['message']) ? $_SESSION['flash']['message'] : null;
    }

    public static function progress()
    {
        if (!isset($_SESSION))
            session_start();

        if (self::exists()) {
            $_SESSION['flash']['life']--;

            if ($_SESSION['flash']['life'] <= 0)
                session_set('flash', null);
        }

    }

}