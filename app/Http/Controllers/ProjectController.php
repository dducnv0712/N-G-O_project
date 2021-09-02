<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function all(){
        $contribution =Contribution::all();
        $posts= Project::all();
        $find_important = Project::where('important',0)->get();
        // dd($find_important->title);
        return view("admin.ad_page.projects.list",[
            'projects'=>$posts,
            'contribution' =>$contribution,
            'find_important' => $find_important
        ]);

    }
    public function add(){
        $categories= Category::where('active',0)->get();
        return view('admin.ad_page.projects.add',[
            'categories'=>$categories
        ]);
    }


    public function save(Request  $request)
    {
//            $image = '';
//            if($request->hasFile("image")){
//                $file = $request->file("image");
//                $fileName = time().$file->getClientOriginalName();
//                $ext = $file->getClientOriginalExtension();
//                $fileSize = $file->getSize();
//                if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif"){
//                    if($fileSize < 1000000){
//                        $file->move("upload/post_image",$fileName);
//                        $image = "upload/post_image/".$fileName;
//                    }
//                }
//            }
//       if($image == ''){
//           $image = $request['image-url'];
//       }
        //0 = true
        //1 = false
            $approval = 1;
            $author = Auth::id();
            if( Auth::user()->role == 'ADMIN'){
                $approval = 0;
            }
            Project::create([
                "image"=>$request->get("image"),
                'approval'=>$approval,
                "author"=>$author,
                "title"=>$request->get("title"),
                "description"=>$request->get("desc"),
                "content"=>$request->get("content"),
                "contribute"=>$request->get("donate"),
                "category_id"=>$request->get("category_id"),
            ]);
        if( Auth::user()->role == 'ADMIN'){
            return redirect()->to("admin/projects");
        }else{
            return redirect()->to("/");
        }

    }
    public function edit($id){
        $posts= Project::findOrFail($id);
        $categories= Category::where('active',1)->get();
        return view('admin.ad_page.projects.edit',[
            'categories'=>$categories,
            'projects'=>$posts

        ]);
    }
    public function update(Request  $request,$id)
    {
        $post = Project::findOrFail($id);
//        $image = "";
//        if($request->hasFile("image")){
//            $file = $request->file("image");
//            $fileName = time().$file->getClientOriginalName();
//            $ext = $file->getClientOriginalExtension();
//            $fileSize = $file->getSize();
//            if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif"){
//                if($fileSize < 400000000){
//                    $file->move("upload/post_image",$fileName);
//                    $image = "upload/post_image/".$fileName;
//                }
//            }
//        }
//        if($image == ''){
//            $image = $request['image-url'];
//        }

        $post->update([
            "image"=>$request->get("image"),
            "title"=>$request->get("title"),
            "description"=>$request->get("desc"),
            "content"=>$request->get("content"),
            "contribute"=>$request->get("donate"),
            "category_id"=>$request->get("category_id"),
        ]);
        return redirect()->to("admin/projects");

    }
    public function delete($id){
        $posts= Project::findOrFail($id);
        $posts-> delete();

    }

    public function active($id){
        $posts = Project::findOrFail($id);
        if($posts->active == 0){
            $posts-> update([
                "active" => 1
            ]);
        }else{
            $posts-> update([
                "active" => 0
            ]);
        }


        return redirect()->to("admin/projects");

    }
    // public function normal($id){
    //     $projects = Project::findOrFail($id);
    //     $projects->update([
    //         "important" => 1
    //     ]);
    //     return redirect()->to("admin/projects");

    // }
    public function important($id){
        $posts = Project::findOrFail($id);
        $find_important = Project::where('important',0)->get();

            if($posts->important == 0){
                $posts-> update([
                    "important" => 1
                ]);
            }else{
                $posts-> update([
                    "important" => 0
                ]);

                foreach($find_important as $find_item){
                    $find_item -> update([
                        'important' => 1
                    ]);
                }
            }
            return redirect()->to("admin/projects");
    }









    public function approval($id){
        $posts = Project::findOrFail($id);

        $posts-> update([
            "approval" => 0
        ]);
        return redirect()->to("admin/projects");
    }

}
