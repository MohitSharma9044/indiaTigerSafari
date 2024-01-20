<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicyTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'privacy_id',
        'privacy_title'
    ];

    public function descriptions()
    {
        return $this->hasMany(PrivacyPolicyDescription::class, 'privacy_title_id');
    }

    public function privacy()
    {
        return $this->belongsTo(PrivacyPolicy::class, 'id');
    }
}
