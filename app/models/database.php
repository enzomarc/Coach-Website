<?php

namespace App\Models;

use \PDO;

/**
 * Database Connection Class.
 */
class Database {

    /**
     * @var $db
     */
	private static $db;

    /**
     * Get an instance of the database connection
     * @param string $dbname Name of the database
     * @param string $dbuser Database connection username
     * @param string $dbpassword Database connection password
     * @param string $server Database server
     * @return PDO
     */
    public static function GetDB(string $dbname = 'sql9613_16', string $dbuser = 'sql9613_16', string $dbpassword = 'RK2W98R7SAh', string $server = 'sql9613.phpnet.org'): PDO
    {
        if (!isset(self::$db))
            $db = new PDO('mysql:host=' . $server . '; dbname=' . $dbname . '; charset=utf8', $dbuser, $dbpassword);
        return $db;
    }

}
