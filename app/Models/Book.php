<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    use \App\Traits\TraitUuid;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'buku';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'buku_id';

    const CREATED_AT = 'buku_dibuat_pada';
    const UPDATED_AT = 'buku_diubah_pada';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'buku_nama',
        'buku_author',
    ];
}
