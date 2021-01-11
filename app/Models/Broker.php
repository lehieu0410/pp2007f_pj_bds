<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Broker extends Model
{
    use Searchable;
    //
    public function searchableAs()
    {
        return 'broker_index';
    }
}
