<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'name',
        'description',
        'recommendation',
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
        'price',
        'discount_price',
        'new',
        'category_id',
        'itemClass_id',
        'sourceWebsite_id'
    ]; // Laravel preenchera essa coluna

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
        // Varios produtos podem pertecem a 1 categoria
    }

    public function ItemClass()
    {
        return $this->belongsTo(ItemClass::class, 'itemClass_id', 'id');
        // Varios produtos podem pertecem a 1 classe de item
    }

    public function SourceWebsite()
    {
        return $this->belongsTo(SourceWebsite::class, 'sourceWebsite_id', 'id');
        // Varios produtos podem pertecem a 1 site fonte
    }

    public function Tags()
    {
        return $this->belongsToMany(Tag::class);
        // Varios produtos pertencem a varias tags
    }

    public function hasTag($tag_id)
    {
        return in_array($tag_id, $this->Tags->pluck('id')->toArray());
        // [in_array($variavel, o que eu busco)]
        // [$this->Tags->pluck('id')->toArray())] vai procurar a coluna 'id' no meu array/obj ($tag_id), retornando true (Se aquele produto tiver aquela tag) ou false (Se aquela tag não estar naquele produto)
    }
}
