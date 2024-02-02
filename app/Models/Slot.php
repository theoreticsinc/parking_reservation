<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{

    protected $fillable = ['name', 'is_entry', 'is_exit'];

    public function slot()
    {
        return $this->hasMany(Slot::class);
    }
}