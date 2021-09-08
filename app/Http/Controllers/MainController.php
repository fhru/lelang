<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    public function lelang()
    {
        // if ($request->has('q')) {
        //     $barang = Barang::where('nama', 'like', $request->q.'%')->paginate(6);
        // }else {
        //     $barang = Barang::orderBy('created_at', 'DESC')->paginate(6);
        // }

        return view('lelang');
    }

    public function detail($id)
    {   
        $data = Crypt::decrypt($id);

        $barang = Barang::find($data);

        return view('detail', compact('barang'));
    }

    public function addbid(Request $request, $id)
    {
        $barang = \App\Models\Barang::find($id);
        $barang->pelelang()->attach(auth()->user()->id,['bid' => $request->bid]);
        
        return redirect()->back()->with('sukses', 'Bid Berhasil Ditambahkan');
    }

    public function fashion(Request $request)
    {
        if ($request->has('q')) {
            $barang = Barang::where([
                ['nama', 'like', $request->q.'%'],
                ['category', '=', 'Fashion']
            ])->paginate(12);
        }else {
            $barang = Barang::where('category', '=', 'Fashion')->latest()->paginate(10);
        }

        return view('category.fashion', compact('barang'));
    }
    
    public function elektronik(Request $request)
    {
        if ($request->has('q')) {
            $barang = Barang::where([
                ['nama', 'like', $request->q.'%'],
                ['category', '=', 'Elektronik']
            ])->paginate(12);
        }else {
            $barang = Barang::where('category', '=', 'Elektronik')->latest()->paginate(10);
        }

        return view('category.elektronik', compact('barang'));
    }
    
    public function rumahtangga(Request $request)
    {
        if ($request->has('q')) {
            $barang = Barang::where([
                ['nama', 'like', $request->q.'%'],
                ['category', '=', 'Rumah Tangga']
            ])->paginate(12);
        }else {
            $barang = Barang::where('category', '=', 'Rumah Tangga')->latest()->paginate(10);
        }

        return view('category.rumahtangga', compact('barang'));
    }

    public function automotive(Request $request)
    {
        if ($request->has('q')) {
            $barang = Barang::where([
                ['nama', 'like', $request->q.'%'],
                ['category', '=', 'Automotive']
            ])->paginate(12);
        }else {
            $barang = Barang::where('category', '=', 'Automotive')->latest()->paginate(10);
        }

        return view('category.automotive', compact('barang'));
    }

    public function profile()
    {
        return view('profile');
    }
}
