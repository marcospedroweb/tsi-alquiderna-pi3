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
                           'recommendation',
                           'image',
                           'imagePosX',
                           'imagePosY',
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
                           'price',
                           'category_id',
                           'itemClass_id',
                           'sourceWebsite_id']; // Laravel preenchera essa coluna

    public function Category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
        // Varios produtos podem pertecem a 1 categoria
    }

    public function ItemClass(){
        return $this->belongsTo(ItemClass::class, 'itemClass_id', 'id');
        // Varios produtos podem pertecem a 1 classe de item
    }

    public function SourceWebsite(){
        return $this->belongsTo(SourceWebsite::class, 'sourceWebsite_id', 'id');
        // Varios produtos podem pertecem a 1 site fonte
    }

}
