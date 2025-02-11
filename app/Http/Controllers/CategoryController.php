<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // 
        $kategori= Category::all();

        // $cariid = Category::find(1);
        // $carinama = Category::where('nama', 'LIKE', '%ires%');

        return view('admin.kategori',['kat' => $kategori]);
        //route ('nama_route')
    }
    
    public function store(StoreKategoriRequest $request)
    {
        // 
        try{
        $param = $request->validated();

        // model eloquent untuk menyimpan data
        
        Category::create($param);

        $kategori = new Category();
        $kategori->nama= $param ['nama'];
        $kategori->deskripsi = $param ['deskripsi'];

        return redirect()
               ->route('admin.inkategori')
               ->with('succes', 'Data Berhasil di Inputkan');
    }       
    catch(\Exeception $e)
    {
        return redirect()
               ->route('admin.inkategori')
               ->with('error', $e->getMessage());      
    }

    }
}
