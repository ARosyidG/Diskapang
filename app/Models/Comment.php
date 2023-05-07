<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    public function Berita(){
        return $this->belongsTo(Berita::class);
    }
}
