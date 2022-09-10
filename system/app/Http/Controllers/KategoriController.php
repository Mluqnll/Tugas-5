<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;


class KategoriController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        return view('admin.superadmin.kategori.index', $data);
    }

    public function create()
    {
        return view('admin.superadmin.kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama = request('nama');
        $kategori->save();
        return redirect('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('admin.superadmin.kategori.show', $data);
    }

    public function edit(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        return view('admin.superadmin.kategori.edit', $data);
    }

    public function update(Kategori $kategori)
    {
        $kategori->nama = request('nama');
        $kategori->save();
        return redirect('admin/kategori')->with('primary', 'Data Berhasil Diedi');
    }

    public function destroy($id)
    {
        Kategori ::destroy($id);
        return back()->with('danger', 'Data Berhasil hapus');
    }
}
