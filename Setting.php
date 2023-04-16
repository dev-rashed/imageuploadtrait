<?php

namespace App\Models;

use App\Traits\ImageUploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    use ImageUploadTrait;
    protected $fillable = [
        'key',
        'value',
        'is_image',
    ];
}
