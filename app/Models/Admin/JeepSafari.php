<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JeepSafari extends Model
{
    use HasFactory;
    protected $fillable = ['banner_image', 'jeep_image_1', 'jeep_button_text_1', 'jeep_button_link_1', 'jeep_image_2', 'jeep_button_text_2', 'jeep_button_link_2'];

    public function titles()
    {
        return $this->hasMany(JeepSafariTitle::class, 'jeep_id');
    }
}
