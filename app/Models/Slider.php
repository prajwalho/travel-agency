<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'sliders';

    protected $fillable = [
        'title',
        'sub_title',
        'url',
        'url_title',
        'image',
        'status'
    ];

    protected $hidden = [
        'sub_title'
    ];

    public function scopeOrderedByLft($query)
    {
        return $query->orderBy('lft');
    }
}
