<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table = 'product_comment';
    protected $fillable = [
        'product_id',
        'user_id',
        'vote_start',
        'comment',
    ];
}
