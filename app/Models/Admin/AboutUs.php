<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_heading',
        'main_content',
        'main_image',
        'sub_heading_tag',
        'sub_heading',
        'sub_content',
        'heading1',
        'content1',
        'heading2',
        'content2',
        'banner_image',
    ];

    public function descriptions()
    {
        return $this->hasMany(AboutUsDescription::class);
    }
}
