<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = ['id'];
    public function customer() 
    {
        return belongsTo(Customer::class);
    }
    public function food() 
    {
        return belongsTo(food::class);
    }
}
