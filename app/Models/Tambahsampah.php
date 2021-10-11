<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TambahSampah extends Model
{
    use HasFactory;
    protected $table = "datasampah";
    protected $primarykey = "id";
    protected $fillable = ['id','nama','jenis','harga'];

    public function addData($data)
    {
        DB::table('datasampah')-> insert ($data);
    }
}

