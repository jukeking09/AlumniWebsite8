<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'job_title',
        'job_description',
        'user_id',
        'company_email',
        'company_name',
        'job_type',
        'pdf_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
