<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('kursuses')->insert([
            'jenis_id' => 1,
            'judul_kursus' => 'html',
            'keterangan' => 'html beginner'
        ]);
        DB::table('kursuses')->insert([
            'jenis_id' => 2,
            'judul_kursus' => 'javascript',
            'keterangan' => 'javascript beginner'
        ]);
        DB::table('kursuses')->insert([
            'jenis_id' => 3,
            'judul_kursus' => 'php',
            'keterangan' => 'php beginner'
        ]);
        DB::table('jenis')->insert([
            'jenis_kursus' => 'html'
        ]);
        DB::table('jenis')->insert([
            'jenis_kursus' => 'javascript'
        ]);
        DB::table('jenis')->insert([
            'jenis_kursus' => 'php'
        ]);
    }
}
