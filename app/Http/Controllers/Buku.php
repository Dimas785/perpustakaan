<?php

namespace App\Http\Controllers;

use App\Models\Buku as ModelsBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class Buku extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ModelsBuku::orderBy('judul_buku', 'desc')->get();
         return view('main2')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $data = [
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'file_name' => $imageName,
        ];

        // return $imageName;
        ModelsBuku::create($data);
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ModelsBuku::where('judul_buku', $id)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul_buku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);
        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $data = [
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'file_name' => $imageName,
        ];

        // return $imageName;
       ModelsBuku::where('judul_buku', $id)->update($data);
       return Redirect::to('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelsBuku::where('judul_buku', $id)->delete();
        return redirect()->to('buku')->with('Berhasil', 'Berhasil menghapus buku');
    }
}
