<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndCondition extends Model
{
    use HasFactory;

    protected $fillable = ['banner_image'];

    public function titles()
    {
        return $this->hasMany(TermsAndConditionTitle::class, 'terms_id');
    }
}
