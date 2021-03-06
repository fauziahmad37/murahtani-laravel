<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use App\Models\Inventory;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $title = '';

        return view('dashboard.products.index', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // "posts" => Product::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString()
            "posts" => Product::all()
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create', [
            "title" => "Create Post",
            "active" => 'posts', 
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|unique:products|max:255',
            'code' => 'required|unique:products|max:255',
            'image' => 'image|file|max:2048',
            'image2' => 'image|file|max:2048',
            'image3' => 'image|file|max:2048',
            'description' => 'required',
            'category_id' => 'required'
        ]);
       
        if($request->file('image') || $request->file('image2')){
            $validatedData['image_1'] = $request->file('image')->store('products');
            $validatedData['image_2'] = $request->file('image2')->store('products');
            $validatedData['image_3'] = $request->file('image3')->store('products');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['description'] = Str::limit(strip_tags($request->description), 200);

        $insert_id = Product::create($validatedData)->id;

        Inventory::create([
            'product_id' => $insert_id,
            'quantity' => 0
        ]);

        return redirect('/dashboard/posts')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.name as category_name')
            ->where('products.id', $post)->first();
        
        return view('dashboard.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.products.edit', [
            "title" => "Edit Post",
            "active" => 'posts', 
            "post" => Product::where('id', $id)->first(),
            "categories" => Category::all()
        ]);
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
        $rules = [
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'image2' => 'image|file|max:2048',
            'image3' => 'image|file|max:2048',
            'description' => 'required',
            'category_id' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image_1')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image_1'] = $request->file('image_1')->store('products');
        }

        if($request->file('image_2')){
            if($request->oldImage2){
                Storage::delete($request->oldImage2);
            }
            $validatedData['image_2'] = $request->file('image_2')->store('products');
        }

        if($request->file('image_3')){
            if($request->oldImage3){
                Storage::delete($request->oldImage3);
            }
            $validatedData['image_3'] = $request->file('image_3')->store('products');
        }

        Product::where('id', $id)->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $post)
    {
        if($post->image_1 || $post->image_2 || $post->image_3){
            Storage::delete($post->image_1);
            Storage::delete($post->image_2);
            Storage::delete($post->image_3);
        }
        Product::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }
}
