<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProduk extends Model
{
	public $timestamps = true;
	protected $table = "produk";
	protected $guarded = ['id'];
}