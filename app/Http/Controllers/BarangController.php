<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\Detgambar;
use App\Detkategori;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('addbarang', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $barang = new Barang();
        $barang->nama_barang = $request->barang;
        $barang->deskripsi = $request->deskripsi;
        $barang->harga = $request->harga;
        $barang->save();
        foreach ($request->kategori as $key => $kategori) {
            $detkategori = new Detkategori();
            $detkategori->barang_id = $barang->id;
            $detkategori->kategori_id = $kategori;
            $detkategori->save();
        }

       
        if($request->hasFile('file')) {
            foreach ($request->file as $file) {
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->move('files', $filename);
                $fileModel = new Detgambar();
                $fileModel->barang_id = $barang->id;
                $fileModel->nama_gambar = $filename;
                $fileModel->ukuran = $filesize;
                $fileModel->save();
                # code...
            }
        }
        return redirect('admps07-home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = Barang::find($id);
        $images = Detgambar::where('barang_id', $id)->get();
        return view ('gambarbarang', compact('barangs','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::with('Detkategori')->find($id);
        $detgambar = Detgambar::all();
        $detkategori = Detkategori::with('Kategori')->get();
        return view ('editbarang', compact('barang','detgambar','detkategori'));
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
        $barang = Barang::find($id);
        $barang->nama_barang = $request->barang;
        $barang->deskripsi = $request->deskripsi;
        $barang->harga = $request->harga;
        $barang->save();

        if($request->hasFile('file')) {
            foreach ($request->file as $file) {
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $file->move('files', $filename);
                $fileModel = Detgambar::where('barang_id', $id)->first();
                $fileModel->nama_gambar = $filename;
                $fileModel->ukuran = $filesize;
                $fileModel->save();

            }

        }

        return redirect('admps07-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('admps07-home');
    }
}
