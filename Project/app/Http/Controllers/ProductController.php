<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function add(){
        $r=request();

        $image=$r->file('productImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();

        $addProduct=Product::create([
            'name'=>$r->productName,
            'description'=>$r->productDescription,
            'price'=>$r->productPrice,
            'quantity'=>$r->productQuantity,
            'image'=>$imageName,
            'CategoryID'=>$r->categoryID,
        ]);

        // Session::flash('success',"Product create successfully");

        return redirect()->route('viewProduct')->with('status','Product Added Successfully');
         
      
    }

    public function view() {
        // $viewProduct=Product::all(); // generate SQL select * from product
        $viewProduct=DB::table('products') //DB name
        ->leftjoin('categories','categories.id','=','products.CategoryID')
        ->select('products.*','categories.name as catName')
        ->get();
        return view('admin.showProduct')->with('products',$viewProduct);
    }

    public function edit($id){
        $products=Product::all()->where('id',$id);
        return view('admin.editProduct')->with('products',$products)->with('categoryID',Category::all());

    }

    public function update(){

        $r=request();
        $products=Product::find($r->id);
        if($r->file('productImage')!=''){

        $image=$r->file('productImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        $products->image=$imageName;
        }
            $products->name=$r->productName ;
            $products->description=$r->productDescription;
            $products->price=$r->productPrice;
            $products->quantity=$r->productQuantity;
            $products->CategoryID=$r->CategoryID;
            $products->save();
        

        // Session::flash('success',"Product update successfully");

        return redirect()->route('viewProduct')->with('status','Product Update Successfully');

    }

    public function delete($id){
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        Session::flash('success',"Product delete successfully");

        return redirect()->route('viewProduct');
    }

    public function viewProduct(){

        (new CartController)->cartItem();
        $products=Product::paginate(8);
        return view('viewProducts')->with('products',$products);

    }
    
    public function show(){
   
        $categories=Category::all();
        if (request()->category) {
            $products=DB::table('phones')
            ->select('phones.*')
            ->where('phones.CategoryID','=',request()->category)
            ->paginate(9);


            $categoryNames=DB::table('categories')
            ->select('categories.*')
            ->where('categories.id','=',request()->category)
            ->get();
            
        }else {
            $products=Phone::paginate(9);
            $categoryNames=null;
        }
        
        return view('userShowPhone')->with([
            'products'=>$products,
            'categories'=>$categories,
            'categoryName'=>$categoryNames,
        ]);
        
    }



    public function productdetail($id){
        $products=DB::table('products')
        ->leftjoin('categories','categories.id','=','products.CategoryID')
        ->select('products.*','categories.name as catName')
        ->where('products.id',$id)
        ->get();
        
        
        return view('productDetail')->with('products',$products);
    }
    

    public function searchProduct(){
        $r=request();
        $keyword=$r->keyword;
        $products=DB::table('products')->where('name','like','%'.$keyword.'%')->paginate();
        return view('viewProducts')->with('products',$products);
    }
}
