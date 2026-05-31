<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisTraining;
use Illuminate\Support\Facades\DB;

class JenisTrainingSeeder extends Seeder {
    public function run(): void {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        JenisTraining::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        JenisTraining::insert([
            ['nama_jenis' => 'Teknis'],
            ['nama_jenis' => 'Soft Skill'],
            ['nama_jenis' => 'Manajerial']
        ]);
    }
}