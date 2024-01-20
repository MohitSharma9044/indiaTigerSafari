<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayNow extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'account_no',
        'ifsc_code',
        'bank_branch',
        'gstin',
        'pan',
        'banner_image',
    ];
}
