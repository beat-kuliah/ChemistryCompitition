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
        'id',
        'chemistry_id',
        'date_1',
        'date_2',
        'date_3',
        'date_4',
        'created_at',
        'updated_at'
    ];

    public function chemistry()
    {
        return $this->belongsTo(Chemistry::class, 'chemistry_id', 'id');
    }
}
