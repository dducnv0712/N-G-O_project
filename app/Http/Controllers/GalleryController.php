<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    //user website
    public function gallery(){
        $gallery = Gallery::where('active',0)->get();
        return view('pages.gallery',[
            'gallery' => $gallery
        ]);
    }

    //admin
    public function all(){
        $gallery = Gallery::all();
        return view('admin.ad_page.gallery.list',[
            'gallery'=>$gallery
        ]);
    }

    public function save(Request $request){

        $author = Auth::id();
           Gallery::create([
               'title'=>$request->get('title'),
               'image'=>$request->get('image'),
               'author'=>$author

           ]);
        if( Auth::user()->role == 'ADMIN'){
            return redirect()->to("admin/gallery");
        }else{
            return redirect()->to("/volunteer-dashboard/gallery");
        }



    }
    public function update(Request $request,$id){
        $gallery = Gallery::findOrFail($id);
        $gallery->update([
            'title'=>$request->get('title'),
            'image'=>$request->get('image')
        ]);
        if( Auth::user()->role == 'ADMIN'){
            return redirect()->to("admin/gallery");
        }else{
            return redirect()->to("/volunteer-dashboard/gallery");
        }

    }
    public function delete($id){
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();


    }
    public function active($id){
        $gallery = Gallery::findOrFail($id);
        if($gallery->active == 0){
            $gallery-> update([
                "active" => 1
            ]);
        }else {
            $gallery->update([
                "active" => 0
            ]);

        }
        if( Auth::user()->role == 'ADMIN'){
            return redirect()->to("admin/gallery");
        }else{
            return redirect()->to("/volunteer-dashboard/gallery");
        }    }


}
