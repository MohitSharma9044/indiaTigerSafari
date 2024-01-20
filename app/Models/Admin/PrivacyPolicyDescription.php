<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicyDescription extends Model
{
    use HasFactory;
    protected $fillable = ['privacy_title_id', 'privacy_description'];

    public function title()
    {
        return $this->belongsTo(PrivacyPolicyTitle::class, 'id');
    }
}
