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

    public static function returnAllProductsByCategory()
    {
        $allCategories = [
            'lightArmors' => Product::filterProductBy('Armadura', 'leve'),
            'mediumArmors' => Product::filterProductBy('Armadura', 'média'),
            'heavyArmors' => Product::filterProductBy('Armadura', 'pesada'),
            'kitsLightArmors' => Product::filterProductBy('Armadura', 'leve - kit'),
            'kitsMediumArmors' => Product::filterProductBy('Armadura', 'média - kit'),
            'kitsHeavyArmors' => Product::filterProductBy('Armadura', 'pesada - kit'),
            'swords' => Product::filterProductBy('Arma física', 'espada'),
            'axes' => Product::filterProductBy('Arma física', 'machado'),
            'bows' => Product::filterProductBy('Arma física', 'arco'),
            'kitsPhysicalWeapons' => Product::filterProductBy('Arma física', 'kit'),
            'wands' => Product::filterProductBy('Arma mágica', 'varinha'),
            'kitsMagicWeapons' => Product::filterProductBy('Arma mágica', 'kit'),
            'lifePotions' => Product::filterProductBy('Poção', 'vida'),
            'strengthPotions' => Product::filterProductBy('Poção', 'força'),
            'manaPotions' => Product::filterProductBy('Poção', 'mana'),
            'kitsPotions' => Product::filterProductBy('Poção', 'kit'),
            'grimoires' => Product::filterProductBy('Grimório', 'mágico'),
            'kitsGrimoires' => Product::filterProductBy('Grimório', 'kit'),
        ];

        return $allCategories;
    }

    public function newProducts()
    {
        return Product::where('new', 1)->paginate(7);
    }

    public static function filterProductBy(string $category_name, string $itemClass_name = '', string $orderByColumn = 'name', string $orderByValue = 'DESC', int $paginate = 12)
    {
        if ($orderByColumn && $orderByValue) {
            if ($category_name && $itemClass_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                    ->orderBy($orderByColumn, $orderByValue)
                    ->paginate($paginate);
            else if ($category_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->orderBy($orderByColumn, $orderByValue)
                    ->paginate($paginate);
        } else {
            if ($category_name && $itemClass_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                    ->paginate($paginate);
            else if ($category_name)
                return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                    ->paginate($paginate);
        }
    }

    public static function filterProductByItemClass($category_name)
    {
        switch ($category_name) {
            case 'Armadura':
                $allProductsByItemClass = array(
                    'lightArmors' => Product::filterProductBy($category_name, 'leve', 'name', 'DESC', 7),
                    'mediumArmors' => Product::filterProductBy($category_name, 'média', 'name', 'DESC'),
                    'heavyArmors' => Product::filterProductBy($category_name, 'pesada', 'name', 'DESC'),
                );
                break;
            case 'Arma física':
                $allProductsByItemClass = array(
                    'swords' => Product::filterProductBy($category_name, 'espada', 'name', 'DESC'),
                    'axes' => Product::filterProductBy($category_name, 'machado', 'name', 'DESC'),
                    'bows' => Product::filterProductBy($category_name, 'arco', 'name', 'DESC'),
                );
                break;
            case 'Arma mágica':
                $allProductsByItemClass = array(
                    'wands' => Product::filterProductBy($category_name, 'varinha', 'name', 'DESC'),
                );
                break;
            case 'Poção':
                $allProductsByItemClass = array(
                    'life' => Product::filterProductBy($category_name, 'vida', 'name', 'DESC'),
                    'mana' => Product::filterProductBy($category_name, 'mana', 'name', 'DESC'),
                    'speed' => Product::filterProductBy($category_name, 'agilidade', 'name', 'DESC'),
                    'strength' => Product::filterProductBy($category_name, 'força', 'name', 'DESC'),
                );
                break;
            case 'Grimório':
                $allProductsByItemClass = array(
                    'mágico' => Product::filterProductBy($category_name, 'mágico', 'name', 'DESC'),
                );
                break;
        }

        return $allProductsByItemClass;
    }

    public static function filterProductByColumn(string $category_name, string $itemClass_name = '', string $whereColumn, string $whereValue, int $paginate = 12)
    {
        if ($category_name && $itemClass_name)
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($whereColumn, $whereValue)
                ->paginate($paginate);
        else
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where($whereColumn, $whereValue)
                ->paginate($paginate);
    }
}
