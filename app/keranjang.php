<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table = "keranjang";
    // protected $primaryKey = "id";
    protected $fillable = ['nama','nohp','alamat','kodepos','kodebarang','jumlah'];
}
