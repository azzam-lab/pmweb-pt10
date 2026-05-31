<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Divisi;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder {
    public function run(): void {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Divisi::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Divisi::insert([
            ['nama_divisi' => 'IT'],
            ['nama_divisi' => 'HRD'],
            ['nama_divisi' => 'Keuangan']
        ]);
    }
}