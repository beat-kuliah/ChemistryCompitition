<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $table = 'sponsor';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'image',
        'created_at',
        'updated_at'
    ];
}
