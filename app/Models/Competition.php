<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $table = 'competition';

    protected $primaryKey = 'id';

    protected $fillable = [
        'chemistry_id',
        'chempaign_type-id',
        'address',
        'school',
        'regional_id',
        'status',
        'created_by',
        'created_at',
        'updated_at'
    ];

    public function chemistry()
    {
        return $this->belongsTo(Chemistry::class, 'chemistry_id', 'id');
    }

    public function chempaign()
    {
        return $this->belongsTo(Chemistry::class, 'chempaign_type_id', 'id');
    }


    public function regional()
    {
        return $this->belongsTo(Regional::class, 'regional_id', 'id');
    }

    public function person()
    {
        return $this->hasMany(Person::class);
    }
}
