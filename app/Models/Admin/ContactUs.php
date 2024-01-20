<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_heading',
        'main_content',
        'address',
        'address_content',
        'call_title',
        'call_number',
        'email_title',
        'email_address',
        'banner_image',
    ];
}
