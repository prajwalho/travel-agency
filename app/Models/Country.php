<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'countries';

    protected $fillable = [
        'name', 'code', 'image',
    ];

    // Accessor for the virtual column 'nameCode'
    public function getCustomReorderNameAttribute()
    {
        $id = $this->attributes['id'];
        $code = '(' . $this->attributes['code'] . ')';
        $nameCode = $id . ') ' . $this->attributes['name'] . ' ' . $code;
        return $nameCode;
    }

    public function scopeOrderedByLft($query)
    {
        return $query->orderBy('lft');
    }
}