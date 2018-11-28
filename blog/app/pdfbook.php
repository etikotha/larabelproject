<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pdfbook extends Model
{
    protected $fillable = [
        'title', 'path',
    ];
}
