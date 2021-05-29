<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1 -> nbi = "1461900212";
        $mhs1 -> nama_mhs = "R Yusianto Kusumo";
        $mhs1 -> save();

        $mhs2 = new Mahasiswa();
        $mhs2 -> nbi = "146190029";
        $mhs2 -> nama_mhs = "Andre";
        $mhs2 -> save();
    }
}