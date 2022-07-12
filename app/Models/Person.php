<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';

    protected $primaryKey = 'id';

    protected $fillable = [
        'competition_id',
        'person_type_id',
        'mahasiswa',
        'name',
        'no_indentitas',
        'gender',
        'no_telp',
        'email',
        'id_line',
        'scan_kartu_pelajar',
        'foto',
        'created_at',
        'updated_at'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class, 'competition_id', 'id');
    }

    public function person_type()
    {
        return $this->belongsTo(PersonType::class, 'person_type_id', 'id');
    }
}
