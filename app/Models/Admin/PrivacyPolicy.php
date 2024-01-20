<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;
    protected $fillable = ['banner_image'];

    public function titles()
    {
        return $this->hasMany(PrivacyPolicyTitle::class, 'privacy_id');
    }
}
