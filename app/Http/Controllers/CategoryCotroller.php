<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategoryCotroller extends Controller
{
    

public function show(){

    $cats=Category::paginate(4);
   
    return view('category.CategoryPage' , compact('cats'));
}

public function store(Request $request)
{
    $request->validate(['cat_name' => 'required|string|unique:categories|min:3|max:40',]);

    Category::insert([
        'cat_name' => $request->cat_name ,
        'created_at'=>Carbon::now()
     ]);
          
    return back()->with('message', 'تم إضافة صنف جديد!');
}


public function delete($id)
{
    Category::find($id)->delete();
    return redirect()->route('cat.show')->with('message', 'تم حذف الصنف بنجاح!');
}


public function update(Request $request)
{
    $request->validate([
        'cat_name' => 'required|string|unique:categories|min:3|max:40',

    ]);

    $id=$request->id;
    Category::findOrFail($id)->update([
        'cat_name' => $request->cat_name,
    ]);
    return redirect()->route('cat.show')->with('message', 'تم تعديل الصنف بنجاح!');
// end else
}






}
