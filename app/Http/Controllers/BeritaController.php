<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show($id)
    {
        $berita = \App\Models\Berita::findOrFail($id);
        return view('berita.show', compact('berita'));
    }
}
