<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('welcome', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $img_file_name = NULL;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $img_file_name = 'product-image-' . '-' . time() . '.' . $file->extension();
            $file->move(public_path() . '/storage/product-images/', $img_file_name);
        }

        $productData = [
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'sku' => $request->sku,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => env('APP_URL') . 'storage/product-images/' . $img_file_name,
        ];
        $createProduct = Product::create($productData);
        if ($createProduct) {
            Session::flash('status', 'Product Added Successfully!');
            return redirect('/home');
        } else {
            Session::flash('status', 'Something wents wrong!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 0)
    {
        $product = Product::find($id);
        return view('viewProduct', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 0)
    {
        $product = Product::find($id);
        return view('editProduct', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = 0)
    {
        $request->validate([
            'name' => 'required|max:255',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $product = Product::find($id);
        try {
            $img_file_name = NULL;
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $img_file_name = 'product-image-' . '-' . time() . '.' . $file->extension();
                $file->move(public_path() . '/storage/product-images/', $img_file_name);
            }
            $productData = [
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'sku' => $request->sku,
                'description' => $request->description,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'image' => $img_file_name ? env('APP_URL') . 'storage/product-images/' . $img_file_name : $product->image,
            ];
            $updateProduct = $product->update($productData);
            if ($updateProduct) {
                Session::flash('status', 'Product Updated Successfully!');
                return redirect('/home');
            } else {
                Session::flash('status', 'Something wents wrong!');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Session::flash('status', 'Something wents wrong!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = 0)
    {
        $product = Product::find($id);
        try {
            $product->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Deleted Successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 201,
                'message' => 'Something went wrong!'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buyProduct(Request $request, $id = 0)
    {
        $product = Product::find($id);
        try {
            $quantity = $product->quantity - 1;
            $updateProduct = $product->update(['quantity' => $quantity]);
            if ($updateProduct) {
                Session::flash('status', 'Buy Product Successfully!');
                return redirect()->back();
            } else {
                Session::flash('status', 'Something wents wrong!');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            Session::flash('status', 'Something wents wrong!');
            return redirect()->back();
        }
    }
}
