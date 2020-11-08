<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientcategorie extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getAll(){
        return $this::orderBy('category')->get();
    }
}
