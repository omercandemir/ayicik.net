<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectCategory;

class Project extends Model
{
    use HasFactory;
    public function projectCategory()
    {
        return $this->hasOne(ProjectCategory::class, 'id', 'category');
    }
}
