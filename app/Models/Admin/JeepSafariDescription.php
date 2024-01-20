<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JeepSafariDescription extends Model
{
    use HasFactory;
    protected $fillable = ['jeep_title_id', 'jeep_description'];

    public function title()
    {
        return $this->belongsTo(JeepSafariTitle::class, 'id');
    }
}
