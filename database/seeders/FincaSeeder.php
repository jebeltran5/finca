<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Finca;

class FincaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Finca::create([
            'name' => 'finca la esperanza',
            'location' => 'Antoquia Colombia',
            'user_id' =>1,
        ]);
    }
}
