<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory; 

    protected $fillable = ['name','url'];

    public function dropdownItems()
    {
        return $this->hasMany(DropdownItem::class);
    }
}
