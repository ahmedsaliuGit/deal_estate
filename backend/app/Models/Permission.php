<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [
        'id',
        'name',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
