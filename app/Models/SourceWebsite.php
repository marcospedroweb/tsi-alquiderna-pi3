<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SourceWebsite extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['name']; // Laravel preenchera essa coluna

    public function Products(){
        return $this->hasMany(Product::class);
        // 1 categoria pode possuir varios produtos
    }
}
