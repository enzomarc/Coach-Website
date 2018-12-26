<?php

namespace App\Models;

class Model
{

    protected $datas = [];
    protected $table_name;
    protected $identifier = 'id';

    public function __construct(array $datas = [])
    {
        $table = explode('\\', get_called_class());
        $this->table_name = strtolower($table[count($table) - 1]) . 's';

        foreach ($datas as $data)
            $this->datas[] = $data;
    }

    public function set(string $key, $value)
    {
        $this->datas[$key] = $value;
    }

    public function datas(): array
    {
        return $this->datas;
    }

    public static function all()
    {
        $table = explode('\\', get_called_class());
        $table_name = strtolower($table[count($table) - 1]) . 's';

        $query = Database::GetDB()->prepare("SELECT * FROM ". $table_name);

        if ($query->execute()) {
            return $query->fetchAll(\PDO::FETCH_OBJ);
        }

        return false;
    }

    public function get($key)
    {
        return $this->datas[$key];
    }

    public static function find($param, $value)
    {
        $table = explode('\\', get_called_class());
        $table_name = strtolower($table[count($table) - 1]) . 's';

        $query = Database::GetDB()->prepare("SELECT * FROM ". $table_name ." WHERE ". $param ." = :val");
        $query->bindValue(':val', $value);

        if ($query->execute()) {
            return $query->fetchAll(\PDO::FETCH_OBJ);
        }

        return false;
    }

}