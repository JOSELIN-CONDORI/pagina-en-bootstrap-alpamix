<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories','brands'));

    }
    public function store(ProductFormRequest $request){

        $validatedData= $request->validated();
        $category= Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' => Str::slug($validatedData['slug']),
            'brand' => $validatedData['brand'],
            'description' => $validatedData['description'],
            'status' => $request->status == true ? '1' : '0',
        ]);

        if($request->hasFile('image')){
        $uploadPath ='uploads/products/';
        $i=1;
        foreach($request->file('image') as $imageFile) {
            $extention = $imageFile->getClientOriginalExtension();
            $filename = time().$i++.'.'.$extention;
            $imageFile->move($uploadPath,$filename);
            $finalImagePathName = $uploadPath.$filename;

            $product->productImages()->create([
                'product_id' => $product->id,
                'image' => $finalImagePathName,

            ]);
        }

        }



        return redirect('admin/products')->with('message','Producto Creado Correctamente');
    }

    public function edit(int $product_id)
    {
        $categories = Category::all();
        $brands = Brand::all();
    $product = Product::findOrFail($product_id);
    return view('admin.products.edit', compact('categories', 'brands', 'product'));
    }


    public function update(ProductFormRequest $request, int $product_id){

        $validatedData = $request->validated();

        $product = Category::findOrFail($validatedData['category_id'])
                    ->products()->where('id', $product_id)->first();
        if($product)
        {
            $product->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'slug' => Str::slug($validatedData['slug']),
                'brand' => $validatedData['brand'],
                'description' => $validatedData['description'],
                'status' => $request->status == true ? '1' : '0',
            ]);

            if($request->hasFile('image')){
                $uploadPath ='uploads/products/';
                $i=1;
                foreach($request->file('image') as $imageFile) {
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extention;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName = $uploadPath.$filename;

                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => $finalImagePathName,

                    ]);
                }

                }



                return redirect('/admin/products')->with('message','Producto Editado Correctamente');

        }
        else
        {
            return redirect('admin/products')->with('message','No se puedo editar');
        }
    }

    public function destroyImage(int $Product_image_id){

        $productImage = ProductImage::findOrFail($Product_image_id);
        if(File::exists($productImage->image)){
        File::delete($productImage->image);


        }
        $productImage->delete();
        return redirect()->back()->with('message','Imagen Eliminada Correctamente');
    }

    public function destroy(int $product_id){

        $product = Product::findOrFail($product_id);
        if($product->productImages){
            foreach($product->productImages as $image){
             if(File::exists($image->image)){
                File::delete($image->image);
             }
            }
        }
        $product->delete();
        return redirect()->back()->with('message','Producto Eliminado correctamente');
    }
}
