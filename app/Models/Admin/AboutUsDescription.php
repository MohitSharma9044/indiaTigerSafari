<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsDescription extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function aboutUs()
    {
        return $this->belongsTo(AboutUs::class);
    }
}
