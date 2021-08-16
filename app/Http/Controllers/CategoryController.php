<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(){
        $categories = Category::all();
        return view("admin.ad_page.category.cate_list",[
            "categories" => $categories
        ]);
    }
    public function save(Request $request){
            Category::create([
                "name"=>$request->get("name"),
            ]);
//        $data = $request->all();
//        print_r($data);
    }
    public function edit($id){
        $categories = Category::findOrFail($id);
        return view("admin/categories",[
            "categories"=>$categories
        ]);
    }

    public function update(Request $request,$id){
        $categories = Category::findOrFail($id);

        try {
            $categories->update([
                "name"=>$request->get("name"),

            ]);
            return redirect()->to("admin/category");
        }catch (\Exception $e){
            abort(404);
        }
    }

    public function delete($id){
        $categories = Category::findOrFail($id);
        try{
            $categories->delete();
            return redirect()->to("admin/category");
        }catch (\Exception $e){
            abort(404);
        }
    }
     public function hidden($id){
        $category = Category::findOrFail($id);
        $category -> update([
            "active" => 0
        ]);
        return redirect()->to("admin/category");

    }
    public function appear($id){
        $category = Category::findOrFail($id);

        $category -> update([
            "active" => 1
        ]);

        return redirect()->to("admin/category");

    }

}
