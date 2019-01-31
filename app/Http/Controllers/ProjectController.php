<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\CategoryProvider;
use App\Providers\ProjectProvider;

class ProjectController extends Controller
{

    /**
     * 
     * Index function
     * 
     * get categories and projects from providers(services)
     * 
     * return to view
     * 
     */
    public function index($category_id = null) {
        $data = [
            'categories'    => CategoryProvider::getCategories(),
            'projects'      => ProjectProvider::getProjectsWhere($category_id),
        ];
      
        return view('pages.projects', $data);
    }

    public function getSingleProject($id_project) {
        $data = [
            'categories'    => CategoryProvider::getCategories(),
            'projects' => ProjectProvider::getSingleProject($id_project)
        ];
        return view ('pages.project', $data);
    }


}
