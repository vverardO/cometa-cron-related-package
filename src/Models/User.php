<?php

namespace YourVendor\UserTransactions\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
