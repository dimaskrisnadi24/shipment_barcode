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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function insertdata(Request $request)
    {
       nasabah::create($request->all());
       return redirect()-> route('nasabah.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $roles = $request->get('roles');
        $email = $request->get('email');
        $password = $request->get('password');
        $alamat = $request->get('alamat');
        $notelp = $request->get('notelp');

        $nasabah_new = new \App\Models\nasabah;
        $nasabah_new->name = $name;
        $nasabah_new->roles = $roles;
        $nasabah_new->harga = $harga;
        $nasabah_new->save();

        return redirect()->route('nasabah.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nasabah->delete();
        return redirect('nasabah')->with('success', 'Data berhasil Dihapus');
    }
}
