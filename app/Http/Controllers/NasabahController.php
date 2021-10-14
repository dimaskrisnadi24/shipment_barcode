<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nasabah;

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

    public function insertdata(Request $request)
    {
       nasabah::create($request->all());
       return redirect()-> route('nasabah.index');
    }

    public function store(Request $request)
    {
        $roles = $request->get('roles');
        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');
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

    public function destroy($id)
    {
        $nasabah->delete();
        return redirect('nasabah')->with('success', 'Data berhasil Dihapus');
    }
}
