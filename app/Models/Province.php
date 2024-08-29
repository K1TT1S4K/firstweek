<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Province extends Model
{
    use HasFactory;
    protected $guarded = [];

    // one to many
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
