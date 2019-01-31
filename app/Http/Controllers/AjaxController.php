<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\ProjectProvider;

class AjaxController extends Controller
{
    public function updatePhotoPosition(Request $request) {
        $positionsArray = $request->positions;
        
        return ProjectProvider::reorderPortfolioPhotos($positionsArray);
        
    }
}
