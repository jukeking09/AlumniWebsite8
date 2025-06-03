<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Optional: if your table name is not 'roles', define it
    // protected $table = 'roles';

    protected $fillable = [
        'role_name',        // e.g., 'admin', 'student', 'teacher'
    ];

    /**
     * Relationship: One Role has many Users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
