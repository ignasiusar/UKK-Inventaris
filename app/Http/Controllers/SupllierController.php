<?php
  
namespace App\Http\Controllers;
  
use App\Models\Supplier;
use Illuminate\Http\Request;
  
class SupllierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::latest()->paginate(5);
    
        return view('supplier.index', compact('supplier'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::latest()->paginate(5);

        return view('supplier.create',compact('supplier'));
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
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat_supplier' => 'required',
            'telp_supplier' => 'required',
            'kota_supplier' => 'required',
        ]);
      
        Supplier::create($request->all());
       
        return redirect()->route('supplier.index')
                        ->with('success','Product created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('supplier.show',compact('supplier'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit',compact('supplier'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'id_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat_supplier' => 'required',
            'telp_supplier' => 'required',
            'kota_supplier' => 'required',
        ]);
      
        $supplier->update($request->all());
      
        return redirect()->route('supplier.index')
                        ->with('success','Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
       
        return redirect()->route('supplier.index')
                        ->with('success','Product deleted successfully');
    }
}