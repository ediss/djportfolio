<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public $timestamps = false;

    protected $table = 'categories';

    protected $primaryKey = 'id_category';


    public function project() {
        return $this->hasMany('App\Models\Project');
    }
}
