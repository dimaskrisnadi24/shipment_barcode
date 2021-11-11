<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sampah;
use DataTables;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     
     */
    
    public function index()
    {
        $data = Sampah::paginate(10);
        return view('sampah.index', ['sampah' => $data]);
    }

    public function cetaklaporansampah()
    {
        $sampah = Sampah::get();
        return view('sampah.laporansampah', ['sampah' => $sampah]);
    }

    public function hargasampah()
    {
        $sampah = Sampah::get();
        return view('sampah.hargasampah', ['sampah' => $sampah]);
    }

    public function tambahsampah()
    {
    
        return view('sampah.tambahsampah');
    }


    public function __construct()
    {
        $this->sampah = new sampah();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function insertdata(Request $request)
    {
       sampah::create($request->all());
       return redirect()-> route('sampah.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->get('nama');
        $jenis = $request->get('jenis');
        $harga = $request->get('harga');

        $sampah_new = new \App\Models\Sampah;
        $sampah_new->nama = $nama;
        $sampah_new->jenis = $jenis;
        $sampah_new->harga = $harga;
        $sampah_new->save();

        return redirect()->route('sampah.index')->with('success','Data Berhasil Di Update');
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
        $sampah = Sampah::findorfail($id);
        return view('sampah.editsampah',compact('sampah'));
    }

    public function update(Request $request, $id)
    {
        $sampah = Sampah::findorfail($id);
        $sampah->update($request->all());
        return redirect()->route('sampah.index')->with('toast_success','Data Berhasil Di Update ');
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
        $sampah = Sampah::findorfail($id);
        $sampah->delete();
        return back();
    }
}
