<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = Pendidikan::all();
        return view('pendidikans.index', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendidikans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Nama' => 'required|min:5',
        ]);


        Pendidikan::create([
            'Nama'   => $request->Nama,
        ]);

        return redirect()->route('pendidikans.index')->with(['success' => 'Data Berhasil Di Simpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);

        return view('pendidikans.show', compact('pendidikans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);

        return view('pendidikans.edit', compact('pendidikans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
