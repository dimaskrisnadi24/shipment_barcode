<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nasabah;
use DataTables;

class NasabahController extends Controller
{
    public function index()
    {
        $data = nasabah::all();
        return view('nasabah.index', ['nasabah' => $data]);
    }

    public function tambahnasabah()
    {
    
        return view('nasabah.tambahnasabah');
    }

    public function __construct()
    {
        $this->nasabah = new nasabah();
    }

    public function create(Request $request)
    {
       //nasabah::create($request->all());
       return view('nasabah.tambahnasabah');
       //return redirect()-> route('nasabah.index');
    }


    public function store(Request $request)
    {
        $name = $request->get('name');
        $roles = $request->get('roles');
        $email = $request->get('email');
        $alamat = $request->get('alamat');
        $notelp = $request->get('notelp');

        $nasabah_new = new \App\Models\Nasabah;
        $nasabah_new->name = $name;
        $nasabah_new->roles = $roles;
        $nasabah_new->email = $email;
        $nasabah_new->alamat = $alamat;
        $nasabah_new->notelp = $notelp;
        $nasabah_new->save();

        return redirect()->route('nasabah.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        $nasabah->delete();
        return redirect('nasabah')->with('success', 'Data berhasil Dihapus');
    }
}
