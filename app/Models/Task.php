<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['title', 'done'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string>
     */
    protected function casts(): array
    {
        return [
            'done' => 'boolean',
        ];
    }
}
