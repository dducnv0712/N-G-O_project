<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;

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
       Gallery::create([
           'title'=>$request->get('title'),
           'image'=>$request->get('image')
       ]);
        return redirect()->to("admin/gallery");


    }
    public function update(Request $request,$id){
        $gallery = Gallery::findOrFail($id);
        $gallery->update([
            'title'=>$request->get('title'),
            'image'=>$request->get('image')
        ]);
        return redirect()->to("admin/gallery");


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
        return redirect()->to("admin/gallery");
    }


}
