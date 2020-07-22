<?php

namespace App\Models\Alumns;

use Illuminate\Database\Eloquent\Model;

class DebitType extends Model
{

    protected $table = "debit_type";

    protected $fillable = [
    	'id',
        'concept',
        'created_at',
        'updated_at',
    ];
}