<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function all(Request $request){
        $posts= Post::all();
        return view("admin.ad_page.posts.list",[
            'posts'=>$posts
        ]);

    }
    public function add(){
        $categories= Category::where('active',1)->get();
        return view('admin.ad_page.posts.add',[
            'categories'=>$categories
        ]);
    }
    public function save(Request  $request)
    {
            $image = "";
            if($request->hasFile("image")){
                $file = $request->file("image");// tạo 1 đối tượng file
                $fileName = time().$file->getClientOriginalName(); // lấy tên file gốc (tên khi up lên)  vis du: ngoctrinh.png
                $ext = $file->getClientOriginalExtension();// lấy loại file ( ví dụ png jpg..)
                $fileSize = $file->getSize();// dùng để giới hạn kích thước têp up lên nếu cần (tính bằng Byte)
                if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif"){ // chỉ cho upload những file dạng này
                    if($fileSize < 400000000){
                        $file->move("upload/post_image",$fileName);
                        $image = "upload/post_image/".$fileName;
                    }
                }
            }
            $author = Auth::id();


            Post::create([
                "image"=>$image,
                "author"=>$author,
                "title"=>$request->get("title"),
                "description"=>$request->get("desc"),
                "contribute"=>$request->get("donate"),
                "category_id"=>$request->get("category_id"),
            ]);
            return redirect()->to("admin/posts");

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
            $file = $request->file("image");// tạo 1 đối tượng file
            $fileName = time().$file->getClientOriginalName(); // lấy tên file gốc (tên khi up lên)  vis du: ngoctrinh.png
            $ext = $file->getClientOriginalExtension();// lấy loại file ( ví dụ png jpg..)
            $fileSize = $file->getSize();// dùng để giới hạn kích thước têp up lên nếu cần (tính bằng Byte)
            if($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif"){ // chỉ cho upload những file dạng này
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
            "contribute"=>$request->get("donate"),
            "category_id"=>$request->get("category_id"),
        ]);
        return redirect()->to("admin/posts");

    }
    public function delete($id){
        $posts= Post::findOrFail($id);
        $posts-> delete();
        return redirect()->to("admin/posts");

    }
    public function hidden($id){
        $posts = Post::findOrFail($id);
        $posts->update([
            "active" => 0
        ]);
        return redirect()->to("admin/posts");

    }
    public function appear($id){
        $posts = Post::findOrFail($id);

        $posts-> update([
            "active" => 1
        ]);

        return redirect()->to("admin/posts");

    }
    public function normal($id){
        $posts = Post::findOrFail($id);
        $posts->update([
            "important" => 0
        ]);
        return redirect()->to("admin/posts");

    }
    public function important($id){
        $posts = Post::findOrFail($id);

        $posts-> update([
            "important" => 1
        ]);

        return redirect()->to("admin/posts");

    }

}
