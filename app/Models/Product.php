<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['name',
                           'description',
                           'image',
                           'author_name',
                           'author_link',
                           'source_website_link',
                           'lvlMin',
                           'lvlMax',
                           'enchant',
                           'life',
                           'speed',
                           'physical_protection',
                           'magic_protection',
                           'physical_attack',
                           'physical_magic',
                           'mana',
                           'sale',
                           'price']; // Laravel preenchera essa coluna

    public function Category(){
        return $this->belongsTo(Category::class);
        // Varios produtos podem pertecem a 1 categoria
    }

    public function ItemClass(){
        return $this->belongsTo(ItemClass::class);
        // Varios produtos podem pertecem a 1 classe de item
    }

    public function SourceWebsite(){
        return $this->belongsTo(SourceWebsite::class);
        // Varios produtos podem pertecem a 1 site fonte
    }
}
