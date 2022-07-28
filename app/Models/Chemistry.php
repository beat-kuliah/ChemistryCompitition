<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chemistry extends Model
{
    use HasFactory;

    protected $table = 'chemistry';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];

    public function competition()
    {
        return $this->hasMany(Competition::class);
    }

    public function lini_masa()
    {
        return $this->hasMany(LiniMasa::class);
    }
}
