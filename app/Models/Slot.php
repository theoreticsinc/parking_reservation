<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function slot()
    {
        return $this->hasMany(Slot::class);
    }
}