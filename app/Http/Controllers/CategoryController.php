<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(){
        $categories = Category::all();
        return view("admin.ad_page.category.cate_list",[
            "categories" => $categories
        ]);
    }
    //Thêm Category
    public function save(Request $request){
        try {
            Category::create([
                "name"=>$request->get("name"),
            ]);
            return redirect()->to("admin/category");
        }catch (\Exception $e){
            abort(404);
        }
    }
    //Sửa
//    public function edit($id){
//        $categories = Category::findOrFail($id);
//        return view("categories.edit",[
//            "categories"=>$categories
//        ]);
//    }

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

}
