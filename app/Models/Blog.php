<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\BlogCategory;

class Blog extends Model
{
    use HasFactory;

    public function authorDetail()
    {
        return $this->hasOne(User::class, 'id', 'author');
    }
    public function blogDetail()
    {
        return $this->hasOne(BlogCategory::class, 'id', 'category');
    }
}
