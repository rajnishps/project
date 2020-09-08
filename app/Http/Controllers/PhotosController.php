<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class PhotosController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('pics')->with('images', $images);
    }
}
