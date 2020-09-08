<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Auth;
use Session;

class ImageController extends Controller
{
    public function post(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);
        $images = $request->image;
        foreach ($images as $image) {
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('images', $image_new_name);
            $post = new Image;
            $post->user_id = Auth::user()->id;
            $post->image = 'images/'.$image_new_name;
            $post->save();
        }
        Session::flash('success','Image(s) Uploaded');
        return redirect('/pics');
    }
    public function index()
    {
        return view('upload');
    }
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();

        return redirect('/pics');
    }
}
