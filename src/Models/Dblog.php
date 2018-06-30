<?php

namespace Abhishekkrhaith11\Dblog\Models;

use Illuminate\Database\Eloquent\Model;

class Dblog extends Model
{
    protected $table;

    public function __construct()
    {
        $this->table = config('dblog.table');
    }
}
