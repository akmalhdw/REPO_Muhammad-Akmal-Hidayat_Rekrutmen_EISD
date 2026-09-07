<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $user = Auth::user();
        
        if ($user && $user->role === 'admin') {
            $laporans = Laporan::with(['kategoris', 'user'])->latest()->get();
        } elseif ($user) {
            $laporans = Laporan::with(['kategoris', 'user'])->where('user_id', $user->id)->latest()->get();
        } else {
            $laporans = collect();
        }

        return view('laporan.index', compact('kategoris', 'laporans'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_laporan' => 'required|string|max:255',
            'deskripsi'     => 'required|string',
            'kategori_id'   => 'required|array|min:1',
            'kategori_id.*' => 'exists:kategoris,id',
        ], [
            'judul_laporan.required' => 'Judul laporan wajib diisi.',
            'deskripsi.required'     => 'Deskripsi laporan wajib diisi.',
            'kategori_id.required'   => 'Minimal pilih satu kategori.',
            'kategori_id.min'        => 'Minimal pilih satu kategori.'
        ]);

        $laporan = Laporan::create([
            'user_id'       => Auth::id(),
            'judul_laporan' => $validatedData['judul_laporan'],
            'deskripsi'     => $validatedData['deskripsi'],
        ]);

        $laporan->kategoris()->sync($validatedData['kategori_id']);

        return redirect()->route('laporan.index')->with('success', 'Laporan dampak bencana Karhutla berhasil dikirim!');
    }
}
