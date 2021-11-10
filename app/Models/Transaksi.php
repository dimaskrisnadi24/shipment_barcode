<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $primarykey = "id";
    protected $fillable = ['id','jenis_transaksi','jumlah'];

    public function addData($data)
    {
        DB::table('transaksi')-> insert ($data);
    }
}
