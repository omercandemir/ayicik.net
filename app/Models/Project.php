<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectCategory;
use App\Models\User;

class Project extends Model
{
    use HasFactory;
    public function projectCategory()
    {
        return $this->hasOne(ProjectCategory::class, 'id', 'category');
    }
    public function authorDetail()
    {
        return $this->hasOne(User::class, 'id', 'author');
    }
}
