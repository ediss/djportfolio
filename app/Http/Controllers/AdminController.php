<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\CategoryProvider;
use App\Providers\ProjectProvider;
use Session;

class AdminController extends Controller
{
   
    /**
     * 
     * return view with form for upload
     * 
     */
    public function insertProject() {
        $data = [
            'categories' =>  CategoryProvider::getCategories(),
            'projects'   =>  ProjectProvider::getProjectsWhere($category_id = null)
        ];
        return view('pages.admin.add_photos', $data);
    }

    /**
     * 
     * Uploading projects(photos)
     * 
     */
    public function projectUpload(Request $request) {

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


    public function uploadProjectPhotos(Request $request) {

        if ($request->hasFile('photos')) {

            $photos = $request->file('photos');

            foreach($photos as $photo) {

                //$image              = $request->file('photos');
                
                $name               = str_random(5)."-".date('his')."-".str_random(3).".".$photo->getClientOriginalExtension();
                $photo->move('images/portfolio/', $name);
                

                $destinationPath = 'images/portfolio'.'/'.$name;
    
                $project_id = $request->input('projects');

    
                ProjectProvider::uploadProjectPhotos($destinationPath, $project_id);
    
                Session::flash('success', 'Đole, uspešno si dodelio slike projektu! Svaka čast!');
    
               
            }
            return redirect('/admin/unos-fotografije');
        }

    }

    public function getPhotos($projects = null) {

        return view('pages.admin.photos', ['projects' => ProjectProvider::getProjectsWhere($projects)]);
    }
}
