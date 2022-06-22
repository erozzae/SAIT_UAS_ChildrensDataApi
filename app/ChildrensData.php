<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildrensData extends Model
{
    protected $table = 'daftar_anak';
    protected $primaryKey = 'id_anak';
    protected $fillable = [
        'nama', 'jenis_kelamin', 'alamat','ttl','golongan_darah'
    ];
    public $timestamps = false;
}
