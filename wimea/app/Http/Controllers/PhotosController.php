<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //
    public function index(){
        return view("Uploads.photos");
    }
}
