<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('inventaris.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'spec_barang' => 'required',
            'kategori_barang' => 'required',
            'jumlah_barang' => 'required',
            'kondisi_barang' => 'required',
            'id_supplier' => 'required',
            'sumberdana' => 'required',
            'tgl_msk' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // $input = $request->all();
        $fileName = time().'.'.$request->images->extension();
        $request->images->storeAs('public/images/',$fileName);
  
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }
    
        // Product::create($input);
        $product = new Product;
        // $product->id_supplier = $request->input('id_supplier');
        $product->kode_barang = $request->input('kode_barang');
        $product->nama_barang = $request->input('nama_barang');
        $product->spec_barang = $request->input('spec_barang');
        $product->kategori_barang = $request->input('kategori_barang');
        $product->jumlah_barang = $request->input('jumlah_barang');
        $product->kondisi_barang = $request->input('kondisi_barang');
        $product->id_supplier = $request->input('id_supplier');
        $product->sumberdana = $request->input('sumberdana');
        $product->tgl_msk = $request->input('tgl_msk');
        $product->images = $fileName;
        $product->save();
     
        return redirect()->route('admin.invent')
                        ->with('success','Product created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('inventaris.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('inventaris.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'spec_barang' => 'required',
            'jumlah_barang' => 'required',
            'kondisi_barang' => 'required',
            'id_supplier' => 'required',
            'sumberdana' => 'required',
            'tgl_msk' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($request->hasFile('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $request->file("images")->getClientOriginalExtension();
            $request->file("images")->storeAs($destinationPath, $profileImage, "public");
            $input['images'] = $profileImage;
            // dd($input);
        }else{
            unset($input['images']);
        }

        $product->update($input);
    
        return redirect()->route('admin.invent')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.invent')
                        ->with('success','Product deleted successfully');
    }
}
