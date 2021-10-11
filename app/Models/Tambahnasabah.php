<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambahnasabah extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primarykey = "id";
    protected $fillable = ['id','nama','email', 'password', 'alamat','notelp','totalsampah','totalsaldo'];
}
