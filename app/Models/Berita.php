<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Berita extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [
        'id'
    ];
    public function sluggable(): array
    {
        return [
            'Slug' => [
                'source' => 'Judul'
            ]
        ];
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
