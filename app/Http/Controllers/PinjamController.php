<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjams = Pinjam::latest()->paginate(5);
      
        return view('pinjams.index',compact('pinjams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pinjams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jml_pinjam' => 'required',
            'nama_peminjam' => 'required',
            'tgl_kembali' => 'required',
            'keterangan' => 'required',
        ]);
      
        Pinjam::create($request->all());
        return redirect()->route('pinjams.index')
                        ->with('success','Data Pinjam created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pinjam $pinjams)
    {
        return view('pinjams.show',compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjams)
    {
        return view('pinjams.edit',compact('pinjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pinjam $pinjams)
    {
        $request->validate([
            'no_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jml_pinjam' => 'required',
            'nama_peminjam' => 'required',
            'tgl_kembali' => 'required',
            'keterangan' => 'required',
        ]);
      
        $pinjams->update($request->all());
      
        return redirect()->route('pinjams.index')
                        ->with('success','Data Pinjam updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pinjam $pinjams)
    {
        
        return redirect()->route('pinjams.index')
                        ->with('success','Data Pinjam deleted successfully');
    }
}
