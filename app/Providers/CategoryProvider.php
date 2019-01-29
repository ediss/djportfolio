<?php

namespace App\Providers;
use App\Models\Category;

class CategoryProvider {

    public static function getCategories() {
        return Category::all();
    }
}
