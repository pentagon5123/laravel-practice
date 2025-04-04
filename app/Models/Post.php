<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "body",
        "category_id"
    ];

    public function getByLimit(int $limit_count = 4)
    {
        return $this->oderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function getPaginateByLimit(int $limit_count = 4)
    {
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    use SoftDeletes;
}
