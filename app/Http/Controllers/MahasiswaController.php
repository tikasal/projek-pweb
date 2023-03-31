<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'id_mhs' => 'string|required',
            'nama_mhs' => 'string|nullable',
            'kelas' => 'string|required',
            'jurusan' => 'string|required'
        ]);

        Mahasiswa::create($data);
        return redirect(route('mahasiswa.index'));
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
        $mahasiswa =  Mahasiswa::where('id_mhs', $id)->first();
        return view('mahasiswa.edit')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->validate($request, [
            'id_mhs' => 'string|required',
            'nama_mhs' => 'string|required',
            'kelas' => 'string|required',
            'jurusan' => 'string|required'
        ]);
        DB::table('mahasiswa')->where("id_mhs", $id)->limit(1)->update($data);
        return redirect(route('mahasiswa.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::where('id_mhs', $id)->delete();
        echo ("User Record deleted successfully.");
        return redirect()->route('mahasiswa.index');
    }
}
