<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Validator;
use Illuminate\Support\Facades\Redirect;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorys = Category::get();
        $query = Product::query();

        if ($request->filled('categories_id') && $request->categories_id !== 'all') {
            $query->where('categories_id', $request->categories_id);
        }

        $products = $query->orderBy('id', 'DESC')->paginate(10);

        return view('admin.product.index', compact('products', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('id', 'DESC')->get();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categories_id' => 'required',
            'pname' => 'required',
            'pdetail' => 'required',
            'file' => 'required',
            'feature' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput($request->all())->withErrors($validator);
        }

        $input = $request->all();

        $name = null;
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('productimg', $name);

            $input['file'] = "$name";
        }

        Product::create($input);

        return redirect('admin/product')->with('success', "Add Record Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::orderBy('id', 'DESC')->get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'categories_id' => 'required',
            'pname' => 'required',
            'pdetail' => 'required',
            'feature' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $product = Product::findOrFail($id);

        $input = $request->all();

        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('productimg', $name);

            $input['file'] = "$name";

            if ($product->file == "/productimg/") {
            } else {
                if (file_exists(public_path() . $product->file)) {
                    unlink(public_path() . $product->file);
                }
            }
        }

        $product->update($input);

        return  redirect('/admin/product')->with('success', "Update Record Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->file == '/productimg/') {
        } else {

            if (file_exists(public_path() . $product->file)) // make sure it exits inside the folder
            {
                unlink(public_path() . $product->file);
            }
        }
        $product->delete();

        return  Redirect::back()->with('success', "Deleted Record Successfully");
    }

    public function statusUpdate(Request $request)
    {
        $product = Product::findOrFail($request->id);

        if ($product) {
            $product->is_active = !$product->is_active; // Toggle the status
            $product->save();

            return response()->json([
                'success' => true,
                'status' => $product->is_active ? 'Show' : 'Hide'
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Id not found!']);
    }
}
