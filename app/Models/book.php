<?php

namespace App\Models;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class book extends Model
{
    use HasFactory;

    use Sluggable;
    protected $fillable =[
        'book_code' , 'title', 'cover','status','slug'
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories(): BelongsToMany
{
    return $this ->BelongsToMany(Category::class, 'book_category' ,'book_id', 'category_id');
}



    
}


