<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAndConditionDescription extends Model
{
    use HasFactory;

    protected $fillable = ['terms_title_id', 'terms_description'];

    public function title()
    {
        return $this->belongsTo(TermsAndConditionTitle::class, 'id');
    }
}
