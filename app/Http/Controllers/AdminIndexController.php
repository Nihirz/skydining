<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promocode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminIndexController extends Controller
{
    public function logout(Request $request) {
        if(Auth::guard('admin')->check()) // this means that the admin was logged in.
        {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
        $this->guard()->logout();
        $request->session()->invalidate();
        
        return $this->loggedOut($request) ?: redirect('/');
    }
    public function userTable()
    {
        $user = User::paginate(10);
        return view('admin.usertable',compact('user'));
    }
    public function userView($id)
    {
        $user = User::where('id',$id)->get();
        return view('admin.userdetail',compact('user'));
    }
    public function product()
    {
        $products = Product::get();
        return view('admin.product',compact('products'));
    }
    public function storeProduct(Request $request)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        Product::create($input);
     
        return redirect()->back()
                        ->with('success','Product created successfully.');
    }
    public function editProduct($id)
    {
        $product =  Product::where('id',$id)->first();
        return view('admin.editProduct',compact('product'));
    }
    public function updateProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->name =$request->name;
        $product->description =$request->description;
        $product->price =$request->price;
        $product->gst=$request->gst;
        $product->type=$request->type;
        
        // if($request->hasfile('image'))
        // {
        //     $file = $request->file('image');
        //     $imageName = time().'.'.$request->image->getClientOriginalExtension();
        //     $request->image->move(public_path('/uploads'), $imageName);
        //     $product->image = $imageName;
        // }
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $product    ['image'] = "$profileImage";
        }
        else
        {
            $id = $request->id;
            $update = [  
            'name'=>$request->name,
           'description'=>$request->description,
           'price'=>$request->price,
           'gst'=>$request->gst,
           'type'=>$request->type,
           
     ];
     $file   = $request->file("image");
        if ($request->hasfile("image")) {
        $file->move("/upload", $file->getClientOriginalName());
        $update['image'] = $file->getClientOriginalName();
        }
    
        Product::where('id', $id)->update($update);
        return redirect()->route('admin.product.view')->with('success', 'Product Updated Successfully!');
    
    
            return $request;
            $product->image = '';
        }
        $product->save();
        return redirect()->route('admin.product.view')->with('success', 'Product Updated Successfully!');
       }
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        return redirect()->back()
                        ->with('success','Product deleted successfully');
    }
    public function promocodeview()
    {
        $promocode = Promocode::get();
        return view('admin.promocode',compact('promocode'));
    }
    public function storepromocode(Request $request)
    {
        $input = $request->all();
        Promocode::create($input);
        return redirect()->back()->with('success','Promocode added successfully');
    }
    public function destroyCode($id)
    {
        Promocode::where('id',$id)->delete();
        return redirect()->back()
                        ->with('success','Product deleted successfully');
    }
    public function promocodeedit($id)
    {
        $promocode = Promocode::where('id',$id)->first();
        return view('admin.editpromocode',compact('promocode'));
    }
    public function updatePromocode(Request $request)
    {
        $id=$request->id;
        $code= Promocode::find($id);
        $code->name=$request->name;
        $code->discount=$request->discount;
        $code->save();
        return redirect()->route('admin.promocode')->with('success','Promocode updated successfully');
    }

}
