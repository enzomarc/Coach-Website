<?php

namespace App\Models;

class Model
{

    protected $datas = [];
    protected $table_name;

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

    public function all(): array
    {
        return $this->datas;
    }

    public function get($key)
    {
        return $this->datas[$key];
    }

    public function find($id)
    {
        $query = Database::GetDB()->prepare("SELECT * FROM ". $this->table_name ." WHERE id = :id");
        $query->bindValue(':id', $id);
        if ($query->execute()) {
            $this->datas = $query->fetchAll();
            return $this;
        }

        return false;
    }

}