<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function transaksi_json()
    {
        $data = Transaksi::orderBy('transaksi.id','DESC');
        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = "<div class='btn btn-group'><a href='".url("transaksi/edit/$row->id")."'class='btn btn-warning'>Edit</a>
                <a href='".url("transaksi/destroy/$row->id")."'class='btn btn-danger'>Delete</a></div>";
                return $btn;
            })
            ->rawColumns(['action'])->toJson();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transaksi.index');
    }

    public function tambahtransaksi()
    {
    
        return view('transaksi.tambahtransaksi');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cetaklaporantransaksi()
    {
        $transaksi = transaksi_json::get();
        return view('transaksi.laporantransaksi', ['transaksi' => $transaksi]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findorfail($id);
        $transaksi->delete();
        return back();
    }
}
