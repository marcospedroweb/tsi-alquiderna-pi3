<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
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

    public static function returnAllProductsByCategory()
    {
        $allCategories = [
            'lightArmors' => Product::filterProductBy('Armadura', 'leve'),
            'mediumArmors' => Product::filterProductBy('Armadura', 'média'),
            'heavyArmors' => Product::filterProductBy('Armadura', 'pesada'),
            'kitsLightArmors' => Product::filterProductBy('Armadura', 'leve', 'none', 'none', 12, 'kit'),
            'kitsMediumArmors' => Product::filterProductBy('Armadura', 'média', 'none', 'none', 12, 'kit'),
            'kitsHeavyArmors' => Product::filterProductBy('Armadura', 'pesada', 'none', 'none', 12, 'kit'),
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

    public static function filterProductBy(string $category_name, string $itemClass_name = '', string $orderByColumn = 'name', string $orderByValue = 'ASC', int $paginate = 12, string $kit = '')
    {
        $filterProductBy = new Product;
        if ($orderByColumn === 'none')
            $orderByColumn = 'name';
        if ($orderByValue === 'none')
            $orderByValue = 'ASC';

        if ($category_name)
            $filterProductBy =  $filterProductBy->where('category_id', DB::table('categories')->where('name', $category_name)->first()->id);

        if ($itemClass_name == 'return')
            return $filterProductBy;
        elseif ($itemClass_name !== 'kit' && $itemClass_name)
            $filterProductBy =  $filterProductBy->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id);

        if ($kit === 'onlyKits' || $itemClass_name === 'kit')
            $filterProductBy =  $filterProductBy->where('kit', 1);
        else if ($kit === 'withKits' && $itemClass_name)
            $filterProductBy =  $filterProductBy->orWhere('kit', 1)
                ->where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id);
        else if ($kit === 'withKits' && $itemClass_name === '')
            $filterProductBy =  $filterProductBy->orWhere('kit', 1)
                ->where('category_id', DB::table('categories')->where('name', $category_name)->first()->id);

        if ($orderByColumn == 'return')
            return $filterProductBy;
        elseif ($orderByColumn && $orderByValue)
            $filterProductBy =  $filterProductBy->orderBy($orderByColumn, $orderByValue);

        if (!$paginate)
            return $filterProductBy;
        elseif ($paginate)
            $filterProductBy =  $filterProductBy->paginate($paginate);

        return $filterProductBy;
    }

    public static function filterProductByFilters(array $filters, string $category_name, string $itemClass_name = '', string $orderByColumn = 'name', string $orderByValue = 'DESC')
    {
        $numberFilters = count($filters);

        if ($numberFilters === 6) {
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($filters[0][0], strpos($filters[0][0], 'price') ? '!=' : '=', $filters[0][1])
                ->where($filters[1][0], strpos($filters[1][0], 'price') ? '!=' : '=', $filters[1][1])
                ->where($filters[2][0], strpos($filters[2][0], 'price') ? '!=' : '=', $filters[2][1])
                ->where($filters[3][0], strpos($filters[3][0], 'price') ? '!=' : '=', $filters[3][1])
                ->where($filters[4][0], strpos($filters[4][0], 'price') ? '!=' : '=', $filters[4][1])
                ->where($filters[5][0], strpos($filters[5][0], 'price') ? '!=' : '=', $filters[5][1])
                ->orderBy($orderByColumn, $orderByValue)
                ->paginate(12);
        } else if ($numberFilters === 5)
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($filters[0][0], strpos($filters[0][0], 'price') ? '!=' : '=', $filters[0][1])
                ->where($filters[1][0], strpos($filters[1][0], 'price') ? '!=' : '=', $filters[1][1])
                ->where($filters[2][0], strpos($filters[2][0], 'price') ? '!=' : '=', $filters[2][1])
                ->where($filters[3][0], strpos($filters[3][0], 'price') ? '!=' : '=', $filters[3][1])
                ->where($filters[4][0], strpos($filters[4][0], 'price') ? '!=' : '=', $filters[4][1])
                ->orderBy($orderByColumn, $orderByValue)
                ->paginate(12);
        else if ($numberFilters === 4)
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($filters[0][0], strpos($filters[0][0], 'price') ? '!=' : '=', $filters[0][1])
                ->where($filters[1][0], strpos($filters[1][0], 'price') ? '!=' : '=', $filters[1][1])
                ->where($filters[2][0], strpos($filters[2][0], 'price') ? '!=' : '=', $filters[2][1])
                ->where($filters[3][0], strpos($filters[3][0], 'price') ? '!=' : '=', $filters[3][1])
                ->orderBy($orderByColumn, $orderByValue)
                ->paginate(12);
        else if ($numberFilters === 3)
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($filters[0][0], strpos($filters[0][0], 'price') ? '!=' : '=', $filters[0][1])
                ->where($filters[1][0], strpos($filters[1][0], 'price') ? '!=' : '=', $filters[1][1])
                ->where($filters[2][0], strpos($filters[2][0], 'price') ? '!=' : '=', $filters[2][1])
                ->orderBy($orderByColumn, $orderByValue)
                ->paginate(12);
        else if ($numberFilters === 2)
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($filters[0][0], strpos($filters[0][0], 'price') ? '!=' : '=', $filters[0][1])
                ->where($filters[1][0], strpos($filters[1][0], 'price') ? '!=' : '=', $filters[1][1])
                ->orderBy($orderByColumn, $orderByValue)
                ->paginate(12);
        else
            return Product::where('category_id', DB::table('categories')->where('name', $category_name)->first()->id)
                ->where('itemClass_id', DB::table('item_classes')->where('name', $itemClass_name)->first()->id)
                ->where($filters[0][0], strpos($filters[0][0], 'price') ? '!=' : '=', $filters[0][1])
                ->orderBy($orderByColumn, $orderByValue)
                ->paginate(12);
    }

    public static function filterProductByItemClass($category_name)
    {
        switch ($category_name) {
            case 'Armadura':
                $allProductsByItemClass = array(
                    'lightArmors' => Product::filterProductBy($category_name, 'leve', 'name', 'DESC'),
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
                    'potion-life' => Product::filterProductBy($category_name, 'vida', 'name', 'DESC'),
                    'potion-mana' => Product::filterProductBy($category_name, 'mana', 'name', 'DESC'),
                    'potion-speed' => Product::filterProductBy($category_name, 'agilidade', 'name', 'DESC'),
                    'potion-strength' => Product::filterProductBy($category_name, 'força', 'name', 'DESC'),
                );
                break;
            case 'Grimório':
                $allProductsByItemClass = array(
                    'grimoire-magic' => Product::filterProductBy($category_name, 'mágico', 'name', 'DESC'),
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

    public static function allProducts()
    {
        return Product::all();
    }
}
