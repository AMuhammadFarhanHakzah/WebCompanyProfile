<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Exception;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $dataPengumuman = Pengumuman::all();
        return view('dashboard.pengumuman.index', compact('dataPengumuman'));
    }

    public function create()
    {
        return view('dashboard.pengumuman.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => ['required'],
            'konten' => ['required'],
        ]);
        $inputan['judul'] = $request->judul;
        $inputan['konten'] = $request->konten;
        $id = Pengumuman::create($inputan);

        return redirect()->route('pengumuman.show', $id->id)->with('success', 'Pengumuman berhasil ditambahkan');
    }

    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            return view('dashboard.pengumuman.show', compact('pengumuman'));
        } else {
            return view('dashboard.pengumuman.index')->with('error', 'pengumuman tidak dapat ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $inputan = $request->all();

            // throw new Exception("hai ini error");

            Pengumuman::find($id)->update($inputan);
            

            return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diupdate');
            
        } catch (Exception $e) {
            return back()->withInput()->withErrors([$e->getMessage()]);
        }
        
    }

    public function delete($id)
    {
        Pengumuman::find($id)->delete();
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil dihapus');
    }
}
