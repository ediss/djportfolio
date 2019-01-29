<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\CategoryProvider;
use App\Providers\ProjectProvider;

class ProjectController extends Controller
{
    public function index($projects = null) {
        $data = [
            'categories'    => CategoryProvider::getCategories(),
            'projects'      => ProjectProvider::getProjectsWhere($projects),
        ];
        return view('pages.projects', $data);
    }


}
