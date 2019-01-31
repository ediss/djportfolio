<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Project;
use App\Models\PhotosOfProject;

class ProjectProvider extends ServiceProvider
{
    /**
     * 
     * Function for retriving projects per category
     * 
     * if $project = null then load all projects
     * 
     * else load only that projects which belong to category
     * 
     * 
     */
    public static function getProjectsWhere($category_id) {
        return ($category_id === null) ? Project::orderBy('position', 'asc')->get() : Project::where('category_id', '=', $category_id)->orderBy('position', 'desc')->get();
    }

    /**
     * 
     * Uploading projects into database
     * 
     */
    public static function uploadPhoto($path, $category_id) {
        $photo = new Project;

        $photo->img_url         = $path;
        $photo->category_id     = $category_id;

        $photo->save();

    }

    /**
     * 
     * Function which provide admin user to change the order 
     * of projects
     * 
     */

    public static function reorderPortfolioPhotos($photos_position) {

        foreach($photos_position as $project_id => $position) {
            Project::where('id_project', '=', $project_id)->update(['position' => $position]);
        }

    }

    public static function uploadProjectPhotos($path, $project_id) {
        
        $photo = new PhotosOfProject;

        $photo->img_url     = $path;
        $photo->project_id  = $project_id;

        $photo->save();

    }

    public static function getSingleProject($id_project) {
        return PhotosOfProject::where('project_id', '=', $id_project)->get();
    }
}
