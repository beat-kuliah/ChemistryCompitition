<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiniMasa extends Model
{
    use HasFactory;

    protected $table = 'lini_masa';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'gel_1_1',
        'gel_1_2',
        'gel_2_1',
        'gel_2_2',
        'tm_1',
        'pre',
        'p_1',
        'tm_2',
        'qf',
        'p_2',
        'created_at',
        'updated_at'
    ];
}
