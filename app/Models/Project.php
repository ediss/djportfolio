<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    protected $primaryKey = 'id_project';

    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id_category');
    }

}
