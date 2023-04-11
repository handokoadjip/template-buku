<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dosen';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'dosen_id';

    const CREATED_AT = 'dosen_dibuat_pada';
    const UPDATED_AT = 'dosen_diubah_pada';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dosen_nip',
        'dosen_nama',
        'dosen_email',
        'dosen_no_telepon',
        'dosen_alamat',
        'dosen_status',
    ];
}
