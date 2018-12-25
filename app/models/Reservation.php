<?php

namespace App\Models;

class Reservation extends Model
{

    public function __construct(array $datas = [])
    {
        parent::__construct($datas);
        return $this;
    }

    public function save($datas = [])
    {
        $query = Database::GetDB()->prepare("INSERT INTO ". $this->table_name ." (email, phone, scheduled, ". $this->table_name .".from, ". $this->table_name .".to, message, ". $this->table_name .".type) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $datas = count($datas) > 0 ? $datas : $this->datas;
        if ($query->execute($datas))
            return $this;

        return false;
    }

    public function update($datas = [])
    {
        $query = Database::GetDB()->prepare("UPDATE ". $this->table_name ." SET email = ?, phone = ?, scheduled = ?, from = ?, to = ?, message = ?");
        $datas = count($datas) > 0 ? $datas : $this->datas;
        if ($query->execute($datas))
            return $this;

        return false;
    }

}