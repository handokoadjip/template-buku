<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'mahasiswa_id' => 'fe530c73-ffb1-493d-b922-a2db0bf72170',
                'mahasiswa_nim' => '112161732',
                'mahasiswa_nama' => 'Ratu Fahilatunnisa',
                'mahasiswa_email' => 'arina@mail.com',
                'mahasiswa_no_telepon' => '083807528041',
                'mahasiswa_jenis_kelamin' => 'P',
                'mahasiswa_alamat' => 'Labuan, Pandeglang',
                'mahasiswa_dibuat_pada' => '2023-04-05 08:49:47',
                'mahasiswa_diubah_pada' => '2023-04-09 13:37:14',
                'mahasiswa_umur' => '18',
            ],
            [
                'mahasiswa_id' => '98343059-5ceb-447f-99ee-891cc426b575',
                'mahasiswa_nim' => '11216172',
                'mahasiswa_nama' => 'Suhendra Saepudin',
                'mahasiswa_email' => 'hendra@mail.com',
                'mahasiswa_no_telepon' => '083807528044',
                'mahasiswa_jenis_kelamin' => 'L',
                'mahasiswa_alamat' => 'Menes, Pandeglang',
                'mahasiswa_dibuat_pada' => '2023-04-09 13:37:43',
                'mahasiswa_diubah_pada' => '2023-04-09 13:37:43',
                'mahasiswa_umur' => '18',
            ],
        ];

        DB::table('mahasiswa')->insert($data);
    }
}
