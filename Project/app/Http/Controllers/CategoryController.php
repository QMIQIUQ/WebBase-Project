<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function add(){
        $r=request();
        $addCategory=Category::create([
            'name'=>$r->categoryName,
        ]);

        return redirect()->route('viewCategory')->with('status','Category Added Successfully');

        // return view('addCategory');
    }

    public function view() {
        $viewCategory=Category::all(); // generate SQL select * from category
        return view('admin.showCategory')->with('categories',$viewCategory);
    }


    public function edit($id){
        $editCategory=Category::all()->where('id',$id);
        return view('admin.editCategory')->with('categories',$editCategory);

    }

    public function update(){

        $r=request();
        $category=Category::find($r->id);
        
            $category->name=$r->categoryName ;
            $category->save();
        

        // Session::flash('success',"Category update successfully");

        return redirect()->route('viewCategory')->with('status','Category update Successfully');

    }
}
