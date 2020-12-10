<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Barang;
use App\Detkategori;
use App\Detgambar;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::offset(0)->limit(10)->get();
        return view('welcome', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategoris = Kategori::find($id);
        $barangs =  Barang::whereHas("Detkategori", function($query) use ($id){
            $query->where("kategori_id", $id);
        })
        ->with("Detgambar")
        ->get();
        return $barangs;
        return view ('viewbarang', compact('barangs'));
    }

    public function detail($id)
    {
        
        $detail =  Barang::with("Detgambar")->with("Detkategori")->find($id);
        $detkategori = Detkategori::with('Kategori')->get();

        
        return view ('detailbarang', compact('detail','detkategori'));
    }

    public function about()
    {
        
        return view('about');
    }

    public function contact()
    {
        
        return view('contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
