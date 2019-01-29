<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ProjectProvider;

class AjaxController extends Controller
{
    public function updatePhotoPosition(Request $request) {
        $test = $request->positions;

        ProjectProvider::reorderPortfolioPhotos($test);
        //return dd($test);
    }
}
