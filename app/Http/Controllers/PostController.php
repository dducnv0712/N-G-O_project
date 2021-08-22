<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function all(){
        $contribution =Contribution::all();
        $posts= Post::all();
        return view("admin.ad_page.posts.list",[
            'posts'=>$posts,
            'contribution' =>$contribution
        ]);

    }
    public function add(){
        $categories= Category::where('active',0)->get();
        return view('admin.ad_page.posts.add',[
            'categories'=>$categories
        ]);
    }
    public function save(Request  $request)
    {
            $image = "";
            if($request->hasFile("image")){
                $file = $request->file("image");
                $fileName = time().$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                $fileSize = $file->getSize();
                if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif"){
                    if($fileSize < 400000000){
                        $file->move("upload/post_image",$fileName);
                        $image = "upload/post_image/".$fileName;
                    }
                }
            }

        //0 = true
        //1 = false
            $approval = 1;
            $author = Auth::id();
            if( Auth::user()->role == 'ADMIN'){
                $approval = 0;
            }
            Post::create([
                "image"=>$image,
                'approval'=>$approval,
                "author"=>$author,
                "title"=>$request->get("title"),
                "description"=>$request->get("desc"),
                "content"=>$request->get("content"),
                "contribute"=>$request->get("donate"),
                "category_id"=>$request->get("category_id"),
            ]);
        if( Auth::user()->role == 'ADMIN'){
            return redirect()->to("admin/posts");
        }else{
            return redirect()->to("/");
        }

    }
    public function edit($id){
        $posts= Post::findOrFail($id);
        $categories= Category::where('active',1)->get();
        return view('admin.ad_page.posts.edit',[
            'categories'=>$categories,
            'posts'=>$posts

        ]);
    }
    public function update(Request  $request,$id)
    {
        $post = Post::findOrFail($id);
        $image = "";
        if($request->hasFile("image")){
            $file = $request->file("image");
            $fileName = time().$file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $fileSize = $file->getSize();
            if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif"){
                if($fileSize < 400000000){
                    $file->move("upload/post_image",$fileName);
                    $image = "upload/post_image/".$fileName;
                }
            }
        }
        if($image == ""){
            $image = $request['image_edit'];
        }

        $post->update([
            "image"=>$image,
            "title"=>$request->get("title"),
            "description"=>$request->get("desc"),
            "content"=>$request->get("content"),
            "contribute"=>$request->get("donate"),
            "category_id"=>$request->get("category_id"),
        ]);
        return redirect()->to("admin/posts");

    }
    public function delete($id){
        $posts= Post::findOrFail($id);
        $posts-> delete();

    }
    public function hidden($id){
        $posts = Post::findOrFail($id);
        $posts->update([
            "active" => 1
        ]);
        return redirect()->to("admin/posts");

    }
    public function appear($id){
        $posts = Post::findOrFail($id);

        $posts-> update([
            "active" => 0
        ]);

        return redirect()->to("admin/posts");

    }
    public function normal($id){
        $posts = Post::findOrFail($id);
        $posts->update([
            "important" => 1
        ]);
        return redirect()->to("admin/posts");

    }
    public function important($id){
        $posts = Post::findOrFail($id);

        $posts-> update([
            "important" => 0
        ]);

        return redirect()->to("admin/posts");

    }
    public function approval($id){
        $posts = Post::findOrFail($id);

        $posts-> update([
            "approval" => 0
        ]);
        return redirect()->to("admin/posts");
    }

}
