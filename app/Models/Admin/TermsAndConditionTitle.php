<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndConditionTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        'terms_id',
        'terms_title'
    ];

    public function descriptions()
    {
        return $this->hasMany(TermsAndConditionDescription::class, 'terms_title_id');
    }

    public function terms()
    {
        return $this->belongsTo(TermsAndCondtion::class, 'id');
    }
}
