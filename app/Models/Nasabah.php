<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nasabah extends Model
{
    protected $table = "users";
    protected $primarykey = "id";
    protected $fillable = ['id','roles','name','email','password','alamat','notelp','totalsampah','totalsaldo'];

    public function addData($data)
    {
        DB::table('users')-> insert ($data);
    }
}
