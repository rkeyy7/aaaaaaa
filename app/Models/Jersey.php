<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jersey extends Model
{
    use HasFactory;

    // protected $fillable = ['name','description','categoria'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}


