<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $table = 'icons';

    protected $fillable = [
        'name', 'icon',
    ];

    // Accessor for the virtual column 'nameIcons'
    public function getNameIconsAttribute()
    {
        $iconClass = $this->attributes['icon'];
        $icon = '(' . $iconClass . ')';
        $html = $this->attributes['name'] . ' ' . $icon;
        return $html;
    }
}
