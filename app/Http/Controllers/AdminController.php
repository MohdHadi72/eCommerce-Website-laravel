<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_catagory()
    {
        $data = catagory::all();
        return view('admin.catagory', compact('data'));
    }
    public function addCatagory(Request $req)
    {
        $data = new catagory;

        $data->catagory_name = $req->catagoryname;

        $data->save();

        return redirect()->back()->with('message', 'catagory Add SuccessFull');
    }

    public function delete($id)
    {
        $data = catagory::find($id);
        $data->delete();
        return redirect()->back()->with('messageDelete', 'Catagory Delete SuccessFull');
    }

    public function product()
    {
        $catagory = catagory::all();
        return view('admin.product', compact('catagory'));
    }
    public function addProduct(Request $req)
    {
        $product = new Product;

        $product->title = $req->title;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->discount = $req->discount;
        $product->catagory = $req->catagory;
        $image = $req->file('image');

        if ($image) {
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image->move(public_path('productimage'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->back()->with('productAdd', 'Product Add Success Full');
    }

    public function ShowProduct()
    {
        $product = product::all();
        return view('admin.ShowProduct', compact('product'));
    }

    public function deleteproduct($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('messageDeleteProduct', 'Product Delete SuccessFull');
    }

    public function Editproduct($id)
    {
        $product = product::find($id);

        $catagory  = catagory::all();


        return view('admin.EditProduct', compact('product', 'catagory'));
    }

    public function updateproduct(Request $req, $id)
    {
        $product = Product::find($id);

        $product->title = $req->title;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->discount = $req->discount;
        $product->category = $req->category;

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('productimage'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->back()->with('updatemessage', 'Your data has been successfully updated');
    }
}
