<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'guru_id',
        'jurusan_id'
    ];

    public function jurusan() :BelongsTo
    {
        return $this->BelongsTo(Jurusan::class);
    }

    public function guru() :BelongsTo
    {
        return $this->BelongsTo(Guru::class);
    }
}
