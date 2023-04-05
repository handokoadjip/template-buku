<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'mahasiswa_id';

    const CREATED_AT = 'mahasiswa_dibuat_pada';
    const UPDATED_AT = 'mahasiswa_diubah_pada';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mahasiswa_nim',
        'mahasiswa_nama',
        'mahasiswa_alamat',
        'mahasiswa_email',
        'mahasiswa_no_telepon',
        'mahasiswa_jenis_kelamin',
        'mahasiswa_umur',
    ];
}
