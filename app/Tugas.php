<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = "Tugas";
    protected $fillable = ['judul','deskripsi','status'];
}
