<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Project;

class ProjectProvider extends ServiceProvider
{
    public static function getProjectsWhere($project) {
        return ($project === null) ? Project::orderBy('position', 'asc')->get() : Project::where('category_id', '=', $project)->orderBy('position', 'desc')->get();
    }

    public static function uploadPhoto($path, $category_id) {
        $photo = new Project;

        $photo->img_url         = $path;
        $photo->category_id     = $category_id;

        $photo->save();

    }

    public static function reorderPortfolioPhotos($photos_position) {


        foreach($photos_position as $project_id => $position) {

            Project::where('id_project', '=', $project_id)->update(['position' => $position]);


        }

    }
}
