<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcio extends Model
{
    use HasFactory;

    public $table = 'funcionarios';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    protected $guarded = [];
}
