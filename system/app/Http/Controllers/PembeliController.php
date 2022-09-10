<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pembeli;


class PembeliController extends Controller
{
    public function index()
    {
        $data['list_pembeli'] = Pembeli::all();
        return view('admin.superadmin.pembeli.index', $data);
    }

    public function create()
    {
        return view('admin.superadmin.pembeli.create');
    }

    public function store(Request $request)
    {
        $pembeli = New Pembeli;
        $pembeli->nama = request('nama');
        $pembeli->stock = request('stock');
        $pembeli->harga = request('harga');
        $pembeli->deskripsi = request('deskripsi');
        $pembeli->save();
        return redirect('admin/pembeli')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Pembeli $pembeli)
    {
        $data['pembeli'] = $pembeli;
        return view('admin.superadmin.pembeli.show', $data);
    }

    public function edit(Pembeli $pembeli)
    {
        $data['pembeli'] = $pembeli;
        return view('admin.superadmin.pembeli.edit', $data);
    }

    public function update(Pembeli $pembeli)
    {
        $pembeli->nama = request('nama');
        $pembeli->stock = request('stock');
        $pembeli->harga = request('harga');
        $pembeli->deskripsi = request('deskripsi');
        $pembeli->save();
        return redirect('admin/pembeli')->with('primary', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        pembeli ::destroy($id);
        return back()->with('danger', 'Data Berhasil hapus');
    }
}
