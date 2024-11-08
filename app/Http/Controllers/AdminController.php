<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cats;
use App\Models\tostr;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }

    
    public function view_category()
    {
        $data=Cats::all();
        return view('admin.category',compact('data'));
    }
    public function delete_category($id)
    {
        $data=Cats::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function edit_category($id)
    {
        $data=Cats::find($id);
        
        return view('admin.edit_category',compact('data'));

    }

    public function add_category(Request $request)
    {
        $c= new Cats();
        $c->category_name= $request->category;
        $c->save();
        //tostr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');
        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function update_category(Request $request,$id)
    {
        $data=Cats::find($id);
        $data->category_name= $request->category;
        $data->save();
        //tostr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');
        return back()->with('message', 'This is the success message.');

    }
       
    public function add_product(Request $request)
    {
        
        $p= new Product();
        $p->name= $request->product_name;
        $p->description= $request->descriptions;
        $p->price= $request->prices;
        $p->quantity= $request->quantities;
        $p->save();
        //tostr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');
        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function view_product()
    {
        $data=Product::all();
        return view('admin.add_product',compact('data'));
    }

}
 