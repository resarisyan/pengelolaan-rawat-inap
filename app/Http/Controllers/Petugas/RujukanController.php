<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Http\Requests\RujukanRequest;
use App\Models\PasienRawatInap;
use App\Models\Rujukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RujukanController extends Controller
{
    public function index()
    {
        $data['rujukans'] = Rujukan::all();
        return view('petugas.rujukan.index')->with($data);
    }

    public function create()
    {
        $data['pasiens'] = PasienRawatInap::all();
        return view('petugas.rujukan.create')->with($data);
    }

    public function store(RujukanRequest $request)
    {
        $data = $request->all();
        Rujukan::create($data);
        Session::flash('status', 'Data Berhasil Dimasukkan');
        return redirect()->route('petugas.rujukan.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['rujukans'] = Rujukan::findOrFail($id);
        $data['pasiens'] = PasienRawatInap::all();
        return view('petugas.rujukan.edit')->with($data);
    }

    public function update(RujukanRequest $request, $id)
    {
        $data = $request->all();
        $rujukan = Rujukan::findOrFail($id);
        $rujukan->update($data);
        Session::flash('status', 'Data Berhasil Diubah');
        return redirect()->route('petugas.rujukan.index');
    }

    public function destroy($id)
    {
        $rujukan = Rujukan::findOrFail($id);
        $rujukan->delete();
        Session::flash('status', 'Data Berhasil Dihapus');
        return redirect()->route('petugas.rujukan.index');
    }
}
