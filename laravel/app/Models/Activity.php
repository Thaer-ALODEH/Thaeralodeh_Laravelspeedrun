<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model

{

    // It is important to remeber that u r in the activity table
    protected $guarded = ['id'];
    public function customer() 
    {
        return belongsTo(Customer::class);
    }
    public function exercise() 
    {
        return belongsTo(Exercise::class);
    }
}
