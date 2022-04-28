<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use Illuminate\Support\Facades\DB;

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
        'magic_attack',
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

    public static function newProducts()
    {
        return DB::table('products')->where('new', 1)->limit(5)->get();
    }

    public static function whatsCategory(int $category_id)
    {
        return DB::table('categories')
            ->where('id', $category_id)->first()->name;
    }

    public static function whatsItemClass(int $itemClass_id)
    {
        return DB::table('item_classes')
            ->where('id', $itemClass_id)->first()->name;
    }

    public static function whatsSouceWebsite(int $souceWebsite_id)
    {
        return DB::table('source_websites')
            ->where('id', $souceWebsite_id)->first()->name;
    }

    public static function filterProductBy(string $category_name, string $itemClass_name = '', string $orderByColumn = '', string $orderByValue = '')
    {
        if ($orderByColumn && $orderByValue) {
            if ($category_name && $itemClass_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                    ->orderBy($orderByColumn, $orderByValue)
                    ->get();
            else if ($category_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->orderBy($orderByColumn, $orderByValue)
                    ->get();
        } else {
            if ($category_name && $itemClass_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                    ->paginate(12);
            else if ($category_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->get();
        }
    }
}
