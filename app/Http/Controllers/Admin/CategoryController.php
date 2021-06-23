<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\DataTables\CategoryDataTable;

class CategoryController extends Controller
{
    function index(){
        $category= Category::all();
    	return view('admin.category.index',compact('category'));
    
}
    function index1(CategoryDataTable $dataTable){
        return $dataTable->render('category');

    }
    
     
    function add(){
    	return view('admin.category.add');
    }
     function insert(Request $request)
    {
    	$category = new Category();
       
    	$category->name=$request->input('name');
    	$category->slug=$request->input('slug');
    	$category->description=$request->input('description');
    	$category->status=$request->input('status') == TRUE ? '1':'0'; 
    	$category->meta_title=$request->input('meta_title');
    	$category->meta_keywords=$request->input('meta_keywords');
    	$category->meta_descrip=$request->input('meta_description');
    	$category->save();
    	return redirect('/categories')->with('status','Category Added Succesfully');
    }
    function edit($id){
        $prodID = Crypt::decrypt($id);
        $category=category::find($prodID);
        return view('admin.category.edit',compact('category'));
    }
    function update(Request $request,$id){
        $category= Category::find($id);
        $category->name=$request->input('name');
        $category->slug=$request->input('slug');
        $category->description=$request->input('description');
        $category->status=$request->input('status') == TRUE ? '1':'0'; 
        $category->meta_title=$request->input('meta_title');
        $category->meta_keywords=$request->input('meta_keywords');
        $category->meta_descrip=$request->input('meta_description');
        $category->update();
        return redirect('/categories')->with('status','category updated Succesfully');

    }
    function delete($id){
         $category= Category::find($id);
          $category->delete();
          return redirect('/categories')->with('status','category deleted Succesfully');

    }

    }

   


