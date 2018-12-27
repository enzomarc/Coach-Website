<?php

namespace App\Models;

use App\Flash;

class Model
{

    protected $table_name;
    protected $identifier = 'id';
    protected $timestamps = false;

    public function __construct(array $datas = [])
    {
        $table = explode('\\', get_called_class());
        $this->table_name = strtolower($table[count($table) - 1]) . 's';

        foreach ($datas as $key => $value)
            $this->$key = $value;
    }

    public function set(string $key, $value)
    {
        $this->$key = $value;
    }

    public function datas(): array
    {
        return get_object_vars($this);
    }

    /**
     * @param string $exclude Key to exclude from the datas
     * @return array Datas of the object
     */
    public function object_datas(string $exclude = null): array
    {
        $datas = $this->datas();

        foreach ($datas as $k => $v) {
            if ($k == "identifier" || $k == "table_name" || $k == "timestamps" || $k == $exclude)
                unset($datas[$k]);
        }

        return $datas;
    }

    public static function all(string $where = null)
    {
        $table = explode('\\', get_called_class());
        $table_name = strtolower($table[count($table) - 1]) . 's';

        if ($where == null)
            $query = Database::GetDB()->prepare("SELECT * FROM ". $table_name);
        else
            $query = Database::GetDB()->prepare("SELECT * FROM ". $table_name . " WHERE " . $where);

        if ($query->execute()) {
            return $query->fetchAll(\PDO::FETCH_CLASS, get_called_class());
        }

        return false;
    }

    public function get($key)
    {
        return $this->$key;
    }

    private function getStructure(string $table)
    {
        $query = Database::GetDB()->prepare("SHOW COLUMNS FROM " . $table);

        if ($query->execute())
            return $query->fetchAll(\PDO::FETCH_OBJ);

        return false;
    }

    public function save()
    {
        foreach ($this->getStructure($this->table_name) as $structure) {
            if ($structure->Field == "created_at" || $structure->Field == "updated_at") {
                $this->timestamps = true;
            } else {
                $this->timestamps = false;
            }
        }

        $query = "INSERT INTO " . $this->table_name . "(";
        foreach ($this->object_datas() as $k => $v) {
            $query .= $this->table_name . '.' . $k . ', ';
        }

        if ($this->timestamps)
            $query .= $this->table_name . '.created_at, ' . $this->table_name . '.updated_at) VALUES (';
        else
            $query = substr($query, 0, strlen($query) - 2) . ') VALUES (';


        foreach ($this->object_datas() as $data):
            if (is_string($data)) {
                if ($data == null || $data == '')
                    $query .= "NULL" . ',';
                else
                    $query .= "\"" . $data . '", ';
            } else {
                if ($data == null || $data == '')
                    $query .= "NULL" . ',';
                else
                    $query .= $data . ', ';
            }
        endforeach;

        if ($this->timestamps)
            $query .= "\"" . date('Y-m-d H:i:s') . '", "' . date('Y-m-d H:i:s') . '")';
        else
            $query = substr($query, 0, strlen($query) - 2) . ')';

        $statement = Database::GetDB()->prepare($query);

        return $statement->execute();
    }

    public function update()
    {
        foreach ($this->getStructure($this->table_name) as $structure) {
            if ($structure->Field == "created_at" || $structure->Field == "updated_at") {
                $this->timestamps = true;
            } else {
                $this->timestamps = false;
            }
        }

        $query = "UPDATE " . $this->table_name . " SET ";
        foreach ($this->object_datas('updated_at') as $k => $v) {
            if (is_string($v)) {
                if ($v == null || $v == '')
                    $query .= "NULL" . ", ";
                else
                    $query .= $k . " = \"" . $v . "\", ";
            } else {
                if ($v == null || $v == '')
                    $query .= $k . " = NULL" . ", ";
                else
                    $query .= $k . " = " . $v . ", ";
            }
        }

        if ($this->timestamps) {
            $query .= "updated_at = \"" . date('Y-m-d H:i:s') . "\" WHERE " . $this->identifier . " = " . $this->object_datas()[$this->identifier];
        } else {
            $query = substr($query, 0, strlen($query) - 2) . " WHERE " . $this->identifier . " = " . $this->object_datas()[$this->identifier];
        }

        $statement = Database::GetDB()->prepare($query);

        return $statement->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE " . $this->identifier . " = :id";
        $statement = Database::GetDB()->prepare($query);
        $statement->bindValue(':id', $this->datas()[$this->identifier]);

        return $statement->execute();
    }

    public static function find($id, $value)
    {
        $table = explode('\\', get_called_class());
        $table_name = strtolower($table[count($table) - 1]) . 's';

        $query = Database::GetDB()->prepare("SELECT * FROM ". $table_name ." WHERE ". $id ." = :val");
        $query->bindValue(':val', $value);

        if ($query->execute()) {
            return $query->fetchAll(\PDO::FETCH_CLASS, get_called_class())[0];
        }

        return false;
    }

}