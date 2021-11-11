<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nasabah;
use Illuminate\Support\Facades\Hash;
use DataTables;

class NasabahController extends Controller
{
    public function index()
    {
        $data = nasabah::all();
        return view('nasabah.index', ['nasabah' => $data]);
    }

    public function cetaklaporannasabah()
    {
        $nasabah = nasabah::get();
        return view('nasabah.laporannasabah', ['nasabah' => $nasabah]);
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
     
       return view('nasabah.tambahnasabah');
    
    }


    public function store(Request $request)
    {
        $roles = $request->get('roles');
        $name = $request->get('name');
        $email = $request->get('email');
        $password = Hash::make('samita123');
        $alamat = $request->get('alamat');
        $notelp = $request->get('notelp');

        $nasabah_new = new \App\Models\Nasabah;
        $nasabah_new->roles = $roles;
        $nasabah_new->name = $name;
        $nasabah_new->email = $email;
        $nasabah_new->password = $password;
        $nasabah_new->alamat = $alamat;
        $nasabah_new->notelp = $notelp;
        $nasabah_new->save();

        return redirect()->route('nasabah.index');
    }

    public function show($id)
    {
        //
    }

    public function edit_nasabah($id)
    {
        $nasabah = nasabah::findorfail($id);
        return view('nasabah.editnasabah',compact('nasabah'));
    }

    

    public function nasabahupdate(Request $request, $id)
    {
        $nasabah = nasabah::findorfail($id);
        $nasabah->update($request->all());
        return redirect()->route('nasabah.index');
    }
    public function nasabahdelete($id)
    {
        $nasabah = nasabah::findorfail($id);
        $nasabah->delete();
        return back();
    }
}
