<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\CategoryProvider;
use App\Providers\ProjectProvider;
use Session;

class AdminController extends Controller
{
    public function index() {
        return view('pages.admin.test');
    }

    public function insertPhoto() {
        return view('pages.admin.add_photos', ['categories' =>  CategoryProvider::getCategories() ]);
    }

    public function photoUpload(Request $request) {

        if ($request->hasFile('new_image')) {
            $image              = $request->file('new_image');
            $name               = time().'.'.$image->getClientOriginalExtension();
            $path               = $image ? $image->move('images/portfolio/', $name) : null;

            $category = $request->input('categories');

            ProjectProvider::uploadPhoto($path, $category);

            Session::flash('success', 'Đole, uspešno si dodao sliku! Svaka čast!');

            return redirect('/admin/unos-fotografije');
        }
        else {
            //redirect sa errorom!
            echo "greska!";
        }
    }

    public function getPhotos($projects = null) {

        return view('pages.admin.photos', ['projects' => ProjectProvider::getProjectsWhere($projects)]);
    }
}
