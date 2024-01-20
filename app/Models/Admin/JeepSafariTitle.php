<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JeepSafariTitle extends Model
{
    use HasFactory;
    protected $fillable = [
        'jeep_id',
        'jeep_title'
    ];

    public function descriptions()
    {
        return $this->hasMany(JeepSafariDescription::class, 'jeep_title_id');
    }

    public function jeep()
    {
        return $this->belongsTo(JeepSafari::class, 'id');
    }
}
