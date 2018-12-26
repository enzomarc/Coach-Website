<?php

namespace App\Models;

class Post extends Model
{

    public function __construct(array $datas = [])
    {
        parent::__construct($datas);
        return $this;
    }

}