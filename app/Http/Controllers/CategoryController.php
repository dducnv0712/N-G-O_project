<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(){
        $categories = Category::withCount(["Project","Gallery"])->get();

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
            $categories->delete();
    }


    public function active($id){
        $category = Category::findOrFail($id);

        if($category->active == 0){
            $category-> update([
                "active" => 1
            ]);
        }else{
            $category-> update([
                "active" => 0
            ]);
        }

        return redirect()->to("admin/category");

    }

}
