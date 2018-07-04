<?php

namespace App;

use Illuminate\Support\Facades\DB;
use MongoDB;

class Mongo extends MongoDB
{
    public static function connectionMongodb($tables)
    {
        return $users = DB::connection('mongodb')->collection($tables);
    }
}
