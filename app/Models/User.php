<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'title_id',
        'contact_number',
        'country_code_id',
        'year_of_passing',
        'course_id',
        'department_id',
        'address',
        'designation',
        'profile_picture',
        'research_areas',
        'email',
        'password',
        'custom_id',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ✅ Relationship methods
    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function countryCode()
    {
        return $this->belongsTo(CountryCode::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    // ✅ Accessor methods
    // public function getProfilePictureAttribute($value)
    // {
    //     return $value ? asset('storage/' . $value) : null;
    // }
}
